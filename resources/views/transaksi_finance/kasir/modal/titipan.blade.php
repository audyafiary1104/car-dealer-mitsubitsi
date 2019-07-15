@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>SMK</b></h2>
                </div>
            </div>
            <form action="{{url('add_titipan')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Cust</label>
                    @if(count($cust)<= 0) <select class="form-control" name="nama" id="exampleFormControlSelect1">
                        <option disabled selected>Input Master Customer Terlebih dahulu</option>
                        </select>@else
                        @foreach($cust as $cust)
                        <select class="form-control" name="nama" id="exampleFormControlSelect1">
                            <option value="{{$cust->id}}|{{$cust->nama}}">{{$cust->nama}}</option>
                        </select>
                        @endforeach
                        @endif
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nilai Titipan</label>
                            <input type="text" class="form-control" name="nilai_titipan" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Titipan</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Nama">
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary shadow">Save changes</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
