<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkout;

class CheckoutController extends Controller
{
    public function check()
    {
        // In your controller
        $totalPrice = 0;
        foreach (session('cart') as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        $cart = session('cart', []);
        $cartdata = count($cart);
        return view('frontend.checkout', ['totalPrice' => $totalPrice, 'cartdata' => $cartdata]);
    }

    public function show()
    {
        return view('backend.checkout.form');
    }
    public function store(Request $request)
    {
        $checkout = new checkout();
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $checkout->image = '/' . $imageName;
        }
        $checkout->quantity = $request->quantity;
        $checkout->product_name = $request->product_name;
        $checkout->price = $request->price;
        $checkout->save();
        return redirect()->route('checkout.table');
    }
    public function table()
    {
        $checkoutdata = checkout::all();
        return view('backend.checkout.table', compact('checkoutdata'));
    }
    public function delete($id)
    {
        $data = checkout::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = checkout::find($id);
        return view('backend.checkout.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = checkout::find($id);
        $data->quantity = $request->quantity;
        $data->product_name = $request->product_name;
        $data->price = $request->price;
        $data->update();
        return redirect()->route('checkout.table');
    }
}
