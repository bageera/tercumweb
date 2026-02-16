<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

Route::get('/robots.txt', [SeoController::class, 'robots']);
Route::get('/sitemap.xml', [SeoController::class, 'sitemap']);
Route::get('/llms.txt', [SeoController::class, 'llms']);

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
