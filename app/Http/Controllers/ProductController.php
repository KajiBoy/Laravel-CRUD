<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(){
        return view('create');
    }
    public function create(Request $request){
       $name = $request->input('name');
       $description = $request->input('description');
       $price = $request->input('price');
       $quantity = $request->input('quantity');

       $creating = new Product();

       $creating->name =$name;
       $creating->description=$description;
       $creating->price= $price;
       $creating->quantity= $quantity;
       $creating->save();

      return 'Product Saved';
    }

    public function read(){
        $products = Product::all();
        return view('index', compact('products'));
    }
}
