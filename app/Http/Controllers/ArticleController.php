<?php

namespace App\Http\Controllers;

use App\Settings\SettingArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(SettingArticle $manageArticle)
    {
        return view('article.index', [
            'banner' => $manageArticle->banner,
            'grid_title' => $manageArticle->grid_title,
            'grid_desc' => $manageArticle->grid_desc
        ]);
    }

    public function show()
    {
        // Logic to retrieve the article by slug can be added here
        return view('article.show');
    }
}
