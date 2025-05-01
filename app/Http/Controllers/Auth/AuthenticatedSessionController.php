<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
//    public function store(LoginRequest $request): RedirectResponse
//    {
//        //dd($request);
//        $request->authenticate();
//        $request->session()->regenerate();
//
//        // Get the currently authenticated user and their role
//        $user = Auth::user();
//        $role = $user->roles->first()->name ?? null;
//
//        // Get the intended route (from session) or default to the home page
//        $intendedRoute = session()->get('intended_route', route('checkout'));
//       // dd($intendedRoute);
//
//        // If the user is coming from checkout, we want to stay on the checkout page
//        if ($intendedRoute === route('checkout')) {
//            return redirect()->route('checkout')->with('user', $user);
//        }
//
//        // Redirect based on the role
//        if ($role === 'customer') {
//            return redirect()->route('customer.dashboard')->with('user', $user);
//        } elseif ($role === 'admin') {
//            return redirect()->route('admin.dashboard')->with('user', $user);
//        }
//
//        // Default fallback redirection (just in case)
//        return redirect($intendedRoute)->with('user', $user);
//    }


    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt login manually to catch failure
        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('welcome'))->with('success', 'Login successful!');
        } else {
            return redirect()->back()
                ->withInput($request->only('email')) // Retain email input
                ->with('error', 'Login failed! Please check your credentials.');
        }
    }



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
