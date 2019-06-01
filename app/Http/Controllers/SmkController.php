<?php namespace App\Http\Controllers;
use Excel;
use App\Exports\UserExport;
use App\Imports\BiayaImport;
use DB;
use Alert;
use App\Karyawan;
use Illuminate\Http\Request;

class SmkController extends Controller {
    public function pengajuan() {
        return Excel::download(new UserExport, 'users.xlsx');
    }

    public function karyawan() {
        $karyawan=DB::table('master_karyawan')->get();
        $htng=karyawan::count();

        return view('master.karyawan', compact('karyawan', 'htng'));
    }

    public function Add_karyawan(Request $request) {

        Karyawan::create([ 'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'nik'=> $request->nik,
                'jabatan'=> $request->jabatan,
                'cabang'=> $request->cabang,
                'nama_atasan'=> $request->nama_atasan,
                'departement'=> $request->dpt]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function delete_karyawan($id) {
        $del=karyawan::find($id);
        $del->delete();
        Alert::success('Success', 'Data berhasil Dihapus');
        return redirect()->back();
    }

    public function add_jabatan(Request $request) {
        DB::table('master_jabatan')->insert([

        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function add_custommer(Request $request) {
        DB::table('master_custommer')->insert([
                 'nik'=> $request->nik,
                 'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'tempat_lahir'=> $request->tempat_lahir,
                'tanggal_lahir'=> $request->tanggal_lahir,
                'status'=> $request->status,
                'pekerjaan'=> $request->pekerjaan,
                'industri'=> $request->industri,
                'provinsi'=> $request->provinsi,
                'kode_pos'=> $request->kode_pos,
                'agama'=>$request->agama
                ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function departement(Request $request) {
        DB::table('master_departement')->insert([
           'nama_dpt' => $request->nama_dpt
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function product(Request $request) {
        DB::table('master_product')->insert([
         'nomer_rangka'=> $request->nomer_rangka,
         'suplier'=> $request->suplier,
         'warna'=> $request->warna,
         'type'=> $request->type,
         'stock'=> $request->stock
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function biaya(Request $request) {
      $this->validate($request, [
         'file' => 'required|mimes:xls,xlsx'
     ]);

     if ($request->hasFile('file')) {
         $file = $request->file('file'); //GET FILE
         Excel::import(new BiayaImport, $file); //IMPORT FILE
         Alert::success('Success', 'Data berhasil ditambahkan');

         return redirect()->back();
     }
        Alert::error('Error', 'Data Tidak Berhasil ditambahkan');
        return redirect()->back();
    }
    
}
