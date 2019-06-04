@extends('layouts.admin.master')
@section('content') 
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Master <b>Biaya</b></h2></div>
                    <div>
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#biaya"><i class="fa fa-plus"></i> Import Excell</button>
                    </div>
                    <div></div>
                    <div>
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#add_custommer"><i class="fa fa-plus"></i> Export Excell</button>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>kode gl</th>
                        <th>nama gl</th>
                        <th>type gl</th>
                        <th>level gl</th>
                        <th>group gl</th>
                        <th>linnk gl</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($biaya as $b)
                    <tr>
                        <td>{{$b->kode_gl}}</td>
                        <td>{{$b->nama_gl}}</td>
                        <td>{{$b->type_gl}}</td>
                        <td>{{$b->level_gl}}</td>
                        <td>{{$b->group_gl}}</td>
                        <td>{{$b->linnk_gl}}</td>
                        <td>
                            <button href="#custommer_edit" class="edit" title="Edit" data-toggle="modal"><i class="material-icons">&#xE254;</i></button>
							<a href="/master_biaya/del/{{$b->id}}" class="delete" title="Delete" ><i class="material-icons">&#xE5C9;</i></a>
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

    @include('master.modal.biaya')

@endsection