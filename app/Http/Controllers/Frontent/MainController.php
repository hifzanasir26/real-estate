<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\properties;


class MainController extends Controller
{
    public function index(){
     $properties = properties::all();
        return view('frontend.index', compact('properties'));
    }
     public function about(){
        return view('frontend.about');
    }
     public function services(){
        return view('frontend.services');
    }
     public function contact(){
        return view('frontend.contact');
    }
     public function blogpost(){
        return view('frontend.blog-post');
    }

     public function singlepost(){
        return view('frontend.blog-single');
    }
    public function landingpage(){
       return view('frontend.landing');
    }
   //  public function inquiry(){
   //     return view('frontend.contact-agent');
   //  }
    public function show($id){
          $property = properties::findOrFail($id);
       return view('frontend.add-to-cart', compact('property'));
    }
   public function inquiry(Request $request)
{
    return view('frontend.checkout', [
        'property_title'  => $request->property_title,
        'property_price'  => $request->property_price,   // text1
        'property_price2' => $request->property_price2,  // text2
        'property_image'  => $request->property_image
    ]);
}


}
