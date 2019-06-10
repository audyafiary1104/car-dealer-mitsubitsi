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
        $some_date = Carbon::now()->toDateTimeString();
        $now = Carbon::createFromFormat('Y-m-d H:i:s', $some_date)
        ->setTimezone('Asia/Jakarta');   
        foreach($now as $now){
        DB::table('pengajuan_smk')->insert([
            'nama_cust' => $request->nama,
            'tanggal_pemesan' => $request->tanggal_pemesan,
            'nama_stnk' => $request->nama_stnk,
            'alamat' => $request->alamat,
            'merk' => $request->merk,
            'type' => $request->type,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'nama_sales' =>$request->nama_sales,
            'nilai_versekot' => $request->nilai_versekot,
            'payment' => $request->payment,
            'tanggal_input' => $now
        ]);
    } 

        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
}
