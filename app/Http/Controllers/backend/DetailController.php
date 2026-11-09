<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detail;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;

class DetailController extends Controller
{
    public function show(){
        return view('backend.detail.form');
    }

    public function store(Request $request)
    {
        // Save to DB
        $detail = new detail();
        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->contactmethod = $request->contactmethod;
        $detail->message = $request->message;
        $detail->save();

        // Prepare and send email with property + customer details
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'contactmethod' => $request->contactmethod,
            'message' => $request->message,
            'property_title' => $request->property_title,
            'property_price' => $request->property_price,
            'property_price2' => $request->property_price2,
            'property_image' => $request->property_image
        ];

try {
    Mail::to($request->email)->send(new InquiryMail($mailData));
} catch (\Exception $e) {
    Log::error('Inquiry Email send failed: ' . $e->getMessage());
}

return view('frontend.success');
    }

    public function table(){
        $detaildata = detail::all();
        return view('backend.detail.table', compact('detaildata'));
    }

    public function delete($id){
        $data = detail::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit($id){
        $data = detail::find($id);
        return view('backend.detail.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $detail = detail::find($id);
        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->contactmethod = $request->contactmethod;
        $detail->message = $request->message;
        $detail->save();
        return redirect()->route('detail.table');
    }
}
