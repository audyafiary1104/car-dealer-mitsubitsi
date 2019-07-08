@extends('layouts.admin.master')
@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="col-sm-4"><h2>Master <b>Jabatan</b></h2></div>
                    <div class="d-flex flex-row-reverse">
                    <button type="button"  class="btn btn-info add-new position-sticky shadow buttom-responsive"  data-toggle="modal" data-target="#modal_jabatan"><i class="fa fa-plus"></i> Add Jabatan</button>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Kode</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Jabatan</th>
                        <th class="text-white shadow">Role</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($jabatan as $jb)
                    <tr>
                        <td>JBT0001</td>
                        <td>{{$jb->nama}}</td>
                        <td>{{$jb->nama_jabatan}}</td>
                        <td>{{$jb->role}}</td>
                        <td class="text-center">
                            <button type="button" tooltip="modal" data-togle="#edit_jabatan" class="btn btn-warning btn-sm shadow"><i class="fa fa-pencil text-white"></i></button>
                            <button type="button" class="btn btn-sm btn-danger shadow"><i class="fa fa-times-circle text-white"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@include('master.modal.jabatan')
@include('master.modal.edit_jabatan')
@endsection
