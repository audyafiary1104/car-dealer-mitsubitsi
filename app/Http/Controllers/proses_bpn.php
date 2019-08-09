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
    join('master_custommer','master_custommer.id','=','pengajuan_smk.id_cust')->where('spk.id',$id)->first();
    return response()->json($product);
    }
    public function serah_terima_post(Request $request)
    {
        DB::table('serah_terima_post')->insert([
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
        $g = DB::table("serah_terima_brjs")->join('spk','spk.id','serah_terima_brjs.id_spk')->join('pengajuan_smk','pengajuan_smk.id','=','spk.id_smk')->
        join('master_custommer','master_custommer.id','=','pengajuan_smk.id_cust')->whereIn('serah_terima_brjs.id',explode(",",$ids))->get();
        $pdf = PDF::loadview('print_serah_terima.blade',['biro'=>$g]);
        return $pdf->stream();
    }
}
