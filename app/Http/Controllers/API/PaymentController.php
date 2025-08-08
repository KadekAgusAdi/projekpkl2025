<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller {
    // This route should be set as webhook/callback in payment provider console
    public function gatewayWebhook(Request $req) {
        $payload = $req->all();
        // validate signature depending provider

        $payment = PaymentService::handleGatewayCallback($payload);
        if(!$payment) return response()->json(['message'=>'not found'],404);
        return response()->json(['message'=>'ok']);
    }

    // QRIS callback (if provider separate)
    public function qrisWebhook(Request $req) {
        $payload = $req->all();
        $payment = PaymentService::handleGatewayCallback($payload);
        if(!$payment) return response()->json(['message'=>'not found'],404);
        return response()->json(['message'=>'ok']);
    }
}
