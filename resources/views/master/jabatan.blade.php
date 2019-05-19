@extends('layouts.admin.master')
@section('content')
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Master <b>Jabatan</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#modal_jabatan"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Jabatan</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Admin</td>
                        <td>admin</td>
                        <td>
                            <button type="button" class="edit" title="Edit" data-toggle="modal" data-target="#edit_jabatan"><i class="material-icons">&#xE254;</i></button>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
@include('master.modal.jabatan')
@include('master.modal.edit_jabatan')
@endsection