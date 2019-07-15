@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Departement</b></h2>
                </div>
            </div>
                <form method="post" action="{{url('add_dpt')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name Depatement</label>
                        <input name="nama_dpt" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama ">
                    </div>
                    <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
