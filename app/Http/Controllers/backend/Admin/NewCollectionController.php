<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\newcollection;

class NewCollectionController extends Controller
{
    public function show(){
        return view('backend.newcollection.form');
    }
    public function store(Request $request){
        $newcollect = new newcollection();
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $newcollect->image = '/' . $imageName;
    }
        $newcollect->button = $request->button;
        $newcollect->price = $request->price;
        $newcollect->save();
        return redirect()->route('newcollection.table');
    }
    public function table(){
        $newcollectdata = newcollection::all();
        return view('backend.newcollection.table', compact('newcollectdata'));
    }
    public function delete($id){
        $data = newcollection::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = newcollection::find($id);
        return view('backend.newcollection.edit', compact('data'));
    }
    public function update(Request $request , $id){
        $data = newcollection::find($id);
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $data->image = '/' . $imageName;
    }
        $data->button = $request->button;
        $data->price = $request->price;
        $data->update();
        return redirect()->route('newcollection.table');
    }
}
