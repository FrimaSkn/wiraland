<?php

namespace App\Http\Requests;

use App\Rules\Captcha;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:155',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:155',
            'message' => 'required|string|max:500',
            'g-recaptcha-response' => ['required_if:captcha_status,true', new Captcha],
        ];
    }
}
