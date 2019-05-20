@extends('layouts.admin.master')
@section('content') 
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Master <b>Departement</b></h2></div>
                    <div>
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#add_custommer"><i class="fa fa-plus"></i> Add New</button>
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
                        <th>Kode</th>
                        <th>Nama Departement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>35441</td>
                        <td>sales</td>
                        <td>
                            <button href="#custommer_edit" class="edit" title="Edit" data-toggle="modal"><i class="material-icons">&#xE254;</i></button>
                            <button href="#myModal" class="trigger-btn" data-toggle="modal" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                        </td>
                    </tr>
                   
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


@endsection