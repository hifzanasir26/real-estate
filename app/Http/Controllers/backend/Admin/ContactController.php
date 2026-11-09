<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function show(){
        return view('backend.contact.form');
    }
    public function store(Request $request){
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect()->back();
    }
    public function table(){
        $contactdata = contact::all();
        return view('backend.contact.table', compact('contactdata'));
    }
    public function delete($id){
        $data = contact::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = contact::find($id);
        return view('backend.contact.edit', compact('data'));
    }
    public function update(Request $request , $id){
        $data = contact::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->massage = $request->massage;
        $data->update();
        return redirect()->route('contact.table');
    }
   
}
