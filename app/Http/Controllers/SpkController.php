<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use PDF;
class SpkController extends Controller
{
public function spk_index()
{
    $spk = DB::table('spk')->get();
    return view('buat_spk',compact('spk'));
    }
    public function print_spk($id)
    {   
        $spk = DB::table('spk')->
        join('pengajuan_smk', 'spk.id_smk', '=', 'pengajuan_smk.id')
        ->join('master_custommer','pengajuan_smk.id_cust','=','master_custommer.id')
        ->join('penerimaan_versekot','pengajuan_smk.id','=','pengajuan_smk.id')
        ->where('spk.id',$id)->first();
        return view('print_spk',compact('spk'));
    }
}
