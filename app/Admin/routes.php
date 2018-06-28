<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('category', 'CategoryController');
    $router->resource('advert_type', 'AdvertTypeController');
    $router->resource('advert', 'AdvertController');
    $router->resource('article', 'ArticleController');
    $router->resource('product', 'ProductController');
    $router->resource('job', 'JobController');
    $router->resource('page', 'PageController');
});
