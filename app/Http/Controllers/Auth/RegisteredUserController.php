<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
       // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required',
            //'roles' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        //dd("Validation Passed");
        $user = User::create([
            'name' => $request->name,

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
        ]);


        // Ensure the customer role exists
        $customerRole = Role::firstOrCreate(['name' => 'customer']);
        //dd($customerRole);
        $user->assignRole($customerRole);

        event(new Registered($user));

        Auth::login($user);


        // Redirect to welcome with a toastr success message
        return redirect()->intended(route('welcome'))->with('success', 'Registration successful! You are now logged in.');
//        return redirect()->intended(route('welcome'))->with('success', 'Login successful!');
    }
}
