<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feature;

class FeatureController extends Controller
{
  public function show(){
    return view('backend.feature.form');
  }
  public function store(Request $request){
    $feature = new feature();
    $image = $request->file('image');
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $feature->image = '/' . $imageName;
    }
    $feature->title = $request->title;
    $feature->description = $request->description;
    $feature->button = $request->button;
    $feature->save();
    return redirect()->route('feature.table');
  }
  public function table(){
    $featuredata = feature::all();
    return view('backend.feature.table' ,compact('featuredata'));

  }
  public function delete($id){
    $data = feature::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function edit($id){
    $data = feature::find($id);
    return view('backend.feature.edit', compact('data'));
  }
  public function update(Request $request ,$id){
    $data = feature::find($id);
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
      $data->save();
      return redirect()->route('feature.table');
    
  }
}
