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
/*Route::get('hello/{name?}',function($name='Everybody'){
    return'Hello,'.$name;
});*/

//練習3：使用 artisan 指令了解目前 route 內容
//練習3-3增加新的 Route
/*Route::get('hello/{name?}',function($name='Test'){
    return'Hello,'.$name;
});*/

//練習4：為 Route 命名
//練習4-1
/*Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);*/
//練習4-2
Route::get('/', function () {
    return view('welcome');
});
//練習4-3
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return view('welcome');
}]);

//練習5：設定 Route 前置
//練習5-1
Route::get('dashboard',function(){
    return'dashboard';
});