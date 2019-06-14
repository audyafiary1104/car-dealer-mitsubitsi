@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:-10px;"><h2>Master <b>Departement</b></h2></div>
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-info add-new" style="margin-bottom:-50px;margin-left:906px;box-shadow:1px 1px 3px black;"  data-toggle="modal" data-target="#add_departemen"><i class="fa fa-plus"></i> Add Departement</button>
                    </div>
                    <div class="col-sm-12">
                        <div class="search-box" style="margin-right:375px;width:65%;margin-bottom:10px;margin-bottom:2%;">
                         <i class="material-icons">&#xE8B6;</i>
                         <input type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white">Kode</th>
                        <th class="text-white">Nama Departement</th>
                        <th class="text-center text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dpt as $departement)
                    <tr>
                        <td>DPT0001</td>
                        <td>{{$departement->nama_dpt}}</td>
                        <td>
                            <a href="#"style="margin-left:28%;" class="edit" title="Edit" data-toggle="modal" data-target="#"><i class="fa fa-pencil fa-lg" data-toggle="tooltip" title="Edit" style="text-shadow:1px 1px 3px black"></i></a>
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
    @include('master.modal.add_dpt')
@endsection
