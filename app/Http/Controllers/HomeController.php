<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Settings\SettingHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(SettingHome $homeSetting)
    {
        $clients  = Partner::all();
        return view('home', [
            'homeContent' => $homeSetting,
            'clients' => $clients
        ]);
    }
}
