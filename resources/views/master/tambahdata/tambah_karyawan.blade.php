@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Karyawan</b></h2>
                </div>
            </div>
            <form action="{{url('tambah_karyawan')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                        placeholder="Nama ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nik</label>
                    <input type="text" class="form-control" name="nik" id="exampleFormControlInput1" placeholder="Nik ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1"
                        placeholder="Alamat ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Cabang</label>
                    <input type="text" class="form-control" name="cabang" id="exampleFormControlInput1"
                        placeholder="Cabang ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="exampleFormControlInput1"
                        placeholder="Jabatan ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Departement</label>
                    <input type="text" class="form-control" name="dpt" id="exampleFormControlInput1"
                        placeholder="Departement ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Atasan</label>
                    <input type="text" class="form-control" name="nama_atasan" id="exampleFormControlInput1"
                        placeholder="Nama Atasan ">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
