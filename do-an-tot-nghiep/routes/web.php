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


// Route::get('/', function () {
//     return view('master-page');
// });

Route::get('/', function () {
    return view('master-page');
})->name('dashboard');

Route::prefix('san-pham')->group(function(){
		Route::name('san-pham.')->group(function(){
            // Danh sach san pham
            Route::get('/danh-sach','SanPhamController@index')->name('danh-sach');
            Route::get('/edit-san-pham','SanPhamController@edit_page')->name('edit');       
		});	
});

Route::prefix('loai-san-pham')->group(function(){
    Route::name('loai-san-pham.')->group(function(){
        // Danh sach san pham
        Route::get('/danh-sach','LoaiSPController@index')->name('danh-sach');
        Route::get('/edit-loai-san-pham','LoaiSPController@edit_page')->name('edit');       
    });	
});

