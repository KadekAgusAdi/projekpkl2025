<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller {
    public function checkout(Request $req) {
        $user = $req->user();
        $req->validate([
            'payment_method'=>'required|in:payment_gateway,qris',
            'shipping_address'=>'required'
        ]);

        $carts = Cart::with('product')->where('user_id',$user->id)->get();
        if($carts->isEmpty()) return response()->json(['message'=>'cart empty'],422);

        DB::beginTransaction();
        try {
            $total = 0;
            foreach($carts as $c) $total += $c->product->price * $c->quantity;

            $order = Order::create([
                'user_id'=>$user->id,
                'total_amount'=>$total,
                'payment_method'=>$req->payment_method,
                'payment_status'=>'pending',
                'order_status'=>'pending',
                'shipping_address'=>$req->shipping_address,
            ]);

            foreach($carts as $c) {
                OrderItem::create([
                    'order_id'=>$order->id,
                    'product_id'=>$c->product_id,
                    'quantity'=>$c->quantity,
                    'price'=>$c->product->price,
                    'subtotal'=> $c->product->price * $c->quantity,
                ]);
            }

            // clear cart
            Cart::where('user_id',$user->id)->delete();

            // create payment via service
            if($req->payment_method === 'payment_gateway') {
                $resp = PaymentService::createGatewayPayment($order);
            } else {
                $resp = PaymentService::createQrisPayment($order);
            }

            DB::commit();
            return response()->json([
                'order' => $order->load('items.product'),
                'payment' => $resp
            ],201);
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json(['error'=>$e->getMessage()],500);
        }
    }

    public function show(Request $req, $id) {
        $user = $req->user();
        $order = Order::with('items.product','payment')->where('user_id',$user->id)->findOrFail($id);
        return response()->json($order);
    }
}
