<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrdersController extends Controller
{
    public function index(): View
    {
        $orders = Order::with(['items.product', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);


        $orders->getCollection()->transform(function ($order) {
            $order->status_class = $this->getStatusClass($order->order_status); // Add status class
            $order->payment_class = $this->getPaymentStatusClass($order->payment_status); // Add payment status class
            return $order; // Corrected this to return the individual order
        });
        return view('admin.orders', compact('orders'));
    }

    public function getStatusClass($status)
    {
        switch($status) {
            case 'Pending':
                return 'status-pending';
            case 'Completed':
                return 'status-completed';
            case 'Cancelled':
                return 'status-cancelled';
            default:
                return 'status-default';
        }
    }

    public function getPaymentStatusClass($status)
    {
        switch($status) {
            case 'Pending':
                return 'payment-pending';
            case 'Completed':
                return 'payment-completed';
            case 'Cancelled':
                return 'payment-cancelled';
            default:
                return 'payment-default';
        }
    }

//    public function showOrder(Request $request)
//    {
//        $orderId = $request->query('order');
//        $order = Order::with(['items.product', 'user'])->findOrFail($orderId);
//        return view('admin.order_details', compact('order'));
//    }

    public function showOrder(Request $request)
    {
        $orderId = $request->query('order');

        $order = Order::with(['items.product', 'user', 'payment'])->findOrFail($orderId);
//dd($order);
        return view('admin.order_details', compact('order'));
    }



}
