<?php

namespace App\Http\Controllers;

use App\Settings\SettingContact;
use Illuminate\Http\Request;

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
}
