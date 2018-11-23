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
//     return view('welcome');
// });
// Route::get('/', function) () {

// } 
Route::get('/sambungilmu', function () {
    return view('pages.home');
});

Route::get('/mahasiswa', 'SambungilmuController@awal');
Route::get('/mahasiswa/add', 'SambungilmuController@create')->name('create_form');
Route::post('/mahasiswa/add', 'SambungilmuController@add')->name('add_mahasiswa');
Route::get('/mahasiswa/show', 'SambungilmuController@show')->name('tekkom_index');
Route::get('/mahasiswa/edit/{id}', 'SambungilmuController@edit');
Route::post('/mahasiswa/update', 'SambungilmuController@update')->name('update_mahasiswa');
Route::get('/mahasiswa/delete/{id}', 'SambungilmuController@delete');

Route::get('/dosen', 'dosen@awal');
Route::get('/dosen/add', 'dosen@create')->name('dosen_create');
Route::post('/dosen/add', 'dosen@add')->name('dosen_add');
Route::get('/dosen/show', 'dosen@show')->name('dosen_index');
Route::get('/dosen/editdosen/{id}', 'dosen@edit');
Route::post('/dosen/update', 'dosen@update')->name('update_dosen');
Route::get('/dosen/delete/{id}','dosen@delete');

Route::get('/matkul', 'matkul@awal');
Route::get('/matkul/add', 'matkul@create')->name('matkul_create');
Route::post('/matkul/add', 'matkul@add')->name('matkul_add');
Route::get('/matkul/show', 'matkul@show')->name('matkul_index');
Route::get('/matkul/update', 'matkul@update')->name('update_matkul');