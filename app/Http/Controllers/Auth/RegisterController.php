<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['phone'] = '+' . $data['countryCode'] . $data['phone'];
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
            'tag' => $data['tag'],
            'type' => $data['type'] == 'Individual providers' ? 'individual' : 'company',
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => $data['password'],
            'website' => $data['website'],
            'company_id' => $data['combined_company_code'],
        ]);

        auth()->guard('provider')->login($provider);
        return redirect()->route('provider-panel.home');
    }

}
