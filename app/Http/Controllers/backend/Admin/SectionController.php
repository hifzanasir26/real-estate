<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\section;

class SectionController extends Controller
{
  public function show(){
    return view('backend.about.section.form');
  }
  public function store(Request $request){
    $section = new section();
    $image = $request->file('image');
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $section->image = '/' . $imageName;
    }
    $section->title = $request->title;
    $section->description = $request->description;
    $section->button = $request->button;
    $section->save();
    return redirect()->route('section.table');
  }
  public function table(){
    $sectiondata = section::all();
    return view('backend.about.section.table' ,compact('sectiondata'));

  }
  public function delete($id){
    $data = section::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function edit($id){
    $data = section::find($id);
    return view('backend.about.section.edit', compact('data'));
  }
  public function update(Request $request ,$id){
    $data = section::find($id);
     $image = $request->file('image');
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $data->image = '/' . $imageName;
    }
      $data->title = $request->title;
      $data->description = $request->description;
      $data->button = $request->button;
      $data->update();
      return redirect()->route('section.table');
    
  }
}
