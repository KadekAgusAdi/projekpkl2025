<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller {
    // Assumes user authenticated via token (middleware auth:sanctum or auth:api)
    public function index(Request $req) {
        $user = $req->user();
        $carts = Cart::with('product')->where('user_id',$user->id)->get();
        return response()->json($carts);
    }

    public function add(Request $req) {
        $user = $req->user();
        $req->validate(['product_id'=>'required|exists:products,id','quantity'=>'integer|min:1']);
        $product = Product::findOrFail($req->product_id);
        $cart = Cart::updateOrCreate(
            ['user_id'=>$user->id,'product_id'=>$product->id],
            ['quantity'=>\DB::raw('GREATEST(quantity + '.(int)$req->quantity.', 1)')] // NB: raw for increment logic
        );
        // Simpler: check existing and increment in PHP.
        return response()->json($cart);
    }

    public function update(Request $req, $id) {
        $user=$req->user();
        $cart = Cart::where('user_id',$user->id)->where('id',$id)->firstOrFail();
        $req->validate(['quantity'=>'required|integer|min:1']);
        $cart->update(['quantity'=>$req->quantity]);
        return response()->json($cart);
    }

    public function remove(Request $req, $id) {
        $user = $req->user();
        $cart = Cart::where('user_id',$user->id)->where('id',$id)->firstOrFail();
        $cart->delete();
        return response()->json(['message'=>'deleted']);
    }
}
