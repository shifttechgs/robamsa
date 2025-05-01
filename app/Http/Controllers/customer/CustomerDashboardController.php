<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class CustomerDashboardController extends Controller
{
    public function index(): View|RedirectResponse
    {
        $user = auth()->user();

        // Check user role and redirect accordingly
        $role = $user->roles->first()->name ?? null;

        if ($role === 'super-admin'|| $role === 'admin') {
            return redirect()->route('dashboard');
        }

        // Get the logged-in user's ID
        $userId = auth()->id();
        $activeCategories = Category::active()->withCount('products')->get();  // Using withCount to get product count


        // Retrieve only the orders for the logged-in user
        $orders = Order::where('user_id', $userId)->latest()->paginate(10); // Fixed query to use correct 'where' condition

        // Add status classes for each order
        $orders->getCollection()->transform(function ($order) {
            $order->status_class = $this->getStatusClass($order->order_status); // Add status class
            $order->payment_class = $this->getPaymentStatusClass($order->payment_status); // Add payment status class
            return $order;
        });

        // Retrieve the user associated with the orders
        $user = auth()->user(); // Get the logged-in user

        // Calculate total amount spent by the user
        $totalAmountSpent = $user->orders->sum('total_amount'); // Sum of total_amount from all orders

        // Calculate total orders for the user
        $totalOrders = $user->orders->count(); // Count of all orders for the user

        // Calculate pending orders for the user (assuming 'pending' is a status for pending orders)
        $pendingOrders = $user->orders->where('order_status', 'Pending')->count(); // Count of pending orders

        // Return the customer dashboard view with orders passed along with statistics
        return view('customer.customer_dashboard', compact('orders', 'totalAmountSpent', 'totalOrders', 'pendingOrders','activeCategories'));
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




}
