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

Route::get('/', function () {
    //return view('welcome');
    //return view('vue');
    $res = \App\Models\User::find(2);
    dump($res);
    /*$res = \App\Models\User::create([
        'user_name' => '肖俊明',
        'mobile' => '13512719787',
        'email' => '2284876299@qq.com',
        'password' => 13333
    ]);

    dump($res);*/

});

Route::get('/test',function (){
   return "ok";
});

Route::get('/isEmail',function (){
   $res =  isEmail('2284876299@qq.com');
   if($res) {
       return "ok";
   }else{
       return "no";
   }
});


/*Route::group(['namespace' => 'Home'], function ($route) {
    $route->get('/test',['as'=>'index','uses' => 'IndexController@index']);
});*/
