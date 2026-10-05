<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR';
});

Route :: get('/mahasiswa', function () {
    return 'halo mahasiswa';
});

//route dengan parameter
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});


Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});


//NAMED Route

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa, nama saya Andika';
})->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});
