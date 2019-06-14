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
        $pecah = explode('|', $data_sales);
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');   
        $time = date('Y-m-d',strtotime($now));
        DB::table('pengajuan_smk')->insert([
            'nama_cust' => $request->nama,
            'tanggal_pemesan' => $request->tanggal_pemesan,
            'nama_stnk' => $request->nama_stnk,
            'alamat' => $request->alamat,
            'merk' => $request->merk,
            'type' => $request->type,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'id_sales' => $pecah[0],
            'nama_sales' => $pecah[1],
            'tanggal_input' => $time,
            'nilai_versekot' => $request->nilai_versekot,
            'payment' => $request->payment,
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
    public function pengajuan_index()
    {
       $smk = DB::table('pengajuan_smk')->get();
       $sales = DB::table('jabatans')->get();
        if(count($sales)<= 0){
            $sales = null;
        }else{
        $sales = DB::table('jabatans')->where('nama_jabatan','sales')->get();
        }
       return view('transaksi_finance.smk.pengajuan_smk',compact('smk','sales'));
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
       $smk = DB::table('pengajuan_smk')->get();
       $confirm = DB::table('confirm_smk_spv')->get();
       foreach($confirm as $c ){

       }
       return view('transaksi_finance.smk.konfirmasi_smk_atasan',compact('smk','c'));
    }
    public function setuju_spv($id)
    {
        $db = DB::table('pengajuan_smk')->find($id);
        DB::table('confirm_smk_spv')->insert([
            'id_smk' => $id,
            'nama_peminat' => $db->nama_cust,
            'alamat' => $db->alamat,
            'id_sales' => $db->id_sales,
            'payment' => $db->payment,
            'nilai_versekot' => $db->nilai_versekot,
            'confirm' => true
        ]);
        Alert::success('Success', 'Data berhasil Disetujui');
        return redirect()->back();        
    }
}
