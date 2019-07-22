<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Alert;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function pengajuan(Request $request)
    {
        $data_sales = $request->id_sales;
        $cust = $request->nama;
        $pecah = explode('|', $data_sales);
        $id = explode('|',$request->merk);
        $pecah_cust = explode('|', $cust);
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');
        $time = date('Y-m-d',strtotime($now));
        DB::table('pengajuan_smk')->insert([
            'nama_cust' => $pecah_cust[1],
            'id_cust' => $pecah_cust[0],
            'tanggal_pemesan' => $request->tanggal_pemesan,
            'nama_stnk' => $request->nama_stnk,
            'alamat' => $request->alamat,
            'merk' => $id[0],
            'type' => $id[1],
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'id_sales' => $pecah[0],
            'nama_sales' => $pecah[1],
            'tanggal_input' => $time,
            'nilai_versekot' => $request->nilai_versekot,
            'payment' => $request->payment,
            'pembayaran_paling_lambat' => $request->pembayaran_paling_lambat
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('pengajuan_smk');
    }
    public function pengajuan_index(Request $request)
    {
       $smk = DB::table('pengajuan_smk')->get();

       $product = DB::table('master_product')->get();
       $cust = DB::table('master_custommer')->get();
       if(count($cust)<= 0){
        $cust = null;
        }else{
         $cust = DB::table('master_custommer')->get();
        }
        if(count($product)<= 0){
            $product = null;
            }else{
             $product = DB::table('master_product')->get();
            }

        $sales = DB::table('jabatans')->where('nama_jabatan','sales')->get();
       return view('transaksi_finance.smk.pengajuan_smk',compact('smk','sales','cust','product'));
    }
    public function pengajuan_del($id)
    {
        $db = DB::table('pengajuan_smk')->where('id',$id);
        $db->delete();
        Alert::success('Success', 'Data berhasil Dihapus');
        return redirect()->back();
    }
    public function confirm_spv()
    {
       $smk = DB::table('pengajuan_smk')->where('status',null)->get();
       return view('transaksi_finance.smk.konfirmasi_smk_atasan',compact('smk'));
    }
    public function setuju_spv(Request $request,$id)
    {
        $db = DB::table('pengajuan_smk')->find($id);
        DB::table('pengajuan_smk')->update([
            'status' => 'setuju'
        ]);
        Alert::success('Success', 'Data berhasil Disetujui Silakan Cek Riwayat');
        return redirect()->back();
    }
    public function confirm_bm()
    {
        $conf_spv = DB::table('pengajuan_smk')->where('status_pembayaran','==','Belum Terbayar')
        ->Orwhere('status_bm',null)->get();
        return view('transaksi_finance.smk.konfirmasi_smk',compact('conf_spv'));
    }
    public function pengajuan_index_ajax($id)
    {
        $product = DB::table('master_product')->find($id);
        return response()->json($product);
    }
    public function confirm_bm_stj($id)
    {   $get = DB::table('pengajuan_smk')->where('id',$id)->first();
        $cust = DB::table('master_custommer')->where('id',$get->id_cust)->first();
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');
        $time = date('Y-m-d',strtotime($now));
        $smk = DB::table('pengajuan_smk')->where('id',$id)->update([
           'status_bm' => 'setuju'
        ]);
           
       Alert::success('Success', 'Data berhasil Disetujui Silakan Cek Riwayat');
       return redirect()->back();
   }

   public function tambah_psmk_page()
{
    $cust = DB::table('master_custommer')->get();
    $product = DB::table('master_product')->get();

    $sales = DB::table('jabatans')->where('nama_jabatan','sales')->get();
    return view('transaksi_finance.smk.tambahdata.tambah_psmk',compact('cust','product','sales'));

}
    }

