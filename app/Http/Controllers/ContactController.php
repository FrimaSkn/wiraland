<?php

namespace App\Http\Controllers;

use App\Rules\Captcha;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Settings\SettingContact;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    public function index(SettingContact $manageContact)
    {
        return view('contact', [
            'banner' => $manageContact->banner,
            'grid_title' => $manageContact->grid_title,
            'grid_desc' => $manageContact->grid_desc
        ]);
    }



    public function store(StoreContactRequest $request)
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            $store = Contact::create($validated);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Pesan kamu gagal dikirim, silahkan coba lagi');
            //throw $th;
        }
        DB::commit();

        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim');
    }
}
