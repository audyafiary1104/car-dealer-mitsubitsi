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
        DB::table('jabatans')->insert([
            'nama_jabatan' => $request->jabatan,
            'role' => $request->role,
            'nama' => $request->show_user,
            'nik' => $request->nik
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

    public function add_dpt(Request $request) {
        DB::table('master_departement')->insert([
           'nama_dpt' => $request->nama_dpt
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
    public function custommer_index()
    {
        $cust = DB::table('master_custommer')->get();
       return view('master.custommer',compact('cust'));
    }
    public function departement_index()
    {
        $dpt = DB::table('master_departement')->get();
        return view('master.departement',compact('dpt'));
    }
    public function cabang_index()
    {
        $cbg = DB::table('master_cabang')->get();
    return view('master.cabang',compact('cbg'));
    }
    public function product(Request $request) {
        DB::table('master_product')->insert([
         'nama'=> $request->nama,
         'suplier'=> $request->suplier,
         'type'=> $request->type,
         'stock'=> $request->stock
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
public function product_index()
{
    $product = DB::table('master_product')->get();
    return view('master.product',compact('product'));
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
    public function add_lv_jbt(Request $request)
    {
        DB::table('master_level_jabatan')->insert([
            'nama' =>$request->nama_level_jabatan
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function add_cabang(Request $request)
    {
        DB::table('master_cabang')->insert([
            'nama_cabang' =>$request->nama_cabang
        ]);
        Alert::success('Success', 'Data berhasil ditambahkan');
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
    public function master_jabatan()
    {
        $jabatan = DB::table('jabatans')->get();
        return view('master.jabatan',compact('jabatan'));
    }
    public function lv_jbt()
    {
        $lv_jbt = DB::table('jabatans')->get();
        return view('master.level_jabatan',compact('lv_jbt'));
    }
    public function jabatan_auto(Request $request)
    {
            $query = $request->get('term','');
            $karyawan = DB::table('master_karyawan')->where('name', 'LIKE','%'.$query.'%')->get();
            $data=array();
            foreach ($karyawan as $karyawan) {
                $data[]=array('value'=>$karyawan->name,'id'=>$karyawan->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

}
