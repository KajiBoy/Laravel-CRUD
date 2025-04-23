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

      return redirect('/') -> with('User created successfully');
    }

    public function read(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    
    public function getId($id){
        $productId = $id;
        return view('modify',compact('productId'));
    }




    public function modify(Request $request, $id){
    
    $product = Product::findOrFail($id);
    //Ahangaha ino validating ushaste wanayireka ugakoresha biriya bisanzwe kbx
    $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'required|string',
        'price'       => 'required|numeric|min:0',
        'quantity'    => 'required|integer|min:0',
    ]);
    //uyu murongo ni wo wakoze update gusa ukoresheje if function ya update()
    $updated = $product->update($validated);
    if ($updated) {
        return redirect('/')
               ->with('success', 'Product updated successfully.');
    }

    return back()->with('error', 'Error while updating product.');
   }

   public function deleteProduct($id){
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
        return redirect('/');
   }

}
