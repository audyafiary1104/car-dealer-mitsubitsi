@extends('layouts.admin.master')
@section('content')
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4"><h2>Master <b>Jabatan</b></h2></div>
                    <div class="col-sm-12">
                        <button type="button" style="margin-left:940px;box-shadow:1px 1px 3px black;" class="btn btn-info add-new"  data-toggle="modal" data-target="#modal_jabatan"><i class="fa fa-plus"></i> Add Jabatan</button>
                    </div>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white">Kode</th>
                        <th class="text-white">Nama</th>
                        <th class="text-white">Jabatan</th>
                        <th class="text-white">Role</th>
                        <th class="text-center text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($jabatan as $jb)
                    <tr>
                        <td>JBT0001</td>
                        <td>{{$jb->nama}}</td>
                        <td>{{$jb->nama_jabatan}}</td>
                        <td>{{$jb->role}}</td>
                        <td>
                            <a href="#" style="margin-left:28%;" class="edit" title="Edit" data-toggle="modal" data-target="#edit_jabatan"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#" style="margin-left:5%;" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
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
