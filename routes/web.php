<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Routing\Router;

Route::get('/', 'IndexController@index');
Route::get('articles/{category?}', 'IndexController@articles');
Route::get('article/{id}', 'IndexController@article');
Route::get('products/{category?}', 'IndexController@products');
Route::get('product/{id}', 'IndexController@product');
Route::get('cases/{category?}', 'IndexController@cases');
Route::get('case/{id}', 'IndexController@case');
Route::get('jobs/{category?}', 'IndexController@jobs');
Route::get('job/{id}', 'IndexController@job');
Route::get('pages/{category?}', 'IndexController@page');

Route::group([
    'prefix'        => 'api',
    'namespace'     => "Api",
], function (Router $router) {

    $router->get('articles/{category?}', 'ArticleApiController@index');
    $router->get('article/{id}', 'ArticleApiController@show');
    $router->get('products/{category?}', 'ProductApiController@index');
    $router->get('product/{id}', 'ProductApiController@show');
    $router->get('jobs/{category?}', 'JobApiController@index');
    $router->get('job/{id}', 'JobApiController@show');
    $router->get('pages/{category}', 'PageApiController@index');
    $router->get('categories', 'CategoryApiController@tree');
    $router->get('category/{id}', 'CategoryApiController@show');
    $router->get('children/{id}', 'CategoryApiController@children');
    $router->get('config', 'ConfigApiController@config');
    $router->post('upimage', 'UploadApiController@upimage');
    $router->get('advert/{advert_type}', 'AdvertApiController@index');
    
});
