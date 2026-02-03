<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/layanan', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');

Route::get('/produk', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::post('/produk/download-catalogue', [App\Http\Controllers\ProductController::class, 'downloadProductCatalogue'])->name('product.download-catalogue');

Route::get('/klien', [App\Http\Controllers\ClientController::class, 'index'])->name('client');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');

Route::group(['prefix' => 'artikel', 'as' => 'article.'], function () {
    Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('index');
    // Route::get('/show', [App\Http\Controllers\ArticleController::class, 'show'])->name('show');
    Route::get('/{slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('show');
});

Route::get('/success-stories', [App\Http\Controllers\SuccessStoriesController::class, 'index'])->name('success-stories');

Route::group(['prefix' => 'kontak', 'as' => 'contact.'], function () {
    Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
    Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
});

Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');

Route::get('/testimonial', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonial');

Route::post('/subscribe', [App\Http\Controllers\EmailSubscriptionController::class, 'store'])->name('subscribe');
