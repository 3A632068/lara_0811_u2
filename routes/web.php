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
Route::get('/', function () {
    // return view('welcome');
    //練習 1-1
    // return 'welcome';
    //練習 1-2
    return view('welcome');
});

