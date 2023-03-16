<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{category}', [HomeController::class, 'index']);

Route::get('/blog', [PostController::class, 'detail']);

Route::prefix('/api')->name('api.')->group(function () {
    Route::get('/posts', [PostController::class, 'getListPosts'])->name('posts');
    Route::get('/posts-by-cat/{category}', [PostController::class, 'getListPostsByCat'])->name('postsByCat');
});
