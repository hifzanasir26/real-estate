<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\editor;

class EditorController extends Controller
{
   public function show(){
    return view('backend.editor.form');
   }
   public function store(Request $request){
    $editor = new editor();
    $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $editor->image = '/' . $imageName;
 }
    $editor->title1 =  $request->title1;
    $editor->title2 =  $request->title2;
    $editor->save();
    return redirect()->route('editor.table');
   }

    public function table(){
        $editordata = editor::all();
        return view('backend..editor.table',compact('editordata'));
    }
    public function delete($id){
        $data = editor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = editor::find($id);
        return view('backend..editor.edit',compact('data'));

    }
    public function update(Request $request , $id){
     
        $data = editor::find($id);
         $image = $request->file('image');
    if ($request->hasFile('image')) {
     $image = $request->file('image');
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('image'), $imageName);
     $data->image = '/' . $imageName;
 }
        $data->title1 = $request->title1;
        $data->title2 = $request->title2;
        
        $data->update();
        return redirect()->route('editor.table');
    }
}
