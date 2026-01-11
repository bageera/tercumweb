<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PageController,
    ContactController,
    SeoController
};

Route::get('/robots.txt', [SeoController::class, 'robots']);
Route::get('/sitemap.xml', [SeoController::class, 'sitemap']);

Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|es|fr']], function () {

    Route::get('/', [PageController::class, 'home']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/services', [PageController::class, 'services']);
    Route::get('/industries', [PageController::class, 'industries']);
    Route::get('/projects', [PageController::class, 'projects']);
    Route::get('/projects/{slug}', [PageController::class, 'project']);
    Route::get('/blog', [PageController::class, 'blog']);
    Route::get('/privacy', [PageController::class, 'privacy']);
    Route::get('/terms', [PageController::class, 'terms']);

    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'submit']);
    Route::get('/thanks', [ContactController::class, 'thanks']);
});
