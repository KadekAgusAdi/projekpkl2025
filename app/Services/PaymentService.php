<?php
namespace App\Services;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;

class PaymentService {
    /**
     * Create payment transaction at payment gateway.
     * Returns array with 'redirect_url' or 'transaction_id' or QR payload.
     */
    public static function createGatewayPayment(Order $order, $payload = []) {
        // Contoh stub: buat request ke provider (saat implementasi, gunakan SDK provider)
        // 1) Build body
        $body = [
            'order_id' => $order->id,
            'gross_amount' => $order->total_amount,
            'items' => $order->items->map(fn($it)=>[
                'id'=>$it->product_id, 'name'=>$it->product->name ?? 'item', 'quantity'=>$it->quantity, 'price'=>$it->price
            ])->toArray(),
            // tambahan: customer info, callback url
        ];
        // 2) Panggil provider -> ini hanya contoh; ganti dengan API nyata
        // $resp = Http::withBasicAuth(config('services.payment.server_key'),'')->post(config('services.payment.url').'/charge', $body);
        // Simulasi response:
        $resp = [
            'transaction_id' => 'TRX'.time(),
            'redirect_url' => 'https://sandbox.payment-gateway/send-to-checkout'
        ];

        // Simpan record Payment
        $payment = Payment::create([
            'order_id' => $order->id,
            'payment_method' => 'payment_gateway',
            'transaction_id' => $resp['transaction_id'],
            'payment_status' => 'pending',
            'amount' => $order->total_amount,
            'raw_response' => $resp
        ]);

        return $resp;
    }

    /**
     * Generate QRIS payload (stub).
     * Returns array with 'qris_url' or 'qrcode_base64' or 'qris_string'.
     */
    public static function createQrisPayment(Order $order) {
        // Implementasi nyata: panggil provider yang support QRIS (Xendit / Midtrans / bank)
        $resp = [
            'transaction_id' => 'QR'.time(),
            'qris_string' => '000201010211...', 
            'qris_deep_link' => 'https://qris.example/qr/12345'
        ];

        $payment = Payment::create([
            'order_id' => $order->id,
            'payment_method' => 'qris',
            'transaction_id' => $resp['transaction_id'],
            'payment_status' => 'pending',
            'amount' => $order->total_amount,
            'raw_response' => $resp
        ]);

        return $resp;
    }

    /**
     * Handle webhook/callback from gateway: update Payment & Order.
     * $data adalah payload provider.
     */
    public static function handleGatewayCallback(array $data) {
        // Sesuaikan identifikasi: transaction_id atau order_id
        $transactionId = $data['transaction_id'] ?? null;
        if(!$transactionId) return null;

        $payment = Payment::where('transaction_id', $transactionId)->first();
        if(!$payment) return null;

        // Contoh mapping status
        $status = $data['status'] ?? $data['payment_status'] ?? 'pending';
        if(in_array($status, ['settlement','paid','success'])) {
            $payment->payment_status = 'paid';
            $payment->paid_at = now();
            $payment->raw_response = array_merge($payment->raw_response ?? [], $data);
            $payment->save();

            $order = $payment->order;
            $order->payment_status = 'paid';
            $order->order_status = 'processing';
            $order->save();

            // kurangi stok
            foreach($order->items as $item) {
                $product = $item->product;
                if($product) {
                    $product->decrement('stock', $item->quantity);
                }
            }
        } else {
            $payment->payment_status = 'failed';
            $payment->raw_response = array_merge($payment->raw_response ?? [], $data);
            $payment->save();
        }

        return $payment;
    }
}
