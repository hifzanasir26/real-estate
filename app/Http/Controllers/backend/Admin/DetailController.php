<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detail;
use App\Models\checkout;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\DetailSubmittedEmail;

class DetailController extends Controller
{
    public function show()
    {
        return view('backend.checkout.detail.form');
    }

    //    public function store(Request $request)
    // {
    //     // ✅ Validate inputs including image
    //     $request->validate([
    //         'full_name' => 'required',
    //         'mobile_number' => 'required',
    //         'email' => 'required|email',
    //         'landmark' => 'nullable',
    //         'town_city' => 'required',
    //         'address_type' => 'required',

    //         // ✅ Validate product fields
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'quantity' => 'required|integer',
    //         'product_name' => 'required|string',
    //         'price' => 'required|numeric',
    //     ]);

    //     // ✅ Handle image upload
    //     $imageName = null;
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = time() . '_' . $image->getClientOriginalName();
    //         $image->move(public_path('images'), $imageName);
    //     }

    //     // ✅ Save checkout record
    //     $checkout = new checkout();
    //     $checkout->image = $imageName;
    //     $checkout->quantity = $request->quantity;
    //     $checkout->product_name = $request->product_name;
    //     $checkout->price = $request->price;
    //     $checkout->save();

    //     // ✅ Save delivery detail
    //     $detail = new detail();
    //     $detail->full_name = $request->full_name;
    //     $detail->mobile_number = $request->mobile_number;
    //     $detail->email = $request->email;
    //     $detail->landmark = $request->landmark;
    //     $detail->town_city = $request->town_city;
    //     $detail->address_type = $request->address_type;
    //     $detail->save();

    //     // ✅ Prepare email data
    //     $emailData = [
    //         'image' => $imageName,
    //         'quantity' => $request->quantity,
    //         'product_name' => $request->product_name,
    //         'price' => $request->price,
    //         'full_name' => $request->full_name,
    //         'mobile_number' => $request->mobile_number,
    //         'landmark' => $request->landmark,
    //         'town_city' => $request->town_city,
    //         'address_type' => $request->address_type,
    //         'products' => session('cart', []),
    //     ];

    //     // ✅ Send email
    //     try {
    //         Mail::to($request->email)->send(new DetailSubmittedEmail($emailData));
    //     } catch (\Exception $e) {
    //         Log::error('Detail Email send failed: ' . $e->getMessage());
    //     }

    //     // ✅ Clear cart
    //     session()->forget('cart');

    //     return redirect()->back()->with('success', 'Details saved, email sent, and cart cleared!');
    // }
  public function store(Request $request)
{
    $cart = session('cart', []);

    foreach ($cart as $item) {
        // Save checkout
        $checkout = new checkout();
        $checkout->image = $item['image'] ?? null;
        $checkout->quantity = $item['quantity'] ?? 1;
        $checkout->product_name = $item['product_name'] ?? $item['heading'] ?? '';
        $checkout->price = ($item['price'] ?? 0) * ($item['quantity'] ?? 1);
        $checkout->save();

        // Save detail linked to each checkout
        $detail = new detail();
        $detail->full_name = $request->full_name;
        $detail->mobile_number = $request->mobile_number;
        $detail->email = $request->email;
        $detail->landmark = $request->landmark;
        $detail->town_city = $request->town_city;
        $detail->address_type = $request->address_type;
        $detail->checkout_id = $checkout->id; // Link each detail to its checkout
        $detail->save();
    }

    // Prepare email (with all products)
    $data = [
        'full_name' => $request->full_name,
        'mobile_number' => $request->mobile_number,
        'email' => $request->email,
        'landmark' => $request->landmark,
        'town_city' => $request->town_city,
        'address_type' => $request->address_type,
        'products' => $cart,
    ];

    session()->forget('cart');

    try {
        Mail::to($request->email)->send(new DetailSubmittedEmail($data));
    } catch (\Exception $e) {
        Log::error('Detail Email send failed: ' . $e->getMessage());
    }
            return redirect()->route('payment.success');

    return redirect()->back()->with('success', 'Details saved, email sent, and cart cleared!');
}

    public function table()
{
    $detaildata = Detail::with('checkout')->paginate(10);
    return view('backend.checkout.detail.table', compact('detaildata'));
}


    public function delete($id)
    {
        $data = detail::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = detail::find($id);
        return view('backend.checkout.detail.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required',
            'mobile_number' => 'required',
            'landmark' => 'nullable',
            'town_city' => 'required',
            'address_type' => 'required',
            'email' => 'required|email',
        ]);

        $data = detail::find($id);
        $data->full_name = $request->full_name;
        $data->mobile_number = $request->mobile_number;
        $data->landmark = $request->landmark;
        $data->town_city = $request->town_city;
        $data->address_type = $request->address_type;
        $data->email = $request->email;
        $data->update();

        return redirect()->route('detail.table')->with('success', 'Detail updated successfully.');
    }
}
