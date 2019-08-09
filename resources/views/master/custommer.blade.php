@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-wrapper shadow">
        <div class="table-title">
            <div class="col-sm-5 mb-2">
                <h2>Master <b>Custommer</b></h2>
            </div>
            <div class="d-flex justify-content-between">
                <div class="search-box w-50">
                    <i class="material-icons">&#xE8B6;</i>
                    <input type="text" class="form-control shadow" placeholder="Search&hellip;">
                </div>
                <a href="{{route('tambahcustommer')}}" class="btn btn-info add-new shadow"><i class="fa fa-plus"></i>
                    Add Customer</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Kode Customer</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Alamat</th>
                        <th class="text-white shadow">Provinsi</th>
                        <th class="text-white shadow">Kode Pos</th>
                        <th class="text-white shadow">Nik</th>
                        <th class="text-white shadow">Tempat Lahir</th>
                        <th class="text-white shadow">Tgl Lahir</th>
                        <th class="text-white shadow">Status</th>
                        <th class="text-white shadow">Pekerjaan</th>
                        <th class="text-white shadow">Industri</th>
                        <th class="text-white shadow">Email</th>
                        <th class="text-white shadow">No.Hp</th>
                        <th class="text-white shadow text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cust as $customer)
                    <tr>
                        <td>{{$customer->kode_custommer}}</td>
                        <td>{{$customer->nama}}</td>
                        <td>{{$customer->alamat}}</td>
                        <td>{{$customer->provinsi}}</td>
                        <td>{{$customer->kode_pos}}</td>
                        <td>{{$customer->nik}}</td>
                        <td>{{$customer->tempat_lahir}}</td>
                        <td>{{$customer->tanggal_lahir}}</td>
                        <td>{{$customer->status}}</td>
                        <td>{{$customer->pekerjaan}}</td>
                        <td>{{$customer->industri}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone_number}}</td>
                        <td>
                            <a class="btn btn-warning btn-sm shadow edit-item" value="{{$customer->id}}"><i
                                    class="fa fa-pencil fa-lg text-white"></i></a>
                            <a href="{{ route('del_customer',['id'=>$customer->id]) }}"
                                class="btn btn-danger btn-sm shadow"><i class="fa fa-times fa-lg text-white"></i></a>
                        </td>
                    </tr>
                    @endforeach
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
@include('master.modal.edit_custommer')
<script>
    $(document).ready(function () {
        $(document).on('click', '.edit-item', function () {
            var i = $(this).attr("value");
            $(".edit_custommer").attr('action', "/edit_cust/" + i);
            $(".edit_cust").modal();
        });
    });

</script>
@endsection
