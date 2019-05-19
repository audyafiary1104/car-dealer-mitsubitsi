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

Route::get('/admin', function () {
    return view('layouts.admin.master');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/jabatan', function () {
    return view('master.jabatan');
});
Route::get('/Customer', function () {
    return view('master.custommer');
});
Route::get('/karyawan', function () {
    return view('master.karyawan');
});
Route::get('/Product', function () {
    return view('master.product');
});