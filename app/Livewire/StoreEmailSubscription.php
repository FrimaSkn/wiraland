<?php

namespace App\Livewire;

use App\Models\EmailSubscription;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Illuminate\Support\MessageBag;
use Livewire\Attribute\On;

class StoreEmailSubscription extends Component
{
    public $email;

    public function validateRecaptcha($token)
    {
        // validate Google reCaptcha.
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $token,
            'remoteip' => request()->ip(),
        ]);
        $throw = fn ($message) => throw ValidationException::withMessages(['recaptcha' => $message]);
        if (! $response->successful() || ! $response->json('success')) {
            $throw($response->json(['error-codes'])[0] ?? 'An error occurred.');
        }
        // if response was score based (the higher the score, the more trustworthy the request)
        if ($response->json('score') < 0.6) {
            $throw('We were unable to verify that you\'re not a robot. Please try again.');
        }
    }

    #[On('formSubmitted')]
    public function submit($token)
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $this->validateRecaptcha($token);

        EmailSubscription::create([
            'email' => $this->email
        ]);
    }

    public function render()
    {
        return view('livewire.store-email-subscription');
    }
}
