@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Level Jabatan</b></h2>
                </div>
            </div>
            <form action="{{url('add_level_jabatan')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Level Jabatan</label>
                    <input type="text" name="nama_level_jabatan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Level Jabatan">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
