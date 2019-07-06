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
Route::post('/pengajuan_smk/ajax/{id}','TransaksiController@pengajuan_index_ajax');
Route::get('/pengajuan_smk/del/{id}','TransaksiController@pengajuan_del');
Route::get('/konfirmasi_smk_atasan','TransaksiController@confirm_spv');
Route::get('/konfirmasi_smk_atasan/setuju/{id}','TransaksiController@setuju_spv');
Route::get('/konfirmasi_smk', 'TransaksiController@confirm_bm');
Route::get('/konfirmasi_smk/{id}', 'TransaksiController@confirm_bm_stj');
Route::get('/cari', 'SmkController@jabatan_auto')->name('searchajax');

Route::post('/product/add', 'SmkController@Product');
Route::get('Product','SmkController@product_index');
Route::get('/penerimaan_versekot', 'KasirController@kasir_index');
Route::post('/penerimaan_versekot/{id}/bayar','KasirController@penerimaan_versekot');
Route::get('/titipan', 'KasirController@titipan_index');
Route::post('add_titipan', 'KasirController@titipan_store');
Route::get('/buat_spk','SpkController@spk_index');
Route::get('/print_spk/{id}','SpkController@print_spk');
Route::get('/setor_giro', 'KasirController@setor_giro');
Route::get('/setor_giro/{id}', 'KasirController@giro_stor');

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


Route::get('/giro_cair', 'KasirController@giro_cair');
Route::get('/giro_cair/{id}', 'KasirController@cair_giro');

Route::get('/pelunasan', function () {
    return view('transaksi_finance.kasir.pelunasan');
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


