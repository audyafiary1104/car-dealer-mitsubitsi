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
Route::get('/getdata','SmkController@pengajuan');
Route::get('/admin', function () {
    return view('layouts.admin.master');
});
Route::get('/pengajuan_smk', function () {
    return view('transaksi_finance.smk.pengajuan_smk');
});
Route::get('/buat_spk', function () {
    return view('buat_spk');
});
Route::get('/konfirmasi_smk', function () {
    return view('transaksi_finance.smk.konfirmasi_smk');
});
Route::get('/penerimaan_versekot', function () {
    return view('transaksi_finance.kasir.penerimaan_versekot');
});
Route::get('/pelunasan', function () {
    return view('transaksi_finance.kasir.pelunasan');
});
Route::get('/titipan', function () {
    return view('transaksi_finance.kasir.titipan');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/jabatan', function () {
    return view('master.jabatan');
});
Route::get('/Departement', function () {
    return view('master.departement');
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