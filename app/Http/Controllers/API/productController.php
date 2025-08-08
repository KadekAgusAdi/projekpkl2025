<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller {
    public function index(Request $req) {
        $q = Product::with('category');
        if($req->has('category')) $q->where('category_id',$req->category);
        if($req->has('search')) $q->where('name','like','%'.$req->search.'%');
        $products = $q->paginate(12);
        return response()->json($products);
    }

    public function show($id) {
        $product = Product::with('category')->findOrFail($id);
        return response()->json($product);
    }

    public function store(Request $req) {
        $v = Validator::make($req->all(), [
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'integer|min:0'
        ]);
        if($v->fails()) return response()->json(['errors'=>$v->errors()],422);

        $data = $req->only(['category_id','name','description','price','stock','image']);
        $product = Product::create($data);
        return response()->json($product,201);
    }

    public function update(Request $req, $id) {
        $product = Product::findOrFail($id);
        $product->update($req->only(['category_id','name','description','price','stock','image']));
        return response()->json($product);
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message'=>'deleted']);
    }
}
