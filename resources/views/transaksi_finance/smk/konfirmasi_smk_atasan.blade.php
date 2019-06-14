@extends('layouts.admin.master')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Konfirmasi <b>Smk</b> Oleh Atasan</h2>
                </div>

            </div>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>

                    <th>No Smk</th>
                    <th>Nama Peminat</th>
                    <th>Address</th>
                    <th>Nama Sales</th>
                    <th>Pembayaran</th>
                    <th>Harga</th>
                    <th>Actions</th>
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
                        <a href="/konfirmasi_smk_atasan/setuju/{{$smk->id}}" data-target="#"><i
                                class="fa fa-check-square-o fa-lg"
                                style="text-shadow:1px 1px 3px black;color:springgreen;margin-left:10px"
                                data-toggle="tooltip" title="Setuju"></i></a>
                        <a href="#" data-toggle="modal" data-target="#deleteEmployeeModal"><i
                                class="fa fa-times-circle-o fa-lg" style="text-shadow:1px 1px 3px black;color:#FF0000"
                                data-toggle="tooltip" title="Tidak Setuju"></i></a>
                        <a href="" data-toggle="modal" data-target="#lempar_smk_ats"><i
                                class="fa fa-mail-reply-all fa-lg" style="text-shadow:1px 1px 3px black;color:blue"
                                data-toggle="tooltip" title="Lempar"></i></a>
                    </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
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

@endsection