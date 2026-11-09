<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\innerbanner;

class InnerbannerController extends Controller
{
    public function show(){
        return view('backend.about.inner-banner.form');
    }
    public function store(Request $request){
        $innerbanner = new innerbanner();
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $innerbanner->image = '/' . $imageName;
    }
        $innerbanner->title = $request->title;
        $innerbanner->save();
        return redirect()->route('innerbanner.table');
    }
    public function table(){
        $innerbannerdata = innerbanner::all();
        return view('backend.about.inner-banner.table',compact('innerbannerdata'));
    }
    public function delete($id){
        $data = innerbanner::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = innerbanner::find($id);
        return view('backend.about.inner-banner.edit',compact('data'));

    }
    public function update(Request $request , $id){
        $data = innerbanner::find($id);
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $data->image = '/' . $imageName;
    }
        $data->title = $request->title;
        $data->update();
        return redirect()->route('innerbanner.table');
    }
}
