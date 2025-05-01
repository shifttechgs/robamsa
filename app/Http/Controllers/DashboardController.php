<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\View\View;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(): View
    {

        $now = Carbon::now();
        $lastMonth = $now->copy()->subMonth();

        //recent orders
       // $recentOrders = Order::latest()->paginate(10); // Fixed query to use correct 'where' condition
      //  $recentOrders = Order::with(['items.product', 'user'])->paginate(10);
//        $recentOrders = Order::with(['items.product', 'user'])
//            ->latest() // orders by created_at DESC
//            ->take(10) // gets only 10
//            ->get();
        $recentOrders = Order::with(['items.product', 'user'])
            ->orderBy('created_at', 'desc')
            ->latest()
            ->paginate(5);

        $recentOrders->getCollection()->transform(function ($order) {
            $order->status_class = $this->getStatusClass($order->order_status); // Add status class
            $order->payment_class = $this->getPaymentStatusClass($order->payment_status); // Add payment status class
            return $order; // Corrected this to return the individual order
        });

//dd($recentOrders);
        // Orders and earnings
        $totalEarnings = Order::sum('total_amount');
        $totalOrders = Order::count();

        $currentMonthEarnings = $this->getMonthlyEarnings($now);
        $lastMonthEarnings = $this->getMonthlyEarnings($lastMonth);
        $earningsGrowthPercent = $this->calculateGrowth($currentMonthEarnings, $lastMonthEarnings);

        $currentMonthOrders = $this->getMonthlyOrderCount($now);
        $lastMonthOrders = $this->getMonthlyOrderCount($lastMonth);
        $orderGrowthPercent = $this->calculateGrowth($currentMonthOrders, $lastMonthOrders);

        // Customers
        $customersCount = User::role('Customer')->count();
        $currentMonthCustomers = $this->getMonthlyCustomerCount($now);
        $lastMonthCustomers = $this->getMonthlyCustomerCount($lastMonth);
        $customerGrowthPercent = $this->calculateGrowth($currentMonthCustomers, $lastMonthCustomers);

        return view('admin.dashboard', compact(
            'totalEarnings',
            'totalOrders',
            'currentMonthEarnings',
            'customersCount',
            'earningsGrowthPercent',
            'orderGrowthPercent',
            'customerGrowthPercent',
            'recentOrders'
        ));
    }

    private function getMonthlyEarnings(Carbon $date): float
    {
        return Order::whereMonth('created_at', $date->month)
            ->whereYear('created_at', $date->year)
            ->sum('total_amount');
    }

    private function getMonthlyOrderCount(Carbon $date): int
    {
        return Order::whereMonth('created_at', $date->month)
            ->whereYear('created_at', $date->year)
            ->count();
    }

    private function getMonthlyCustomerCount(Carbon $date): int
    {
        return User::role('Customer')
            ->whereMonth('created_at', $date->month)
            ->whereYear('created_at', $date->year)
            ->count();
    }

    private function calculateGrowth($current, $previous): float
    {
        if ($previous > 0) {
            return (($current - $previous) / $previous) * 100;
        }
        return 0;
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
