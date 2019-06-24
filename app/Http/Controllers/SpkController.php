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
    public function print_spk()
    {
        return view('print_spk');
    }
}
