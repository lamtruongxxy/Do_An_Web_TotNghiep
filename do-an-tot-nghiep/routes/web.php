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
    return view('master-page');
});

Route::get('/san-pham', function () {
    return view('SanPham/ds-sanpham');
});

Route::get('/w', function () {
    return view('welcome');
});