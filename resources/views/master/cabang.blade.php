@extends('layouts.admin.master')
@section('content') 
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Master <b>Cabang</b></h2></div>
                    <div class="col-sm-3">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#add_cabang"><i class="fa fa-plus"></i> Add Cabang</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Kode Cabang</th>
                        <th>Nama Cabang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cbg as $cabang)
                    <tr>
                    <td>CST0001</td>
                        <td>{{$cabang->nama_cabang}}</td>
                        <td>
							<button type="button" class="view" title="View" data-toggle="modal" data-target="#view_cabang"><i class="material-icons">&#xE417;</i></a>
                            <button href="#cabang_edit" class="edit" title="Edit" data-toggle="modal"><i class="material-icons">&#xE254;</i></button>
                            <button href="#myModal" class="trigger-btn" data-toggle="modal" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
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