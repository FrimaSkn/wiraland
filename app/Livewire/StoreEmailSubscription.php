<?php

namespace App\Livewire;

use App\Models\EmailSubscription;
use App\Rules\Captcha;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StoreEmailSubscription extends Component
{
    public $email;
    public $recaptcha;
    public $captcha_status;

    public function mount()
    {
        $this->captcha_status = env('GOOGLE_RECAPTCHA_STATUS');
    }

    public function store()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        if($this->captcha_status) {
            $this->validate([
                'recaptcha' => ['required', new Captcha],
            ]);
        }

        DB::beginTransaction();
        try {
            $store = EmailSubscription::create([
                'email' => $this->email
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('success', 'Pesan kamu gagal dikirim, silahkan coba lagi');
            //throw $th;
        }
        DB::commit();

        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim');
    }

    public function render()
    {
        return view('livewire.store-email-subscription');
    }
}
