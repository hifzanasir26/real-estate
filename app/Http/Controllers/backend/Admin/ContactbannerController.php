<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contactbanner;

class ContactbannerController extends Controller
{
    public function show()
    {
        return view('backend.contact.contactbanner.form');
    }
    public function store(Request $request)
    {
        $contactbanner = new contactbanner();
        $contactbanner->link = $request->link;
        $contactbanner->title = $request->title;
        $contactbanner->description = $request->description;
        $contactbanner->save();
        return redirect()->route('contactbanner.table');
    }
    public function table()
    {
        $contactbannerdata = contactbanner::all();
        return view('backend.contact.contactbanner.table', compact('contactbannerdata'));
    }
    public function delete($id)
    {
        
        $data = contactbanner::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = contactbanner::find($id);
        return view('backend.contact.contactbanner.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = contactbanner::find($id);
        $data->link = $request->link;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->update();
        return redirect()->route('contactbanner.table');
    }
}
