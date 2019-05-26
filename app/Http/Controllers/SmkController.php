<?php

namespace App\Http\Controllers;
use Excel;
use App\Exports\UserExport;
use DB;
use Alert;
use App\Karyawan;
use Illuminate\Http\Request;

class SmkController extends Controller
{
   public function pengajuan(){
      return Excel::download(new UserExport, 'users.xlsx');
   }
   public function karyawan()
   {
      $karyawan = DB::table('master_karyawan')->get();
      $htng = karyawan::count();

      return view('master.karyawan',compact('karyawan','htng'));
   }
   public function Add_karyawan(Request $request){
    
    Karyawan::create([
         'nama' => $request->nama,
         'alamat' => $request->alamat,
         'nik' => $request->nik,
         'jabatan' => $request->jabatan,
         'cabang' => $request->cabang,
         'nama_atasan' => $request->nama_atasan,
         'departement' => $request->dpt
      ]);
      Alert::success('Success', 'Data berhasil ditambahkan');
      return redirect()->back();
   }
   public function delete_karyawan($id)
   {
      $del = karyawan::find($id);
      $del->delete();
      Alert::success('Success', 'Data berhasil Dihapus');
      return redirect()->back();
   }
   public function add_jabatan(Request $request)
   {
      DB::table('master_jabatan')->insert([

      ]);
      Alert::success('Success', 'Data berhasil ditambahkan');
      return redirect()->back();
   }
   public function add_custommer(Request $request)
   {
      DB::table('master_custommer')->insert([

         ]);
         Alert::success('Success', 'Data berhasil ditambahkan');
         return redirect()->back();
   }
   public function departement(Request $request)
   {
      DB::table('master_departement')->insert([

         ]);
         Alert::success('Success', 'Data berhasil ditambahkan');
         return redirect()->back();
   }
   public function product(Request $request)
   {
      DB::table('master_product')->insert([

         ]);
         Alert::success('Success', 'Data berhasil ditambahkan');
         return redirect()->back();
   }
   public function biaya(Request $request)
   {
      DB::table('master_biaya')->insert([

         ]);
         Alert::success('Success', 'Data berhasil ditambahkan');
         return redirect()->back();
   }
}
