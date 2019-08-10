<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use PDF;

class proses_bpn extends Controller
{
   public function serah_terima_add()
   {
    $spk = DB::table('spk')->get();
    return view('proses_bpn.tambah_data.serah_terima',compact('spk'));
   } 
   public function serah_terima_add_ajax($id)
   {
    $product = DB::table('spk')->join('pengajuan_smk','pengajuan_smk.id','=','spk.id_smk')->
    join('master_custommer','master_custommer.id','=','pengajuan_smk.id_cust')
    ->select('spk.type_kendaraan','pengajuan_smk.warna', 'master_custommer.alamat', 'spk.id', 'master_custommer.nama', 'master_custommer.kode_custommer')
    ->where('spk.id',$id)->first();
    return response()->json($product);
    }
    public function serah_terima_post(Request $request)
    {
        DB::table('serah_terima_brjs')->insert([
            'id_spk' => $request->id_spk,
            'no_spk' => $request->no_spk,
            'no_cust' => $request->no_cust,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'type_kendaraan' => $request->type_kendaraan,
            'warna' => $request->warna,
        ]);
        Alert::success('Success', 'Data berhasil Ditambahkan');
        return redirect('serah_terima');
    }
    public function print(Request $request)
    {
        
        $ids = $request->ids;
        $k = DB::table('serah_terima_brjs')->max('nomor_faktur');
        $no = 1;
        if($k){
            $cag = explode('SRH',$k);
            $kode = "SRH".sprintf("%03s", abs($cag[1] + 1));
        }else{
            $kode = "SRH".sprintf("%03s",abs($no));
        }      
       DB::table("serah_terima_brjs")->whereIn('id',explode(",",$ids))->update(['nomor_faktur'=>$kode,]);

        $g = DB::table("serah_terima_brjs")->join('spk','spk.id','serah_terima_brjs.id_spk')->join('pengajuan_smk','pengajuan_smk.id','=','spk.id_smk')->
        join('master_custommer','master_custommer.id','=','pengajuan_smk.id_cust')->whereIn('serah_terima_brjs.id',explode(",",$ids))->get();
        foreach($g as $key){
            $no = $key->nomor_faktur;
        }
        $pdf = PDF::loadview('print_serah_terima',['biro'=>$g,'no_faktur' => $no]);
        return $pdf->download('serah_terima.pdf');
    }
    public function index()
    {   $get = DB::table('serah_terima_brjs')->join('spk','spk.id','=','serah_terima_brjs.id_spk')->select('serah_terima_brjs.*','spk.kode_spk')->get();
        return view('proses_bpn.serah_terima',compact('get'));
    }
}
