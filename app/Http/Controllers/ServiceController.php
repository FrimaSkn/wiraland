<?php

namespace App\Http\Controllers;

use App\Settings\SettingService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(SettingService $manageService)
    {
        // dd($manageService);
        return view('services', [
            'banner' => $manageService->banner,
            'grid_title' => $manageService->grid_title,
            'grid_desc' => $manageService->grid_desc,
            'services' => $manageService->services,
            'section_two_title' => $manageService->section_two_title,
            'section_two' => $manageService->section_two
        ]);
    }
}
