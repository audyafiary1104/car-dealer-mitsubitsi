@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
            <div class="table-wrapper shadow">
                <div class="table-title">
                    <div class="col-sm-4 mb-2"><h2>Master <b>Level Jabatan</b></h2></div>
                    <div class="d-flex justify-content-between">
                        <div class="search-box w-50">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control shadow" placeholder="Search&hellip;">
                        </div>
                        <a href="{{route('addleveljabatan')}}" class="btn btn-info add-new shadow"><i class="fa fa-plus"></i> Add Level Jabatan</a>
                    </div>
                </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Kode Level Jabatan</th>
                        <th class="text-white shadow">Nama Level Jabatan</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lv_jbt as $level_jabatan)
                    <tr>
                    <td>CST0001</td>
                        <td>{{$level_jabatan->nama}}</td>
                        <td class="text-center">
                            <a href="#level_jabatan_edit" class="btn btn-warning btn-sm shadow" data-toggle="modal"><i class="fa fa-pencil fa-lg text-white"></i></a>
                            <a href="{{route('del_lvl',['id'=>$level_jabatan->id])}}"class="btn btn-sm btn-danger shadow"><i class="fa fa-times fa-lg text-white"></i></a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
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
    @include('master.modal.edit_level_jabatan')

@endsection
