<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
            'required',
            'email',
                function ($attribute, $value, $fail) {
                    if ($this->input('type') === 'user') {
                        if (\App\Models\User::where('email', $value)->exists()) {
                            $fail("The $attribute has already been taken by another user.");
                        }
                    } else{
                        if (\App\Models\Provider::where('email', $value)->exists()) {
                            $fail("The $attribute has already been taken by another provider.");
                        }
                    }
                },
            ],
            'password' => ['required', Password::min(8), 'confirmed'],
            'countryCode' => 'required|string|max:2',
            'phone' => 'required|numeric|max_digits:10|unique:users,phone',
            'type' => 'required|string|in:user,individual,company',
            'website' => 'required_if:type,company',
            'individual_tag' => 'required_if:type,individual',
            'company_tag' => 'required_if:type,company',
        ];
    }
}
