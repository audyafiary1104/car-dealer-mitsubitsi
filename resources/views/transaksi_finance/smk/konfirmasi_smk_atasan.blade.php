@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-5 mb-2">
                    <h2>Konfirmasi <b>Smk</b> Oleh Atasan</h2>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Smk</th>
                        <th class="text-white shadow">Nama Peminat</th>
                        <th class="text-white shadow">Address</th>
                        <th class="text-white shadow">Nama Sales</th>
                        <th class="text-white shadow">Pembayaran</th>
                        <th class="text-white shadow">Harga</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($smk as $smk)
                    <tr>
                        <td>SMK0001</td>
                        <td>{{$smk->nama_cust}}</td>
                        <td>{{$smk->alamat}}</td>
                        <td>{{$smk->nama_sales}}</td>
                        <td>{{$smk->payment}}</td>
                        <td>{{$smk->nilai_versekot}}</td>
                        <td>
                            <a href="/konfirmasi_smk_atasan/setuju/{{$smk->id}}" data-target="#"><i class="fa fa-check-square bg-light text-success" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#deleteEmployeeModal"><i class="fa fa-window-close bg-light text-danger" aria-hidden="true"></i></a>
                            <a href="" data-toggle="modal" data-target="#lempar_smk_ats"><i class="fa fa-share-square bg-light text-dark" aria-hidden="true"></i></a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
@include('transaksi_finance.smk.modal.lempar_smk_atasan')
@endsection
