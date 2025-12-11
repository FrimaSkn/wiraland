<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SettingSuccessStories;

class SuccessStoriesController extends Controller
{
    public function index(SettingSuccessStories $manageSuccessStories)
    {
        return view('success-stories', [
            'banner' => $manageSuccessStories->banner,
            'grid_title' => $manageSuccessStories->grid_title,
            'grid_desc' => $manageSuccessStories->grid_desc
        ]);
    }
}
