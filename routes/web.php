<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/index');
});

Route::get('/user/dashboard', function () {
    return view('/user/dashboard');
});

Route::get('/user/data', function () {
    return view('/user/data');
});

Route::get('/user/datamahasiswa', function () {
    return view('/user/datamahasiswa');
});

Route::get('/user/matkul', function () {
    return view('/user/matkul');
});

Route::get('/user/krs', function () {
    return view('/user/krs');
});

Route::get('/user/khs', function () {
    return view('/user/khs');
});

