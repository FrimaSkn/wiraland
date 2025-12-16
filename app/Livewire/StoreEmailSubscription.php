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
    public $status;
    public $message;

    public function mount()
    {
        $this->captcha_status = env('GOOGLE_RECAPTCHA_STATUS');
    }

    public function store()
    {
        $this->validate([
            'email' => 'required|unique:email_subscriptions|email',
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
            $this->status = 'error';
            $this->message = 'Terjadi kesalahan, silahkan coba lagi';
            return redirect(request()->header('Referer'))->with('error', 'Terjadi kesalahan, silahkan coba lagi');

        }
        DB::commit();

        $this->status = 'success';
        $this->message = 'Terima kasih telah berlangganan';
        $this->resetAll();

        return redirect(request()->header('Referer'))->with('success', 'Terima kasih telah berlangganan');
    }

    public function resetAll()
    {
        $this->email = null;
        $this->recaptcha = null;
    }

    public function render()
    {
        return view('livewire.store-email-subscription');
    }
}
