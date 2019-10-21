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

//練習1：設定 Route 反應
//Route::get('/', function () {
    // return view('welcome');
    //練習 1-1
    // return 'welcome';
    //練習 1-2
    //return view('welcome');
    //練習 1-3
    //return redirect('welcome');
//});

//練習2：設定 Route 接收參數
//練習2-1
/*Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});*/
//練習2-3
Route::get('hello/{name?}',function($name='Everybody'){
    return'Hello,'.$name;
});
