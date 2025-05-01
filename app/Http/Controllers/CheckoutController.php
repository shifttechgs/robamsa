<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // ✅ Correct Import
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Services\Payfast;
use App\Services\PaymentService;

class CheckoutController extends Controller
{

    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        $cart = session('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $showLoginModal = false;
        $user = auth()->user();

        if (!$user) {
            $showLoginModal = true;
        }

        return view('products.checkout', compact('cart', 'total', 'user', 'showLoginModal'));
    }




    public function processCheckout(Request $request)
    {
//        if (!Auth::check()) {
//            return redirect()->route('login')->with('error', 'Please sign in to complete your order.');
//        }
        if (!Auth::check()) {
            // Store the intended route (checkout page) in the session
            session()->put('intended_route', route('checkout'));
            // Redirect back to checkout page with a session variable to trigger the modal
            return redirect()->route('checkout')->with('showLoginModal', true);
        }

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        // Save Order
        $totalAmount = array_reduce($cart, fn ($total, $item) => $total + ($item['price'] * $item['quantity']), 0);
        $order = new Order([
            'user_id' => Auth::id(),
            'delivery_address' => $request->delivery_address,
            'order_status' => 'Pending',
            'total_amount' => $totalAmount,
            'payment_status' => 'Pending',
        ]);
        $order->save();

        // Save Order Items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id'     => $order->id,
                'product_id'   => $item['id'],
                'quantity'     => $item['quantity'],
                'price'        => $item['price'],
                'total_amount' => $item['price'] * $item['quantity'],
            ]);
        }

        // Clear cart session after order
       //session()->forget('cart');

        // Process Payment and Redirect to PayFast
        return $this->paymentService->processPayment($order);
    }

}
