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
    return view('welcome');
});

// //trang chu quan ly khach san 307
// Route::group(['prefix' => 'admin'], function() {

// 	Route::group(['prefix' => 'layout'], function() {
// 	    Route::get('index','QLKS_Controllers@getIndex');
// 	});

// 	Route::group(['prefix' => 'error'], function() {
// 	    Route::get('404','QLKS_Controllers@getError');
// 	});

// 	Route::group(['prefix' => 'room'], function() {
// 	    Route::get('phong','QLKS_Controllers@getRoom');
// 	});

// 	Route::group(['prefix' => 'staff'], function() {
// 	    Route::get('nhanvien','QLKS_Controllers@getStaff');
// 	});

// 	Route::group(['prefix' => 'statistical'], function() {
// 	    Route::get('thongke','QLKS_Controllers@getStatistical');
// 	});
// });
// // Đăng nhập và xử lý đăng nhập

// Route::get('admin/login/dangnhap',[ 'as' => 'getLogin', 'uses' => 'QLKS_Controllers@getLogin']);

// Route::post('admin/layout/index', [ 'as' => 'postLogin', 'uses' => 'QLKS_Controllers@postLogin']);

// // Đăng xuất
// Route::get('admin/login/dangxuat', [ 'as' => 'getLogout', 'uses' => 'QLKS_Controllers@getLogout']);

Route::get('trangchu','TrangChuController@trangchu');

Route::get('chitiet/{id}','TrangChuController@chitiet');

Route::get('lienhe','TrangChuController@lienhe');

Route::get('msi', 'TrangChuController@msi');
Route::get('apple', 'TrangChuController@apple');
Route::get('lenovo', 'TrangChuController@lenovo');
Route::get('acer', 'TrangChuController@acer');
Route::get('asus', 'TrangChuController@asus');
Route::get('hp', 'TrangChuController@hp');
Route::get('dell', 'TrangChuController@dell');

Route::resource('/cart','CartController');

Route::get('dangnhap', 'Login_Controller@getDangnhap');
Route::post('dangnhap', 'Login_Controller@postDangnhap');
Route::get('dangxuat', 'Logout_Controller@getDangxuat');
Route::get('nguoidung', 'Login_Controller@getNguoidung');
Route::post('nguoidung', 'Login_Controller@postNguoidung');

Route::get('dangki', 'DangKiController@getDangki');
Route::post('dangki', 'DangKiController@postDangki');

Route::any('timkiem', 'TimKiemController@postTimkiem');

Route::get('checkout', 'CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');

Route::post('comment/{id}', 'CommentController@postComment');