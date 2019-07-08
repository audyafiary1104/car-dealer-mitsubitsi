@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="col-sm-5 mb-2"><h2>Master <b>Custommer</b></h2></div>
                    <div class="d-flex justify-content-between">
                        <div class="search-box w-50">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                        <button type="button" class="btn btn-info add-new shadow" data-toggle="modal" data-target="#add_custommer"><i class="fa fa-plus"></i> Add Customer</button>
                    </div>
                </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white">Kode Custommer</th>
                        <th class="text-white">Nama</th>
                        <th class="text-white">Alamat</th>
                        <th class="text-white">Provinsi</th>
                        <th class="text-white">Kode Pos</th>
                        <th class="text-white">Nik</i></th>
                        <th class="text-center text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cust as $customer)
                    <tr>
                    <td>CST0001</td>
                        <td>{{$customer->nama}}</td>
                        <td>{{$customer->alamat}}</td>
                        <td>{{$customer->provinsi}}</td>
                        <td>{{$customer->kode_pos}}</td>
                        <td>{{$customer->nik}}</td>
                        <td>
                        <a href="edit_custommer" style="margin-left:28%;" class="edit" data-toggle="modal"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#"class="delete" title="Delete" ><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
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
@include('master.modal.add_custommer')

@endsection
