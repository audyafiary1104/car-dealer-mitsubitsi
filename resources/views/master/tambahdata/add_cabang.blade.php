@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Cabang</b></h2>
                </div>
            </div>
            <form action="{{url('add_cabang')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Cabang</label>
                    <input type="text" name="nama_cabang" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
