<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Settings\GeneralSetting;

class FaqController extends Controller
{
    public function index(GeneralSetting $generalSetting)
    {
        return view('faq', [
            'banner' => $generalSetting->banner_faq,
            'faqs' => Faq::all()
        ]);
    }
}
