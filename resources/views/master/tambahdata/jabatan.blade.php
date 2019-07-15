@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Jabatan</b></h2>
                </div>
            </div>
            <form method="post" action="{{url('add_jabatan')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="show_user" type="text" class="form-control nama_karyawan" id="nama_karyawan"
                        placeholder="Nama ">
                    <input type="hidden" name="user_id" value="" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="Nik ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jabatan</label>
                    <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                        <option value="manager">Manager</option>
                        <option value="sales">Sales</option>
                        <option value="supervisor">Spv</option>
                        <option value="admin">Admin</option>
                        <option value="bm">Branch Manager</option>
                        <option value="super_admin">Super Admin</option>
                        <option value="area_manager">Area Manager</option>
                        <option value="gm">General Manager </option>
                        <option value="owner">Owner</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Role</label>
                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                        <option value="nasional">Nasional</option>
                        <option value="regional">Regional</option>
                        <option value="cabang">Cabang</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="admin">Admin</option>
                        <option value="cso_cs">Cso/Cs</option>
                    </select>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
