<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run() {
        $cat = Category::create(['name'=>'Kaos','description'=>'Kaos pria/wanita']);
        Product::create(['category_id'=>$cat->id,'name'=>'Kaos Polos Putih','price'=>75000,'stock'=>50,'description'=>'Kaos cotton combed 30s','image'=>null]);
        Product::create(['category_id'=>$cat->id,'name'=>'Kaos Lengan Panjang','price'=>120000,'stock'=>20,'description'=>'Kaos lengan panjang premium','image'=>null]);
    }
}
