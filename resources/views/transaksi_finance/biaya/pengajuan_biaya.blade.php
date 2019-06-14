@extends('layouts.admin.master')
<<<<<<< HEAD
@section('content') 
=======
@section('content')
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
<<<<<<< HEAD
                    <div class="col-sm-8"><h2>Pengajuan <b>Biaya</b></h2></div>
                    <div>
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#add_custommer"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
=======
                    <div class="col-sm-4" style="margin-bottom:10px;"><h2>Pengajuan <b>Biaya</b></h2></div>
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-info add-new" style="margin-bottom:-100px;margin-left:560px;box-shadow:1px 1px 3px black;"  data-toggle="modal" data-target="#"><i class="fa fa-plus"></i> Add Customer</button>
                    </div>
                    <div class="col-sm-12">
                        <div class="search-box" style="margin-right:375px;width:65%;">
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Suplier</th>
<<<<<<< HEAD
                        <th>Actions</th>
=======
                        <th class="text-center">Actions</th>
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BY/2019/0001</td>
                        <td>01/05/2018</td>
                        <td>Audy</td>
<<<<<<< HEAD

                        <td>
                            <button href="#custommer_edit" class="edit" title="Edit" data-toggle="modal"><i class="material-icons">&#xE254;</i></button>
                            <button href="#myModal" class="trigger-btn" data-toggle="modal" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                        </td>
                    </tr>
                   
=======
                        <td>
                            <a href="#" style="margin-left:28%;" class="edit" data-toggle="modal"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black"data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#"class="delete" title="Delete" ><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
						 </td>
                    </tr>

>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
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
<<<<<<< HEAD
    </div>     


@endsection
=======
    </div>


@endsection
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
