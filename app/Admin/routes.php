<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('categories', CategoryController::class);
    $router->resource('tags', TagController::class);
    $router->resource('posts', PostController::class);
    $router->resource('static-contents', StaticContentController::class);
    $router->resource('contact-messages', ContactMsgController::class);
    $router->resource('menus', MenuController::class);
});
