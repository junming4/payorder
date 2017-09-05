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

Route::group(['prefix' => 'cart', 'namespace' => 'Cart'], function ($route) {
    $route->get('store', ['as' => 'cart.store', 'uses' => 'IndexController@store']);
    $route->get('index', ['as' => 'cart.index', 'uses' => 'IndexController@index']);
});

Route::get('/',function(){
    return \SimpleSoftwareIO\QrCode\Facades\QrCode::generate('http://www.baidu.com');
});

