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
Route::post('/post_login','UserController@login');
Route::get('/pengajuan','SmkCOntroller@pengajuan');

Route::post('add_custommer','SmkController@add_custommer');
Route::get('/Customer', 'SmkController@custommer_index')->name('custommer');
Route::get('tambah_custommer','SmkController@tambah_custommer_page')->name('tambahcustommer');
Route::get('del_custommer{id}','SmkController@del_custommer')->name('del_customer');
Route::get('/edit_cust/{id}','SmkController@edit_custommer');
Route::delete('myproductsDeleteAll', 'KasirController@deleteAll');

Route::get('/karyawan','SmkController@karyawan')->name('karyawan');
Route::get('/karyawan/del/{id}','SmkController@delete_karyawan');
Route::post('tambah_karyawan','SmkController@add_karyawan');
Route::get('add_karyawan','SmkController@tambah_karyawan_page')->name('tambahkaryawan');
Route::get('/edit_karyawan/{id}','SmkController@edit_karyawan');


Route::post('add_jabatan','SmkController@add_jabatan');
Route::get('tambah_jabatan','SmkController@tambah_jabatan_page')->name('tambahjabatan');
Route::get('del_jabatan{id}','SmkController@del_jabatan')->name('del_jabatan');
Route::get('/jabatan', 'SmkController@master_jabatan')->name('jabatan');
Route::get('/edit_jabatan/{id}', 'SmkController@edit_jabatan');
Route::get('/cari', 'SmkController@jabatan_auto')->name('searchajax');

Route::post('/product_add', 'SmkController@Product');
Route::get('Product','SmkController@product_index')->name('product');
Route::get('tambah_product','SmkController@tambah_product_page')->name('tambahproduct');
Route::get('del_product{id}','SmkController@del_product')->name('del_product');
Route::get('/edit_product/{id}','SmkController@edit_product');

Route::get('/Departement', 'SmkController@departement_index')->name('departement');
Route::post('add_dpt','SmkController@add_dpt');
Route::get('tambah_dpt','SmkController@tambah_departement_page')->name('tambahdpt');
Route::get('del_dpt{id}','SmkController@del_departement')->name('del_dpt');
Route::get('/edit_departement/{id}','SmkController@edit_departement');


Route::post('add_level_jabatan','SmkController@add_lv_jbt');
Route::get('/Level_Jabatan', 'SmkController@lv_jbt')->name('level_jabatan');
Route::get('add_leveljabatan','SmkController@tambah_level_jabatan_page')->name('addleveljabatan');
Route::get('del_lvl{id}','SmkController@del_lvljabatan')->name('del_lvl');

Route::post('add_psmk','TransaksiController@pengajuan');
Route::get('/pengajuan_smk','TransaksiController@pengajuan_index')->name('pengajuan_smk');
Route::post('/pengajuan_smk/ajax/{id}','TransaksiController@pengajuan_index_ajax');
Route::get('/pengajuan_smk/del/{id}','TransaksiController@pengajuan_del');
Route::get('tambah_psmk','TransaksiController@tambah_psmk_page')->name('tambah_psmk');

Route::post('add_cabang','SmkController@add_cabang');
Route::get('/Cabang', 'SmkController@cabang_index')->name('cabang');
Route::get('add_cabang','SmkController@tambah_cabang_page')->name('addcabang');
Route::get('del_cabang{id}','SmkController@del_cabang')->name('del_cabang');

Route::get('/titipan', 'KasirController@titipan_index')->name('titipan');
Route::post('add_titipan', 'KasirController@titipan_store');
Route::get('add_page','KasirController@titipan_add_page')->name('addpage');

Route::post('add_biaya','SmkController@biaya');
Route::get('/master_biaya', 'SmkController@master_biaya');
Route::get('master_biaya/del/{id}','SmkController@del_biaya');
Route::get('/konfirmasi_smk_atasan','TransaksiController@confirm_spv');
Route::get('/konfirmasi_smk_atasan/setuju/{id}','TransaksiController@setuju_spv');
Route::get('/konfirmasi_smk', 'TransaksiController@confirm_bm');
Route::get('/konfirmasi_smk/{id}', 'TransaksiController@confirm_bm_stj');
Route::get('/penerimaan_versekot', 'KasirController@kasir_index');
Route::post('/penerimaan_versekot/{id}/bayar','KasirController@penerimaan_versekot');
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

Route::get('/tambah_serah_terima', 'proses_bpn@serah_terima_add');
Route::post('/tambah_serah_terima/ajax/{id}', 'proses_bpn@serah_terima_add_ajax');
Route::post('/tambah_serah_terima/add', 'proses_bpn@serah_terima_post');

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


