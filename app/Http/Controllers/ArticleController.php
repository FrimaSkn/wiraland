<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Settings\SettingArticle;

class ArticleController extends Controller
{
    public function index(SettingArticle $manageArticle)
    {
        $articles = Post::Published()->orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', [
            'banner' => $manageArticle->banner,
            'grid_title' => $manageArticle->grid_title,
            'grid_desc' => $manageArticle->grid_desc,
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        $post = Post::Published()->where('slug', $slug)->first();
        return view('article.show', [
            'post' => $post
        ]);
    }
}
