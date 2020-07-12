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
            Route::get('/create-san-pham','SanPhamController@create_page')->name('create');     
            Route::post('/create-san-pham','SanPhamController@store')->name('store');     
		});	
});

Route::prefix('loai-san-pham')->group(function(){
    Route::name('loai-san-pham.')->group(function(){
        // Danh sach san pham
        Route::get('/danh-sach','LoaiSPController@index')->name('danh-sach');
        Route::get('/create-loai-san-pham','LoaiSPController@create_page')->name('create');       
    });	
});

Route::prefix('nha-san-xuat')->group(function(){
    Route::name('nha-san-xuat.')->group(function(){ // đặt tên cho đường dẫn route 
        // Danh sach nhà sản xuất
        Route::get('/danh-sach','NhaSXController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
        Route::get('/create-nha-san-xuat','NhaSXController@create_page')->name('create');       
    });	
});

Route::prefix('hinh-anh')->group(function(){
    Route::name('hinh-anh.')->group(function(){ // đặt tên cho đường dẫn route 
        // Danh sach nhà sản xuất
        Route::get('/danh-sach','HinhAnhController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
        Route::get('/create-hinh-anh','HinhAnhController@create_page')->name('create');       
    });	
});
