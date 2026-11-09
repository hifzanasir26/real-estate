<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
   public function show(){
    return view('backend.shop.product.form');
   }
   public function store(Request $request){
    $product = new product();
    $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $product->image = '/' . $imageName;
 }
    $product->button = $request->button;
    $product->price = $request->price;
    $product->heading = $request->heading;
    $product->description = $request->description;
    $product->save();
    return redirect()->route('product.table');
   }
   public function table(){
    $productdata = product::all();
    return view('backend.shop.product.table',compact('productdata'));
   }
   public function delete($id){
    $data = product::find($id);
    $data->delete();
    return redirect()->back();
   }
   public function edit($id){
    $data = product::find($id);
    return view('backend.shop.product.edit',compact('data'));
   }
   public function update(Request $request, $id){
    $data = product::find($id);
    $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $data->image = '/' . $imageName;
 }
    $data->button = $request->button;
    $data->price = $request->price;
    $data->heading = $request->heading;
    $data->description = $request->description;
    $data->update();
    return redirect()->route('product.table');
   }
}
