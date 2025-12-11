<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Settings\SettingAbout;

class AboutController extends Controller
{
    public function index(SettingAbout $settingAbout)
    {
        $vision = collect($settingAbout->vision_mission)->where('type', 'vision')->first();
        $mission = collect($settingAbout->vision_mission)->where('type', 'mission')->first();

        return view('about', [
            'banner' => $settingAbout->banner,
            'grid_title' => $settingAbout->grid_title,
            'grid_desc' => $settingAbout->grid_desc,
            'mission' => $mission['data'],
            'vision' => $vision['data'],
            'journey' => $settingAbout->journey,
            'teams' => Team::all()
        ]);
    }
}
