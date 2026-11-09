<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\stripe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\welcomeemail;

class StripeController extends Controller
{
    public function stripe(Request $request)
    {
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

        $lineItems = [];
        $sessionItems = [];

        foreach ($request->items as $item) {
            $name = trim($item['name']);
            $price = (float) $item['price'];
            $quantity = (int) $item['quantity'];

            if ($name !== '' && $price > 0 && $quantity > 0) {
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => ['name' => $name],
                        'unit_amount' => (int) ($price * 100),
                    ],
                    'quantity' => $quantity,
                ];

                $sessionItems[] = [
                    'name' => $name,
                    'price' => $price,
                    'quantity' => $quantity,
                ];
            }
        }

        if (empty($lineItems)) {
            return back()->with('error', 'Cart is empty or invalid.');
        }

        session()->put('checkout_items', $sessionItems);

        $response = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);

        return redirect($response->url);
    }

    public function success(Request $request)
    {
        if ($request->session_id) {
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            $items = session()->get('checkout_items', []);
            $payments = [];

            foreach ($items as $item) {
                $payment = new Stripe();
                $payment->product_name = $item['name'];
                $payment->quantity = $item['quantity'];
                $payment->amount = $item['price'];
                $payment->total_amount = $item['price'] * $item['quantity'];
                $payment->currency = $response->currency;
                $payment->payer_name = $response->customer_details->name ?? 'Unknown';
                $payment->payer_email = $response->customer_details->email ?? 'Unknown';
                $payment->payment_status = 'pending';
                $payment->payment_method = 'Stripe';
                $payment->payment_id = $response->id;
                $payment->save();

                $payments[] = $payment; // ✅ collect all
            }

            // ✅ Send single email for all products
            if (!empty($payments) && filter_var($payments[0]->payer_email, FILTER_VALIDATE_EMAIL)) {
                try {
                    Mail::to($payments[0]->payer_email)->send(new WelcomeEmail(collect($payments)));
                } catch (\Exception $e) {
                    Log::error('Mail sending failed: ' . $e->getMessage());
                }
            }

            session()->forget('checkout_items');
            session()->forget('cart'); // ✅ add this line
            return redirect()->route('payment.success');
        }

        return redirect()->route('cancel');
    }


    public function cancel()
    {
        return "Payment is canceled.";
    }

   public function index()
{
    $orders = stripe::paginate(10); // 👈 10 records per page
    return view('backend.stripe', compact('orders'));
}
}
