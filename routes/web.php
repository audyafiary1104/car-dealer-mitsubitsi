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
Route::get('/Customer', 'SmkController@custommer_index');
Route::get('/karyawan','SmkController@karyawan');
Route::get('/karyawan/del/{id}','SmkController@delete_karyawan');
Route::post('/post_login','UserController@login');
Route::get('/pengajuan','SmkCOntroller@pengajuan');
Route::post('tambah_karyawan','SmkController@add_karyawan');
Route::post('add_custommer','SmkController@add_custommer');
Route::post('add_jabatan','SmkController@add_jabatan');
Route::post('add_dpt','SmkController@add_dpt');
Route::post('add_biaya','SmkController@biaya');
Route::post('add_level_jabatan','SmkController@add_lv_jbt');
Route::post('add_cabang','SmkController@add_cabang');
Route::get('/master_biaya', 'SmkController@master_biaya');
Route::get('/jabatan', 'SmkController@master_jabatan');
Route::get('master_biaya/del/{id}','SmkController@del_biaya');
Route::get('/Departement', 'SmkController@departement_index');
Route::get('/Cabang', 'SmkController@cabang_index');
Route::get('/Level_Jabatan', 'SmkController@lv_jbt');
Route::post('add_psmk','TransaksiController@pengajuan');
Route::get('/pengajuan_smk','TransaksiController@pengajuan_index');
Route::get('/pengajuan_smk/del/{id}','TransaksiController@pengajuan_del');
Route::get('/konfirmasi_smk_atasan','TransaksiController@confirm_spv');
Route::get('/konfirmasi_smk_atasan/setuju/{id}','TransaksiController@setuju_spv');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/admin', function () {
        return view('layouts.admin.master');
    });
});
Route::get('/terima_stnk', function () {
    return view('proses_bpn.terima_cst_stnk');
});
Route::get('/serah_terima', function () {
    return view('proses_bpn.serah_terima');
});
Route::get('/terima_dari_birojasa', function () {
    return view('proses_bpn.terima_biro_js');
});
Route::get('/terima_bpk', function () {
    return view('proses_bpn.terima_bpkb');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/spk', function () {
    return view('transaksi_finance.smk.modal.spk');
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
Route::get('/pengajuan_biaya', function () {
    return view('transaksi_finance.biaya.pengajuan_biaya');
});
Route::get('/konfirmasi_biaya', function () {
    return view('transaksi_finance.biaya.konfirmasi_biaya');
});
Route::get('/', function () {
    return view('login');
})->name('account.login');
Route::get('/terima_barang_dari_suplier', function () {
    return view('transaksi_pembelian.terima_barang_dari_suplier');
});

Route::get('/Product', function () {
    return view('master.product');
});


