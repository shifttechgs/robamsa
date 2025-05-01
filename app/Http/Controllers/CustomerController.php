<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customerRole = 'customer';
        $customers = User::role($customerRole)->get(); // Spatie method to filter users by role
        //dd($customers);
        return view('admin.customers', compact('customers'));
    }
}
