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

        Karyawan::create([
                'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'nik'=> $request->nik,
                'jabatan'=> $request->jabatan,
                'cabang'=> $request->cabang,
                'nama_atasan'=> $request->nama_atasan,
                'departement'=> $request->dpt
                ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('karyawan');
    }

    public function delete_karyawan($id) {
        $del=karyawan::find($id);
        $del->delete();
        Alert::success('Success', 'Data berhasil Dihapus');
        return redirect()->back();
    }

    public function edit_karyawan($id,Request $request)
    {
        DB::table('master_karyawan')->where('id',$id)->update([
                'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'nik'=> $request->nik,
                'jabatan'=> $request->jabatan,
                'cabang'=> $request->cabang,
                'nama_atasan'=> $request->nama_atasan,
                'departement'=> $request->dpt
        ]);
        return redirect()->back();
    }

    public function tambah_karyawan_page()
    {
        return view('master.tambahdata.tambah_karyawan');
    }

    public function add_jabatan(Request $request) {
        DB::table('jabatans')->insert([
            'nama_jabatan' => $request->jabatan,
            'role' => $request->role,
            'nama' => $request->show_user,
            'nik' => $request->nik
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('jabatan');

    }
    public function edit_jabatan($id,Request $request)
    {
        DB::table('jabatans')->where('id',$id)->update([
            'nama' => $request->nama,
            'nama_jabatan' => $request->jabatan,
            'role' => $request->role
        ]);
        return redirect()->back();
    }

    public function del_jabatan($id)
    {
        $del = DB::table('jabatans')->where('id', $id);
        $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function master_jabatan()
    {
        $jabatan = DB::table('jabatans')->get();
        return view('master.jabatan',compact('jabatan'));
    }

    public function tambah_jabatan_page()
    {
        return view('master.tambahdata.jabatan');
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
                'agama'=>$request->agama,
                'phone_number'=>$request->phone_number,
                'npwp'=>$request->npwp,
                'email'=>$request->email
                ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('custommer');
    }

    public function custommer_index()
    {
        $cust = DB::table('master_custommer')->get();
       return view('master.custommer',compact('cust'));
    }

    public function tambah_custommer_page()
    {
        return view('master.tambahdata.add_custommer');
    }

    public function del_custommer($id)
    {
        $del = DB::table('master_custommer')->where('id', $id);
        $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function edit_custommer($id,Request $request)
    {
        DB::table('master_custommer')->where('id',$id)->update([
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
           'agama'=>$request->agama,
           'phone_number'=>$request->phone_number,
           'npwp'=>$request->npwp,
           'email'=>$request->email
        ]);
        return redirect()->back();
    }

    public function product(Request $request) {
        DB::table('master_product')->insert([
         'nama'=> $request->nama,
         'tahun_perakitan'=> $request->tahun_perakitan,
         'suplier'=> $request->suplier,
         'type'=> $request->type,
         'stock'=> $request->stock,
         'price_list' => $request->price_list
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('product');
    }

    public function product_index()
    {
        $product = DB::table('master_product')->get();
        return view('master.product',compact('product'));
    }

    public function tambah_product_page()
    {
        return view('master.tambahdata.add_product');
    }

    public function del_product($id)
    {
        $del = DB::table('master_product')->where('id', $id);
        $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function edit_product($id,Request $request)
    {
        DB::table('master_departement')->where('id',$id)->update([
         'nama'=> $request->nama,
         'tahun_perakitan'=> $request->tahun_perakitan,
         'suplier'=> $request->suplier,
         'type'=> $request->type,
         'stock'=> $request->stock,
         'price_list' => $request->price_list
        ]);
        return redirect()->back();
    }

    public function add_dpt(Request $request) {
        DB::table('master_departement')->insert([
           'nama_dpt' => $request->nama_dpt
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('departement');
    }

    public function departement_index()
    {
        $dpt = DB::table('master_departement')->get();
        return view('master.departement',compact('dpt'));
    }

    public function tambah_departement_page()
    {
        return view('master.tambahdata.add_dpt');
    }

    public function del_departement($id)
    {
        $del = DB::table('master_departement')->where('id', $id);
        $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function edit_departement($id,Request $request)
    {
        DB::table('master_departement')->where('id',$id)->update([
            'nama_dpt' => $request->nama_dpt
        ]);
        return redirect()->back();
    }

    public function add_lv_jbt(Request $request)
    {
        DB::table('master_level_jabatan')->insert([
            'nama' =>$request->nama_level_jabatan
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('level_jabatan');
    }
    public function del_lvljabatan($id)
    {
        $del = DB::table('master_level_jabatan')->where('id', $id);
        $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function lv_jbt()
    {
        $lv_jbt = DB::table('master_level_jabatan')->get();
        return view('master.level_jabatan',compact('lv_jbt'));
    }

    public function tambah_level_jabatan_page()
    {
        return view('master.tambahdata.add_level_jabatan');
    }

    public function cabang_index()
    {
        $cbg = DB::table('master_cabang')->get();
    return view('master.cabang',compact('cbg'));
    }

    public function add_cabang(Request $request)
    {
        DB::table('master_cabang')->insert([
            'nama_cabang' =>$request->nama_cabang
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('cabang');
    }

    public function tambah_cabang_page()
    {
        return view('master.tambahdata.add_cabang');
    }

    public function del_cabang($id)
    {
       $del = DB::table('master_cabang')->where('id',$id);
       $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }

    public function biaya(Request $request) {
        // dd($request->file);
     if ($file = $request->file) {
        $nama_file = rand().$file->getClientOriginalName();
		$file->move('masterbiaya',$nama_file);
         Excel::import(new BiayaImport,  public_path('/masterbiaya/'.$nama_file)); //IMPORT FILE
         Alert::success('Success', 'Data berhasil ditambahkan');

         return redirect()->back();
     }
        Alert::error('Error', 'Data Tidak Berhasil ditambahkan');
        return redirect()->back();
    }

    public function master_biaya()
    {
        $biaya = DB::table('master_biaya')->get();
        return view('master.biaya',compact('biaya'));
    }

    public function del_biaya($id)
    {
       $del = DB::table('master_biaya')->where('id',$id);
       $del->delete();
       Alert::success('Success', 'Data berhasil DIHAPUS');
       return redirect()->back();
    }
}
