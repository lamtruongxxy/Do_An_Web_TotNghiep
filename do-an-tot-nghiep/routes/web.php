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

use App\Http\Controllers\LoaiSPController;
use App\LoaiSanPham;

Route::get('admin', 'TaiKhoanController@admin_page')->name('admin-page')->middleware('guest');
Route::post('admin/dang-nhap', 'TaiKhoanController@xyLyDangNhap')->name('admin-xu-ly-dang-nhap');
Route::get('admin/dang-xuat', 'TaiKhoanController@dangxuat')->name('admin-dang-xuat');

Route::middleware("auth")->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin-')->group(function () {
            //ADMIN
            Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');
        });

        Route::prefix('san-pham')->group(function () {
            Route::name('san-pham.')->group(function () {
                // Danh sach san pham
                Route::get('/', 'SanPhamController@index')->name('danh-sach');
                Route::get('/lay-san-pham', 'SanPhamController@getData')->name('lay-danh-sach');
                Route::get('/create-san-pham', 'SanPhamController@create_page')->name('create');
                Route::post('/create-san-pham', 'SanPhamController@store')->name('store');

                Route::get('/lay-thong-so', 'SanPhamController@getThongSo')->name('get-thong-so');
            });
        });
        Route::prefix('loai-san-pham')->group(function () {
            Route::name('loai-san-pham.')->group(function () {
                // Danh sach loai san pham
                Route::get('/', 'LoaiSPController@index')->name('danh-sach');
                Route::get('/lay-loai-san-pham', 'LoaiSPController@getData')->name('lay-danh-sach');

                Route::get('/create', 'LoaiSPController@create_page')->name('create');
                Route::post('/them-moi', 'LoaiSPController@store')->name('store');
                Route::get('/edit/{id}', 'LoaiSPController@edit')->name('edit');
                Route::put('/update/{id}', 'LoaiSPController@update')->name('update');
                Route::delete('/delete', 'LoaiSPController@delete')->name('delete');

                // Route::post('/trang-thai/{id}','LoaiSPController@on_off')->name('on-off');
            });
        });

        Route::prefix('nha-san-xuat')->group(function () {
            Route::name('nha-san-xuat.')->group(function () { // đặt tên cho đường dẫn route
                // Danh sach nhà sản xuất
                Route::get('/', 'NhaSXController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
                Route::get('/lay-nha-san-xuat', 'NhaSXController@getData')->name('lay-danh-sach');

                Route::get('/create', 'NhaSXController@create_page')->name('create');
                Route::post('/them-moi', 'NhaSXController@store')->name('store');
                Route::get('/edit/{id}', 'NhaSXController@edit')->name('edit');
                Route::put('/update/{id}', 'NhaSXController@update')->name('update');
                Route::delete('/delete', 'NhaSXController@delete')->name('delete');
            });
        });

        Route::prefix('khach-hang')->group(function () {
            Route::name('khach-hang.')->group(function () {
                // Danh sach khachhang
                Route::get('/', 'KhachHangController@index')->name('danh-sach');
                Route::get('/lay-khach-hang', 'KhachHangController@getData')->name('lay-danh-sach');

                Route::get('/create', 'KhachHangController@create_page')->name('create');
                Route::post('/them-moi', 'KhachHangController@store')->name('store');

                Route::get('/edit/{id}', 'KhachHangController@edit')->name('edit');
                Route::put('/update/{id}', 'KhachHangController@update')->name('update');
                // Route::delete('/delete', 'LoaiSPController@delete')->name('delete');
            });
        });
        Route::prefix('binh-luan')->group(function () {
            Route::name('binh-luan.')->group(function () {
                // Danh sach binh luan
                Route::get('/', 'BinhLuanController@index')->name('danh-sach');
                Route::get('/lay-binh-luan', 'BinhLuanController@getData')->name('lay-danh-sach');
                //binh-luan/lay-binh-luan
                Route::get('/edit/{id}', 'BinhLuanController@edit')->name('edit');
                Route::put('/update/{id}', 'BinhLuanController@update')->name('update');
                Route::delete('/delete', 'BinhLuanController@delete')->name('delete');
            });
        });

        Route::prefix('don-hang')->group(function () {
            Route::name('don-hang.')->group(function () {
                // Danh sach loai san pham
                Route::get('/', 'DonHangController@index')->name('danh-sach');
                Route::get('/lay-don-hang', 'DonHangController@getData')->name('lay-danh-sach');
                Route::get('/chi-tiet/{id}', 'DonHangController@chiTietDonHang')->name('chi-tiet');


                Route::delete('/delete', 'DonHangController@delete')->name('delete');
            });
            Route::prefix('thong-so')->group(function () {
                Route::name('thong-so.')->group(function () {
                    // Danh sach thong so
                    Route::get('/', 'ThongSoController@index')->name('danh-sach');
                    Route::get('/lay-thong-so', 'ThongSoController@getData')->name('lay-danh-sach');
                    Route::get('/create', 'ThongSoController@create_page')->name('create');
                    Route::post('/them-moi', 'ThongSoController@store')->name('store');
    
                    Route::get('/edit/{id}', 'ThongSoController@edit')->name('edit');
                    Route::put('/update/{id}', 'ThongSoController@update')->name('update');
                    // Route::get('/chi-tiet/{id}', 'DonHangController@chiTietDonHang')->name('chi-tiet');
                    Route::delete('/delete', 'ThongSoController@delete')->name('delete');
                });
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







Route::prefix('hinh-anh')->group(function () {
    Route::name('hinh-anh.')->group(function () { // đặt tên cho đường dẫn route
        // Danh sach nhà sản xuất
        Route::get('/danh-sach', 'HinhAnhController@index')->name('danh-sach'); //name dùng để đặt tên và gọi cho cái đường link controller vd:nha-san-xuat.danhsach
        Route::get('/create-hinh-anh', 'HinhAnhController@create_page')->name('create');
    });
});
