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


// Route::get('/dashboard', function () {
//     return view('master-page');
// })->name('dashboard');


Route::get('admin', 'TaiKhoanController@admin_page')->name('admin-page')->middleware('guest');
Route::post('admin/dang-nhap', 'TaiKhoanController@xyLyDangNhap')->name('admin-xu-ly-dang-nhap');
Route::get('admin/dang-xuat', 'TaiKhoanController@dangxuat')->name('admin-dang-xuat');

Route::middleware("auth")->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin-')->group(function () {
            //ADMIN
            Route::get('/dashboard', 'TaiKhoanController@dashboard')->name('dashboard');
        });

        Route::prefix('san-pham')->group(function () {
            Route::name('san-pham.')->group(function () {
                // Danh sach san pham
                Route::get('/', 'SanPhamController@index')->name('danh-sach');
                Route::get('/lay-san-pham', 'SanPhamController@getData')->name('lay-danh-sach');
                Route::get('/create-san-pham', 'SanPhamController@create_page')->name('create');
                Route::post('/create-san-pham', 'SanPhamController@store')->name('store');
            });
        });
        Route::prefix('loai-san-pham')->group(function () {
            Route::name('loai-san-pham.')->group(function () {
                // Danh sach san pham
                Route::get('/danh-sach', 'LoaiSPController@index')->name('danh-sach');

                Route::get('/create', 'LoaiSPController@create_page')->name('create');
                Route::post('/them-moi', 'LoaiSPController@store')->name('store');
            });
        });
    });
});



Route::prefix('user')->group(function () {
    Route::name('user-')->group(function () {
        //ADMIN
        Route::get('/', 'TaiKhoanController@user_index')->name('page');
        Route::get('/register', 'TaiKhoanController@user_register')->name('register');
    });
});



// //ADMIN
// Route::get('/admin','TaiKhoanController@admin_page')->name('admin-page');


// //USERS
// Route::get('/','TaiKhoanController@user_index')->name('user-page');






Route::prefix('nha-san-xuat')->group(function () {
    Route::name('nha-san-xuat.')->group(function () { // đặt tên cho đường dẫn route 
        // Danh sach nhà sản xuất
        Route::get('/danh-sach', 'NhaSXController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
        Route::get('/create-nha-san-xuat', 'NhaSXController@create_page')->name('create');
    });
});

Route::prefix('hinh-anh')->group(function () {
    Route::name('hinh-anh.')->group(function () { // đặt tên cho đường dẫn route 
        // Danh sach nhà sản xuất
        Route::get('/danh-sach', 'HinhAnhController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
        Route::get('/create-hinh-anh', 'HinhAnhController@create_page')->name('create');
    });
});
