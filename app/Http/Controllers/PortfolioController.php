<?php

namespace App\Http\Controllers;

use App\Models\PortfolioCategory;
use App\Settings\SettingPortfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(SettingPortfolio $managePortfolio)
    {
        $portfolios = PortfolioCategory::with('portfolios')->get();
        return view('portfolio', [
            'portfolios' => $portfolios,
            'banner' => $managePortfolio->banner,
            'title' => $managePortfolio->title,
            'desc' => $managePortfolio->desc
        ]);
    }
}
