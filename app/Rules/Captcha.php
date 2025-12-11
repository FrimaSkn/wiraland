<?php

namespace App\Rules;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class Captcha implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        if (empty($value)) {
            return false;
        }

        $response = json_decode((new Client([
            'timeout' => 5,
        ]))->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                'remoteip' => request()->getClientIp(),
                'response' => $value,
            ],
        ])->getBody(), true);

        return isset($response['success']) && $response['success'] === true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('The captcha was invalid.');
    }
}
