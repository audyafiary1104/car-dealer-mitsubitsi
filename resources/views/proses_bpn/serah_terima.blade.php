@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
            <div class="table-wrapper shadow">
                <div class="table-title">
                    <div class="col-sm-5 mb-2"><h2>Master <b>Custommer</b></h2></div>
                    <div class="d-flex justify-content-between">
                        <div class="search-box w-50">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control shadow" placeholder="Search&hellip;">
                        </div>
                        <a href="{{route('tambahcustommer')}}" class="btn btn-info add-new shadow"><i class="fa fa-plus"></i> Add Customer</a>
                    </div>
                </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Spk</th>
                        <th class="text-white shadow">No Cust</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Alamat</th>
                        <th class="text-white shadow">Type Kendaraan</th>
                        <th class="text-white shadow">Warna</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BY0001</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td class="text-center">
                        <a href="" data-target="#custommer_edit" class="btn btn-warning btn-sm shadow" data-toggle="modal"><i class="fa fa-pencil fa-lg text-white"></i></a>
                        <a href="" class="btn btn-danger btn-sm shadow"><i class="fa fa-times fa-lg text-white"></i></a>
						</td>
                    </tr>
                </tbody>
            </table>
        </div>
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
