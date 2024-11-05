<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $guards = ['web', 'manager', 'provider'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($request->only('email', 'password'))) {
                switch ($guard) {
                    case 'web':
                        return redirect()->route('home');
                    case 'manager':
                        return redirect()->route('employee-panel.home');
                    case 'provider':
                        return redirect()->route('provider-panel.home');
                }
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
}
