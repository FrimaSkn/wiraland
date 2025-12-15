<?php

namespace App\Http\Controllers;

use PHPUnit\Metadata\Test;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Settings\GeneralSetting;

class TestimonialController extends Controller
{
    public function index(GeneralSetting $generalSetting)
    {
        return view('testimonial', [
            'banner' => $generalSetting->banner_testimonial,
            'testimonials' => Testimonial::all()
        ]);
    }
}
