<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\properties;

class PropertiesController extends Controller
{
    public function show()
    {
        return view('backend.properties.form');
    }

    public function store(Request $request)
    {
        $properties = new properties();
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $properties->image = $imageName ?? 'nothing.jpg';
        }
        $properties->title = $request->title;
        $properties->text1 = $request->text1;
        $properties->text2 = $request->text2;
        $properties->save();
        return redirect()->route('properties.table');
    }

    public function table()
    {
        $propertiesdate = Properties::all();
        return view('backend.properties.table', compact('propertiesdate'));
    }
    public function delete($id)
    {
        $data = properties::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = properties::find($id);
        return view('backend.properties.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = properties::find($id);
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $data->image = '/' . $imageName ?? 'nothing.jpg';
        }
        $data->title = $request->title;
        $data->text1 = $request->text1;
        $data->text2 = $request->text2;
        $data->update();
        return redirect()->route('properties.table');
    }
}
