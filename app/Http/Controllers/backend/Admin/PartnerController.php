<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partner;

class PartnerController extends Controller
{
    public function show(){
        return view('backend.about.partner.form');
    }
    public function store(Request $request){
        $partner = new partner();
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $partner->image = '/' . $imageName;
    }
        $partner->title = $request->title;
        $partner->description = $request->description;
        $partner->flink = $request->flink;
        $partner->ilink = $request->ilink;
        $partner->glink = $request->glink;
        $partner->save();
        return redirect()->route('partner.table');
    }
    public function table(){
        $partnerdata = partner::all();
        return view('backend.about.partner.table',compact('partnerdata'));
    }
    public function delete($id){
        $data = partner::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = partner::find($id);
        return view('backend.about.partner.edit',compact('data'));

    }
    public function update(Request $request , $id){
        $data = partner::find($id);
        $image = $request->file('image');
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $data->image = '/' . $imageName;
    }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->flink = $request->flink;
        $data->ilink = $request->ilink;
        $data->glink = $request->glink;
        $data->update();
        return redirect()->route('partner.table');
    }
}
