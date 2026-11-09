<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonials;

class TestimonialsController extends Controller
{
   public function show(){
    return view('backend.testimonials.form');
   }
   public function store(Request $request){
    $testimonials = new testimonials();
    $testimonials->title = $request->title;
    $testimonials->description = $request->description;
    $testimonials->paragraph = $request->paragraph;
    $testimonials->save();
    return redirect()->route('testimonials.table');
   }
   public function table(){
    $testimonialsdata = testimonials::all();
    return view('backend.testimonials.table', compact('testimonialsdata'));
   }
   public function delete($id){
    $data = testimonials::find($id);
    $data->delete();
    return redirect()->back();
   }
   public function edit($id){
      $data = testimonials::find($id);
      return view('backend.testimonials.edit', compact('data'));
   }
   public function update(Request $request ,$id){
      $data = testimonials::find($id);
      $data->title = $request->title;
      $data->description = $request->description;
      $data->paragraph = $request->paragraph;
      $data->update();
      return redirect()->route('testimonials.table');
   }
}
