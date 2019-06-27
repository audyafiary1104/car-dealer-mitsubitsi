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
        'nama_bank' => $request->nama_bank,
        'type_pembayaran' => $request->jenis_pembayaran,
        'tanggal_jatuh_tempo' =>$request->tanggal_jatuh_tempo,
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
    public function setor_giro()
    {
        $giro = DB::table('penerimaan_versekot')->where('type_pembayaran','giro')->Where('status_giro','belum Disetor')->get();
        return view('transaksi_finance.kasir.setor_giro',compact('giro'));
    }
    public function giro_stor($id)
    {
        DB::table('penerimaan_versekot')->where('id',$id)->update([
            'status_giro' => 'Sudah Disetor',
        ]);
        Alert::success('Success', 'Giro Berhasil Disetor');
        return redirect()->back();
    }
    public function giro_cair()
    {
        $cair = DB::table('penerimaan_versekot')->where('type_pembayaran','giro')->Where('status_giro','Giro Disetor')->get();
        return view('transaksi_finance.kasir.giro_cair',compact('cair'));

    }
    public function cair_giro($id)
    {
        DB::table('penerimaan_versekot')->where('id',$id)->update([
            'status_giro' => 'Giro cair',
        ]);
        Alert::success('Success', 'Giro Berhasil Cair');
        return redirect()->back();
    }
}
