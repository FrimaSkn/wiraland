<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Partner;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use App\Settings\SettingHome;

class HomeController extends Controller
{
    public function index(SettingHome $homeSetting)
    {
        $clients  = Partner::all();
        $successStory = SuccessStory::inRandomOrder()->first();
        $posts = Post::Published()->inRandomOrder()->limit(3)->get();
        return view('home', [
            'homeContent' => $homeSetting,
            'clients' => $clients,
            'successStory' => $successStory,
            'articles' => $posts
        ]);
    }
}
