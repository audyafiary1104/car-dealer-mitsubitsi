@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px;"><h2>Master <b>Cabang</b></h2></div>
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" style="margin-bottom:-100px;margin-left:560px;box-shadow:1px 1px 3px black;" data-toggle="modal" data-target="#add_cabang"><i class="fa fa-plus"></i> Add Cabang</button>
                    </div>
                    <div class="col-sm-12">
                        <div class="search-box" style="margin-right:375px;width:65%;">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Kode Cabang</th>
                        <th>Nama Cabang</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cbg as $cabang)
                    <tr>
                    <td>CST0001</td>
                        <td>{{$cabang->nama_cabang}}</td>
                        <td>
                            <a href="" style="margin-left:8%;" class="preview" data-toggle="modal"><i class="fa fa-eye fa-lg" style="color:aqua;text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Preview"></i></a>
                            <a href="" class="edit" data-toggle="modal"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Edit"></i></a>
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
@include('master.modal.add_cabang')

@endsection
