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

Route::get('home', function(){
	return view('welcome');
});

Route::get('database', 'ControllerDataBase@index');

//=======================================================
// BELAJAR DATABASE QUERYBUILDER
//=======================================================
Route::get('query_builder','ControllerQueryBuilder@index');
Route::get('tambah_mhs', function(){
	return view('L1_Query_Builder/tambah_mahasiswa');
});
Route::post('tambah_mahasiswa','ControllerQueryBuilder@tambah_mahasiswa');

Route::get('hapus_mahasiswa/{id}','ControllerQueryBuilder@hapus_mahasiswa');

Route::get('ubah_mahasiswa/{id}','ControllerQueryBuilder@ubah_mahasiswa');

// Route::post('ubah_data_mahasiswa','ControllerQueryBuilder@ubah_data_mahasiswa');

// Route::get('hapus',function(){
// 	return view('hapus_mahasiswa')
// });

//======================================
//          Untuk BUGING
Route::get('test/{id}','test@index');
//=====================================