<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSetting;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(GeneralSetting $generalSetting)
    {
        return view('faq', [
            'banner' => $generalSetting->banner_faq
        ]);
    }
}
