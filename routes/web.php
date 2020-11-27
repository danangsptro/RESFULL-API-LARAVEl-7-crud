<?php

use Illuminate\Support\Facades\Route;

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


// BACKEND
Route::prefix('dasboard')->group(function () {
    Route::get('admin', 'backend\adminController@index')->name('halaman-dasboard');
    // KARYAWAN
    Route::get('indexKaryawan', 'backend\karyawanController@index')->name('karyawan.index');
    Route::get('createkaryawan', 'backend\KaryawanController@create')->name('created-karyawan');
    Route::get('editkaryawan/{id}', 'backend\KaryawanController@edit')->name('edit-karyawan');
    // DIVISI
    Route::get('indexDivisi', 'backend\divisiController@index')->name('divisi.index');
    Route::get('CreateDivisi', 'backend\divisiController@create')->name('created-divisi');
    Route::get('EditDivisi/{id}', 'backend\divisiController@edit')->name('edit-divisi');
    // STATUS
    Route::get('indexStatus', 'backend\statusController@index')->name('status.index');
    Route::get('CreateStatus', 'backend\statusController@create')->name('created-status');
    Route::get('EditStatus/{id}', 'backend\statusController@edit')->name('edit-status');
    // JABATAN
    Route::get('indexJabatan', 'backend\jabatanController@index')->name('jabatan.index');
    Route::get('createJabatan', 'backend\jabatanController@create')->name('created-jabatan');
    Route::get('editJabatan/{id}', 'backend\jabatanController@edit')->name('edit-jabatan');
    // JENIS KELAMIN
    Route::get('IndexJenis-Kelamin', 'backend\jenis_kelaminController@index')->name('jenis-kelamin.index');
    Route::get('CreateJenis-Kelamin', 'backend\jenis_kelaminController@create')->name('created-jenisKelamin');
    Route::get('EditJenis-Kelamin/{id}', 'backend\jenis_kelaminController@edit')->name('edit-JenisKelamin');
});

// FRONTEND
Route::prefix('home')->group(function () {
    Route::get('page', 'frontend\halamanFrontendController@index')->name('home');
    Route::get('data-karyawan', 'frontend\DataKaryawanFrontendController@index')->name('data-karyawan');

});
