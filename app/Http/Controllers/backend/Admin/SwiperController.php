<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\swiper;

class SwiperController extends Controller
{
   public function show(){
    return view('backend.swiper.form');
   }
   public function store(Request $request){
    $swiper = new swiper();
     $image = $request->file('image');
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $swiper->image = '/' . $imageName;
     }
     $swiper->button = $request->button;
     $swiper->price = $request->price;
     $swiper->save();
     return redirect()->route('swiper.table');
   }
   public function table(){
    $swiperdata = swiper::all();
    return view('backend.swiper.table', compact('swiperdata'));
   }
   public function delete($id){
    $data = swiper::find($id);
    $data->delete();
    return redirect()->back();
   }
   public function edit($id){
    $data = swiper::find($id);
    return view('backend.swiper.edit', compact('data'));
   }
   public function update(Request $request, $id){
    $data = swiper::find($id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $data->image = '/' . $imageName;
     }
     $data->button = $request->button;
     $data->price = $request->price;
     $data->update();
     return redirect()->route('swiper.table');
   }
}
