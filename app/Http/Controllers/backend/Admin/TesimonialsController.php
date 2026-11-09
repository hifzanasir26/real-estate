<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tesimonials;

class TesimonialsController extends Controller
{
    public function show()
    {
        return view('backend.tesimonials.form');
    }
    public function store(Request $request)
    {
        $tesimonials = new tesimonials();
        $tesimonials->link = $request->link;
        $tesimonials->title = $request->title;
        $tesimonials->description = $request->description;
        $tesimonials->save();
        return redirect()->route('tesimonials.table');
    }
    public function table()
    {
        $tesimonialsdata = tesimonials::all();
        return view('backend.tesimonials.table', compact('tesimonialsdata'));
    }
    public function delete($id)
    {
        
        $data = tesimonials::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = tesimonials::find($id);
        return view('backend.tesimonials.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = tesimonials::find($id);
        $data->link = $request->link;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->update();
        return redirect()->route('tesimonials.table');
    }
}
