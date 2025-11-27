<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    public function show($slug)
    {
        // Logic to retrieve the article by slug can be added here
        return view('article.show', compact('slug'));
    }
}
