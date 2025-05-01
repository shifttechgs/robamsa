<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerOrderController extends Controller
{
    public function index($id)
    {
        // Retrieve the order with items and related user details
        // Retrieve the order with items, each item with product details, and the associated user details
        $order = Order::with(['items.product', 'user'])->findOrFail($id);

        // Pass both order details and user details to the view
        return view('customer.customer_invoice', compact('order'));
    }




}
