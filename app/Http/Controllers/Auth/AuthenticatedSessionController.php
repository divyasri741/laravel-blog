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
    public function store(LoginRequest $request): RedirectResponse
{
    $credentials = $request->only('email', 'password');

    $user = \App\Models\User::where('email', $credentials['email'])->first();

    if (!$user) {
        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    // Check if approved
    if (!$user->is_approved) {
        return back()->withErrors(['email' => 'Your account is not approved by the admin yet.']);
    }

    // Now try logging in
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    return back()->withErrors(['email' => 'These credentials do not match our records.']);
}
}