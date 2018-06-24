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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin|perusahaan']],function(){
	Route::resource('user','UserController');
	// Route::resource('member','MemberController');
	Route::resource('kategori','KategoriLowonganController');
	Route::resource('perusahaan','PerusahaanController');
	Route::resource('lowongan','LowonganController');
	// Route::resource('lamaran','LamaranController'); 
	Route::resource('pelamar','PelamarController');
});

Route::get('/', 'FrontendController@index');

Route::get('rincian_lowongan/{id}', 'FrontendController@rincian_lowongan');
Route::get('rincian_pers/{id}', 'FrontendController@rincian_pers');