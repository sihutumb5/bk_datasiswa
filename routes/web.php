<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SisfoSiswaController;
use App\Http\Controllers\DataPribadiController;

Route::get('/', function () {
    return view('utama');
});

// PROFIL Buat Semua sekolah
Route::resource('profil','App\Http\Controllers\ProfilController');
Route::post('/profil/edit/{id}', 'App\Http\Controllers\ProfilController@update');

// Informasi data mentah Siswa
Route::resource('siswa','App\Http\Controllers\SisfoSiswaController');
Route::post('siswa/index','App\Http\Controllers\SisfoSiswaController@import')->name('import');
Route::get('siswa/index',[App\Http\Controllers\SisfoSiswaController::class, 'cari'])->name('cari');
Route::get('tes', function () {
    return view('informasi/test');
});

// Informasi data pribadi siswa
Route::resource('datapribadi','App\Http\Controllers\DataPribadiController');
Route::post('datapribadi/index','App\Http\Controllers\DataPribadiController@importdatapribadi')->name('importdatapribadi');

// PRINT DATA
Route::get('datapribadi/print/{id}','App\Http\Controllers\DataPribadiController@printdata')->name('printdata');

