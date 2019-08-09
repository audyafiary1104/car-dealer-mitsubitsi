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
        $smk = DB::table('pengajuan_smk')->where('id',$request->id)->first();
        $cust = DB::table('master_custommer')->where('id',$request->id_cust)->first();
        $k = DB::table('spk')->max('kode_spk');
        $Y = date("Y");
        $no = 1;
        if($k){
            $kode = "BOM"."/".$Y.'/'.sprintf("%03s", abs($k + 1));
        }else{
            $kode = "BOM"."/".$Y.'/'.sprintf("%03s",abs($no));
        }     
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');
        $time = date('Y-m-d',strtotime($now));
        if ($request->dibayar_tunai) {
        DB::table('penerimaan_versekot')->insert([
        'id_cust' => $request->id_cust,
        'id_smk'=> $request->id,
        'nilai_versekot'=> $request->nilai_versekot,
        'tanggal_pembuat'=> $time,
        'nama_bank' => $request->nama_bank,
        'type_pembayaran' => $request->jenis_pembayaran,
        'dibayar' => $request->dibayar_tunai,
        'sisa' => $request->nilai_versekot - $request ->dibayar,
        'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
        ]);
        DB::table('spk')->insert([
            'kode_spk' => $kode,
            'nama_cust' => $smk->nama_cust,
            'alamat'=> $smk->alamat,
            'type_kendaraan'=> $smk->type,
            'pembayaran'=> $request->jenis_pembayaran,
            'ktp'=> $cust->nik,
            'tanggal_pembuat'=> $time,
            'id_smk'=> $request->id,
            ]);
    }else if($request->dibayar_giro){
        DB::table('penerimaan_versekot')->insert([
            'id_cust' => $request->id_cust,
            'id_smk'=> $request->id,
            'nilai_versekot'=> $request->nilai_versekot,
            'tanggal_pembuat'=> $time,
            'nama_bank' => $request->nama_bank,
            'type_pembayaran' => $request->jenis_pembayaran,
            'dibayar' => $request->dibayar_giro,
            'sisa' => $request->nilai_versekot - $request ->dibayar,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            ]);
    }else{
        DB::table('penerimaan_versekot')->insert([
            'id_cust' => $request->id_cust,
            'id_smk'=> $request->id,
            'nilai_versekot'=> $request->nilai_versekot,
            'tanggal_pembuat'=> $time,
            'nama_bank' => $request->nama_bank,
            'type_pembayaran' => $request->jenis_pembayaran,
            'dibayar' => $request->bayar_giro,
            'sisa' => $request->nilai_versekot - $request ->dibayar,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            ]);
            DB::table('spk')->insert([
            'kode_spk' => $kode,

                'nama_cust' => $smk->nama_cust,
                'alamat'=> $smk->alamat,
                'type_kendaraan'=> $smk->type,
                'pembayaran'=> $smk->status_pembayaran,
                'ktp'=> $cust->nik,
                'tanggal_pembuat'=> $time,
                'id_smk'=> $request->id,
                ]);
    }

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
        return redirect()->route('titipan');
    }
    public function titipan_add_page()
    {
        $cust = DB::table('master_custommer')->get();
       return view('transaksi_finance.kasir.modal.titipan',compact('cust'));
    }

    public function setor_giro()
    {
        $giro = DB::table('penerimaan_versekot')->where('type_pembayaran','giro')->where('status_giro','belum Disetor')->get();
        return view('transaksi_finance.kasir.setor_giro',compact('giro'));
    }
    public function giro_stor($id)
    {
        $get = DB::table('penerimaan_versekot')->where('id',$id)->first();
        DB::table('penerimaan_versekot')->where('id',$id)->update([
            'status_giro' => 'Sudah Disetor',
        ]);
        DB::table('pengajuan_smk')->where('id',$get->id_smk)->update([
            'status_giro' => 'Sudah Disetor',
        ]);   
        Alert::success('Success', 'Giro Berhasil Disetor');
        return redirect()->back();
    }
    public function giro_cair()
    {
        $cair = DB::table('penerimaan_versekot')->where('type_pembayaran','giro')->where('status_giro','Sudah Disetor')->get();

        return view('transaksi_finance.kasir.giro_cair',compact('cair'));

    }
    public function deleteAll(Request $request)
    {
       
        dd($g);
        // return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function cair_giro($id)
    {
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)->setTimezone('Asia/Jakarta');
        $time = date('Y-m-d',strtotime($now));
        $get = DB::table('penerimaan_versekot')->where('id',$id)->first();
        $smk = DB::table('pengajuan_smk')->where('id',$get->id_smk)->first();
        $cust = DB::table('master_custommer')->where('id',$get->id_cust)->first();
        $k = DB::table('spk')->max('kode_spk');
        $Y = date("Y");
        $no = 1;
        if($k){
            $kode = "BOM"."/".$Y.'/'.sprintf("%03s", abs($k + 1));
        }else{
            $kode = "BOM"."/".$Y.'/'.sprintf("%03s",abs($no));
        }      
        DB::table('penerimaan_versekot')->where('id',$id)->update([
            'status_giro' => 'Giro cair',
        ]);
        DB::table('pengajuan_smk')->where('id',$get->id_smk)->update([
            'status_giro' => 'Giro cair',
        ]);   
        DB::table('spk')->insert([
            'kode_spk' => $kode,
            'nama_cust' => $smk->nama_cust,
            'alamat'=> $smk->alamat,
            'type_kendaraan'=> $smk->type,
            'pembayaran'=> $smk->status_pembayaran,
            'ktp'=> $cust->nik,
            'tanggal_pembuat'=> $time,
            'id_smk'=> $id,
            ]);
        Alert::success('Success', 'Giro Berhasil Cair');
        return redirect()->back();
    }
}
