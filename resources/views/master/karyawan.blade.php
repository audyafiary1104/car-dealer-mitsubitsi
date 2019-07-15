@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-wrapper shadow">
        <div class="table-title">
            <div class="col-sm-4">
                <h2>Master <b>Karyawan</b></h2>
            </div>
            <div class="d-flex flex-row-reverse">
                <a href="{{route('tambahkaryawan')}}" class="btn btn-info add-new ml-1 shadow"><i
                        class="fa fa-plus"></i> Add Karyawan</a>
                <a href="" class="btn btn-info add-new shadow" data-toggle="modal" data-target="#uploud_excel"><i
                        class="fa fa-folder"></i> Import Excel</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Name</th>
                        <th class="text-white shadow">Alamat</th>
                        <th class="text-white shadow">Jabatan</th>
                        <th class="text-white shadow">Nik</th>
                        <th class="text-white shadow">Nama Atasan</th>
                        <th class="text-white shadow">Cabang</th>
                        <th class="text-white shadow">Departement</th>
                        <th class="text-center text-white shadow">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @If($htng == 0)
                    <tr>
                    </tr>
                    @else
                    @foreach($karyawan as $k)
                    <tr>
                        <td><a href="{{url('profile')}}">{{$k->nama}}</a></td>
                        <td>{{$k->alamat}}</td>
                        <td>{{$k->jabatan}}</td>
                        <td>{{$k->nik}}</td>
                        <td>{{$k->nama_atasan}}</td>
                        <td>{{$k->cabang}}</td>
                        <td>{{$k->departement}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning btn-sm shadow edit-item" data-toggle="modal" value="{{$k->id}}"><i
                                    class="fa fa-pencil fa-lg text-white"></i></a>
                            <a href="/karyawan/del/{{$k->id}}" class="btn btn-danger btn-sm shadow"><i
                                    class="fa fa-times fa-lg text-white"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
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
@include('master.modal.uploud_file_karyawan')
@include('master.modal.edit_karyawan')
<script>
    $(document).ready(function () {
        $(document).on('click', '.edit-item', function () {
            var i = $(this).attr("value");
            $(".edit_karyawan").attr('action', "/edit_karyawan/" + i);
            $(".edit_karyawans").modal();
        });
    });

</script>
@endsection
