<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/layanan', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/klien', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::group(['prefix' => 'artikel', 'as' => 'article.'], function () {
    Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('index');
    Route::get('/{slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('show');
});

Route::get('/success-stories', function () {
    return view('success-stories');
})->name('success-stories');

Route::get('/kontak', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
