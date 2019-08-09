@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4">
                    <h2>Pengajuan <b>SMK</b></h2>
                </div>
                <div class="d-flex flex-row-reverse">

                    <a href="{{route('tambah_psmk')}}" class="btn btn-info add-new position-sticky shadow buttom-responsive"><i
                            class="fa fa-plus"></i> Add Pengajuan SMK</a>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary"> 
                    <th  class="text-white shadow"><input type="checkbox" id="master"></th>
                        <th class="text-white shadow">No Smk</th>
                        <th class="text-white shadow">Nama Peminat</th>
                        <th class="text-white shadow">Address</th>
                        <th class="text-white shadow">Nama Sales</th>
                        <th class="text-white shadow">Type Pembayaran</th>
                        <th class="text-white shadow">Jenis Pembayaran</th>
                        <th class="text-white shadow">BBN</th>
                        <th class="text-white shadow">Harga</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($smk as $smk)
                    <tr id="tr_{{$smk->id}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$smk->id}}"></td>

                        <td>{{$smk->kode_smk}}</td>
                        <td>{{$smk->nama_cust}}</td>
                        <td>{{$smk->alamat}}</td>
                        <td>{{$smk->nama_sales}}</td>
                        <td>{{$smk->payment}}</td>
                        @if($smk->jenis_payment == "On_the_road")
                        <td>On The Road</td>
                        <td>{{$smk->bbn}}</td>
                        @elseif($smk->jenis_payment == "of_the_road")
                        <td>Off The Road</td>
                        <td>Null</td>
                        @endif
                        <td>{{$smk->nilai_versekot}}</td>
                        <td class="text-center">
                            <a data-target="#editEmployeeModal" data-toggle="modal" class="btn btn-warning btn-sm shadow"><i class="fa fa-pencil text-white"></i></a>
                            <a href="/pengajuan_smk/del/{{$smk->id}}" class="btn btn-sm btn-danger shadow"><i class="fa fa-times-circle fa-lg text-white"></i></a>
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
