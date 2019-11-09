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

Route::post('/','AdminController@store')->name('xu_ly_dang_nhap');

Route::get('test','AdminController@laythongtin');
Route::get('/','AdminController@index')->name('login');

Route::get('logout','AdminController@dangXuat')->name('logout');




Auth::routes();
Route::middleware('auth')->group(function(){
	Route::prefix('cauhoi')->group(function(){
		Route::name('cauhoi.')->group(function(){
			Route::get('/', 'CauhoiController@index')->name('danhsach');
			Route::get('/themmoi', 'CauhoiController@create')->name('themmoi');
			Route::post('/themmoi', 'CauhoiController@store')->name('xulythemmoi');
			Route::get('/capnhat', 'CauhoiController@edit')->name('capnhat');
			Route::post('/capnhat', 'CauhoiController@update')->name('xulycapnhat');
			Route::get('/xoa/{id}', 'CauhoiController@destroy')->name('xoa');
		});
	});
	Route::prefix('linhvuc')->group(function(){
		Route::name('linhvuc.')->group(function(){
			//Route::get('/','LinhvucController@capnhatlinhvuc')->name('capnhatlinhvuc');
			Route::get('/', 'LinhvucController@index')->name('danhsach');
			Route::get('/themmoi', 'LinhvucController@create')->name('themmoi');
			Route::post('/themmoi', 'LinhvucController@store')->name('xulythemmoi');
			Route::post('/{id}/capnhat', 'LinhvucController@update')->name('capnhat');
			Route::get('/{id}/capnhat', 'LinhvucController@edit')->name('xulycapnhat');
			Route::get('/{id}/xoa', 'LinhvucController@destroy')->name('xoa');
		});
	});
});
