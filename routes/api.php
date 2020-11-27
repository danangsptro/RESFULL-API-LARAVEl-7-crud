<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('DataData')->group(function(){
    // DIVISI
    Route::get('IndexDivisi', 'api\DivisiController@index');
    Route::post('CreateDivisi', 'api\DivisiController@create')->name('create-divisi');
    Route::put('UpdateDivisi/{id}', 'api\DivisiController@update')->name('update-divisi');
    Route::delete('DeleteDivisi/{id}', 'api\DivisiController@delete')->name('delete-divisi');

    // JABATAN
    Route::get('IndexJabatan', 'api\JabatanController@index');
    Route::post('CreateJabatan', 'api\JabatanController@create')->name('create-jabatan');
    Route::put('UpdateJabatan/{id}', 'api\JabatanController@update')->name('update-jabatan');
    Route::delete('DeleteJabatan/{id}', 'api\JabatanController@delete')->name('delete-jabatan');

    // STATUS
    Route::get('IndexStatus', 'api\StatusController@index');
    Route::post('CreateStatus', 'api\StatusController@create')->name('create-status');
    Route::put('UpdateStatus/{id}', 'api\StatusController@update')->name('update-status');
    Route::delete('DeleteStatus/{id}', 'api\StatusController@delete')->name('delete-status');

    // KARYAWAN
    Route::get('IndexKaryawan', 'api\KaryawanController@index');
    Route::post('CreateKaryawan', 'api\KaryawanController@create')->name('create-karyawan');
    Route::put('UpdateKaryawan/{id}', 'api\KaryawanController@update')->name('update-karyawans');
    Route::delete('DeleteKaryawan/{id}', 'api\KaryawanController@delete')->name('delete-karyawan');

    // JENIS KELAMIN
    Route::get('IndexJenis', 'api\jenis_kelaminController@index');
    Route::post('CreateJenis', 'api\jenis_kelaminController@create')->name('create-jenisKelamin');
    Route::put('UpdateJenis/{id}', 'api\jenis_kelaminController@update')->name('update-jenisKelamin');
    Route::delete('DeleteJenis/{id}', 'api\jenis_kelaminController@delete')->name('delete-jenisKelamin');
});
