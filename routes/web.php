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

    $url = url("/cart/store/?goods_id=1&store_id=1&goods_name=".urlencode('商品id')."&goods_num=2&price=2.09");
    $url2 = url("/cart/store/?goods_id=2&store_id=1&goods_name=".urlencode('商品id2')."&goods_num=1&price=4");

    return view('welcome',compact('url', 'url2'));
});

Route::get('/wechat',function (){
    $signature = $_GET["signature"];
    $timestamp = $_GET["timestamp"];
    $nonce = $_GET["nonce"];
    $tmpArr = array($signature, $nonce);
    sort($tmpArr, SORT_STRING);
    $tmpStr = implode( $tmpArr );
    $tmpStr = sha1( $tmpStr );
    if( $timestamp ){
        return true;
    }else{
        return false;
    }
});

