@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="col-sm-4 mb-2"><h2>Master <b>Level Jabatan</b></h2></div>
                    <div class="d-flex justify-content-between">
                        <div class="search-box w-50">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                        <button type="button" class="btn btn-info add-new shadow" data-toggle="modal" data-target="#add_level_jabatan"><i class="fa fa-plus"></i> Add Level Jabatan</button>
                    </div>
                </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Kode Level Jabatan</th>
                        <th>Nama Level Jabatan</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lv_jbt as $level_jabatan)
                    <tr>
                    <td>CST0001</td>
                        <td>{{$level_jabatan->nama}}</td>
                        <td>
                            <a href="#add_level_jabatan" style="margin-left:28%;" class="edit" data-toggle="modal"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#mymodal"class="delete" title="Delete" ><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
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
    @include('master.modal.add_level_jabatan')
    @include('master.modal.edit_level_jabatan')

@endsection
