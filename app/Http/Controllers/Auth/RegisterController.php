<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        session()->put('company_code', "GE-" . strtoupper(Str::random(6)));

        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {

        $data = $request->validated();
        $data['phone'] = $data['countryCode'] . $data['phone'];
        unset($data['countryCode']);

        if ($data['type'] === 'user') {
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => $data['password'],
            ]);

            auth()->login($user);
            return redirect()->route('home');
        }

        $provider = Provider::create([
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'type' => $data['type'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => $data['password'],
            'website' => $request->type === 'company' ? $data['website'] : null,
            'company_id' => $request->type === 'company' ? session()->get('company_code') : null,
            'tag' => $request->type === 'individual' ? $data['individual_tag'] : $data['company_tag'],
        ]);

        auth('provider')->login($provider);
        return redirect()->route('provider-panel.home');
    }

}
