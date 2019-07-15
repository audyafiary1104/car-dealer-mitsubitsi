@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Custommer</b></h2>
                </div>
            </div>
            <form method="POST" action="{{url('add_custommer')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">NIK</label>
                    <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1"
                        placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1"
                        placeholder="DD/MM/YY">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                        placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="exampleFormControlInput1"
                        placeholder="Provinsi">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" id="exampleFormControlInput1"
                        placeholder="Kode Pos">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status Perkawinan</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pekerjaan</label>
                    <input name="pekerjaan" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Industri</label>
                    <input name="industri" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No Handphone</label>
                    <input name="phone_number" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="(+62)0000000">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Npwp</label>
                    <input name="npwp" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="300000000">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="example@example.com">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
