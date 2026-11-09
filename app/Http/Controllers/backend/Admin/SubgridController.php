<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subgrid;

class SubgridController extends Controller
{
    public function show()
    {
        return view('backend.subgrid.form');
    }
    public function store(Request $request)
    {
        $subgrid = new subgrid();
        $subgrid->link = $request->link;
        $subgrid->title = $request->title;
        $subgrid->description = $request->description;
        $subgrid->button = $request->button;
        $subgrid->save();
        return redirect()->route('subgrid.table');
    }
    public function table()
    {
        $subgriddata = subgrid::all();
        return view('backend.subgrid.table', compact('subgriddata'));
    }
    public function delete($id)
    {
        
        $data = subgrid::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = subgrid::find($id);
        return view('backend.subgrid.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = subgrid::find($id);
        $data->link = $request->link;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->button = $request->button;
        $data->update();
        return redirect()->route('subgrid.table');
    }
}
