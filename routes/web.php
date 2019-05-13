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
/*Route::get('/login','AuthController@login')->name('login');
Route::post('loginpost','AuthController@loginpost');
Route::get('logout', 'AuthController@logout');
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/biodata_siswa', 'Biodata_SiswaController@index');
Route::get('/biodata_siswa/tambah','Biodata_SiswaController@tambah');
Route::post('/biodata_siswa/store','Biodata_SiswaController@store');
Route::get('/biodata_siswa/edit/{id}', 'Biodata_SiswaController@edit');
Route::put('/biodata_siswa/update/{id}', 'Biodata_SiswaController@update');
Route::get('/biodata_siswa/hapus/{id}', 'Biodata_SiswaController@delete');
Route::get('/lihatbiodata', 'Biodata_SiswaController@lihat');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/tambah', 'AdminController@tambah');
Route::post('/admin/store', 'AdminController@store');
Route::get('/admin/edit/{id}', 'AdminController@edit');
Route::put('/admin/update/{id}', 'AdminController@update');
Route::get('/admin/hapus/{id}', 'AdminController@delete');

Route::get('/guru', 'GuruController@index');
Route::get('/guru/tambah', 'GuruController@tambah');
Route::post('/guru/store', 'GuruController@store');
Route::get('/guru/edit/{id}', 'GuruController@edit');
Route::put('/guru/update/{id}', 'GuruController@update');
Route::get('/guru/hapus/{id}', 'GuruController@delete');
Route::get('/lihatguru', 'GuruController@lihat');

Route::get('/pelajaran', 'PelajaranController@index');
Route::get('/pelajaran/tambah', 'PelajaranController@tambah');
Route::post('/pelajaran/store', 'PelajaranController@store');
Route::get('/pelajaran/edit/{id}', 'PelajaranController@edit');
Route::put('/pelajaran/update/{id}', 'PelajaranController@update');
Route::get('/pelajaran/hapus/{id}', 'PelajaranController@delete');

Route::get('/nilai', 'NilaiController@index');
Route::get('/nilai/tambah', 'NilaiController@tambah');
Route::post('/nilai/store', 'NilaiController@store');
Route::get('/nilai/edit/{id}', 'NilaiController@edit');
Route::put('/nilai/update/{id}', 'NilaiController@update');
Route::get('/nilai/hapus/{id}', 'NilaiController@delete');
Route::get('/lihatnilai', 'NilaiController@lihat');

Route::get('/login', 'Logincontroller@index');

Route::get('/homeadmin', 'Admin@index');
Route::get('/loginadmin', 'Admin@login');
Route::post('/loginPost', 'Admin@loginPost');
Route::get('/logout', 'Admin@logout');
Route::get('/registeradmin', 'Admin@register');
Route::post('/registerPost', 'Admin@registerPost');

Route::get('/homeguru', 'Guru@index');
Route::get('/loginguru', 'Guru@login');
Route::post('/loginPostGuru', 'Guru@loginPost');
Route::get('/registerguru', 'Guru@register');
Route::post('/registerPostGuru', 'Guru@registerPost');
Route::get('/logoutGuru', 'Guru@logout');

Route::get('/homesiswa', 'Siswa@index');
Route::get('/loginsiswa', 'Siswa@login');
Route::post('/loginPostSiswa', 'Siswa@loginPost');
Route::get('/registersiswa', 'Siswa@register');
Route::post('/registerPostSiswa', 'Siswa@registerPost');
Route::get('/logoutsiswa', 'Siswa@logout');

Route::get('/home', 'HomeController@index')->name('home');
