<?php

use App\Http\Controllers\Api\PortfolioProjectController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SiteContentController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (): void {
    Route::get('posts', [PostController::class, 'index']);
    Route::get('posts/{slug}', [PostController::class, 'show']);

    Route::get('portfolio', [PortfolioProjectController::class, 'index']);
    Route::get('portfolio/{slug}', [PortfolioProjectController::class, 'show']);

    Route::get('services', [ServiceController::class, 'index']);
    Route::get('services/{slug}', [ServiceController::class, 'show']);

    Route::prefix('content')->group(function (): void {
        Route::get('/', [SiteContentController::class, 'overview']);
        Route::get('about', [SiteContentController::class, 'about']);
        Route::get('homepage', [SiteContentController::class, 'homepage']);
    });
});
