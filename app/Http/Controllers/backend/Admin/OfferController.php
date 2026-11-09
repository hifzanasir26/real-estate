<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offer;

class OfferController extends Controller
{
   public function show(){
    return view('backend.shop.offer.form');
   }
   public function store(Request $request){
    $offer = new offer();
    $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $offer->image = '/' . $imageName;
 }
    $offer->price = $request->price;
    $offer->save();
    return redirect()->route('offer.table');
   }
   public function table(){
    $offerdata = offer::all();
    return view('backend.shop.offer.table',compact('offerdata'));
   }
   public function delete($id){
    $data = offer::find($id);
    $data->delete();
    return redirect()->back();
   }
   public function edit($id){
    $data = offer::find($id);
    return view('backend.shop.offer.edit',compact('data'));
   }
   public function update(Request $request, $id){
    $data = offer::find($id);
    $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $data->image = '/' . $imageName;
 }
    $data->price = $request->price;
    $data->update();
    return redirect()->route('offer.table');
   }
}
