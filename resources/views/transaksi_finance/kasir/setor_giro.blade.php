@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4">
                    <h2> Setor Giro<b></b></h2>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Transaksi</th>
                        <th class="text-white shadow">No Giro</th>
                        <th class="text-white shadow">Nama Bank</th>
                        <th class="text-white shadow">Tanggal Jatuh Tempo</th>
                        <th class="text-white shadow">Status</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($giro as $giro)
                    <tr>
                        <td>BOM/20019/0001</td>
                        <td>SMK0001</td>
                        <td>{{$giro -> nama_bank}}</td>
                        <td>{{$giro->tanggal_jatuh_tempo}}</td>
                        <td>{{$giro->status_giro}}</td>
                        <td class="text-center">
                            <a href="/setor_giro/{{$giro->id}}" class="btn btn-success btn-sm edit-item shadow"><i class="fa fa-money fa-lg text-white" style="font-size:12px;">Setor Giro</i></a>
                        </td>
                    </tr>
                    @endforeach
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
@endsection
