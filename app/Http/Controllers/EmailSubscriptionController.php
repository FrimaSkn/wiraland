<?php

namespace App\Http\Controllers;

use App\Rules\Captcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmailSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'g-recaptcha-response' => ['required_if:captcha_status,true', new Captcha],
        ]);

        DB::beginTransaction();
        try {
            $store = \App\Models\EmailSubscription::create($validated);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan, silahkan coba lagi');
            //throw $th;
        }
        DB::commit();

        return redirect()->back()->with('success', 'Terima kasih telah berlangganan');
    }
}
