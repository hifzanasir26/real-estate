<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\product;

class CartController extends Controller
{
   
    public function addtocart(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $cart = Session::get('cart', []); // Get the cart from the session, default to empty array
        $quantity = (int) $request->input('quantity', 1); // Get the quantity from the request, default to 1
        $cleanPrice = floatval(preg_replace('/[^0-9.]/', '', $product->price)); // Clean price to ensure it's a valid number
    
        // Check if an image has been uploaded
        $imagePath = null;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $image = $request->file('image');
            $imagePath = 'storage/' . $image->store('images', 'public'); 
                } else {
            // Get image path from form (as string)
            $imagePath = $request->input('image');
        }
    
        if (isset($cart[$product->id])) {
            // Product already exists in cart, just update quantity and image
            $cart[$product->id]['quantity'] += $quantity;
            if ($imagePath) {
                $cart[$product->id]['image'] = $imagePath; // Update the image path if new image uploaded
            }
        } else {
            // New product, add to cart
            $cart[$product->id] = [
                'id' => $product->id,
                'heading' => $product->heading,
                'price' => $cleanPrice,
                'quantity' => $quantity,
                'image' => $request->input('image'), // ✅ This line ensures relative image path goes in
            ];
        }
    
        // Update session with new cart data
        Session::put('cart', $cart);
        return redirect()->back();
    }
    // public function showcart()
    //    {
    //       $cart = session::get('cart', []);
    //       return view('frontend.layout.header', compact('cart'));
    //    }
    
       public function removeitem($id)
       {
          $cart = Session::get('cart', []);
    
          if (isset($cart[$id])) {
             unset($cart[$id]);
             Session::put('cart', $cart);
          }
    
          return redirect()->back()->with('success', 'Item removed from cart.');
       }
    
       public function remove($id)
    {
        $cart = Session::get('cart', []);
    
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }
    
        return response()->json([
            'success' => true,
            'cart_count' => count($cart) // important for frontend
        ]);
    }
    
    public function updateQuantity(Request $request)
    {
        $cart = Session::get('cart', []);
    
        $id = $request->input('id');
        $quantity = $request->input('quantity');
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            Session::put('cart', $cart);
        }
    
        return response()->json(['success' => true]);
    }
}