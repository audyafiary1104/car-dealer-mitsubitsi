<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Alert;
use DB;
class KasirController extends Controller
{
    public function kasir_index()
    {   
        $user = DB::table('pengajuan_smk')->where('status','setuju')->get();
        return view('transaksi_finance.kasir.penerimaan_versekot',compact('user'));
    }
   public function penerimaan_versekot(Request $request)
   {
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');   
        $time = date('Y-m-d',strtotime($now));
        DB::table('penerimaan_versekot')->insert([
        'id_cust' => $request->id_cust,
        'id_smk'=> $request->id,
        'nilai_versekot'=> $request->nilai_versekot,
        'tanggal_pembuat'=> $time,
        ]);
        $user = DB::table('pengajuan_smk')->where('id',$request->id)->update([
            'status_pembayaran' => $request->jenis_pembayaran
        ]);
        Alert::success('Success', 'Data berhasil Dibuat');
        return redirect()->back();
    }
    public function titipan_index()
    {
        $cust = DB::table('master_custommer')->get();
        $titipan = DB::table('titipan')->get();
        return view('transaksi_finance.kasir.titipan',compact('cust','titipan'));
    }
    public function titipan_store(Request $request)
    {
        $cust = $request->nama;
        $user = explode('|',$cust);
        $alamat = DB::table('master_custommer')->find($user[0]);
        DB::table('titipan')->insert([
            'nama_cust' => $user[1],
            'nilai_titip' => $request->nilai_titipan,
            'id_cust' => $user[0],
            'alamat'=>$alamat->alamat,
            'tanggal_pembuat' => $request->tanggal,
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
}