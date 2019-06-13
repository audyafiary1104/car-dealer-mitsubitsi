@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                <div class="col-sm-8"><h2>Master <b>Karyawan</b></h2></div>
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-info add-new" style="margin-left:780px;box-shadow:1px 1px 3px black;" data-toggle="modal" data-target="#tambah_karyawan"><i class="fa fa-plus"></i> Add Karyawan</button>
                        <button type="button" class="btn btn-info add-new" style="margin-left:10px;box-shadow:1px 1px 3px black" data-toggle="modal" data-target="#uploud_excel"><i class="fa fa-folder"></i> Import Excel</button>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white">Name</th>
						<th class="text-white">Alamat</th>
						<th class="text-white">Jabatan</th>
                        <th class="text-white">Nik</th>
						<th class="text-white">Nama Atasan</th>
						<th class="text-white">Cabang</th>
                        <th class="text-white">Departement</th>
						<th class="text-center text-white">Action</th>
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
						<td>
                            <a href="#" style="margin-left:28%;" class="edit" title="Edit"  data-toggle="modal" data-target="#edit_karyawan"><i class="fa fa-pencil fa-lg" data-toggle="tooltip" title="Edit" style="text-shadow:1px 1px 3px black"></i></a>
                            <a href="/karyawan/del/{{$k->id}}" class="delete" title="Delete" ><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
						</td>
                    </tr>
				@endforeach
                @endif
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
    @include('master.modal.uploud_file_karyawan')
    @include('master.modal.edit_karyawan')
    @include('master.modal.tambah_karyawan')

    @endsection
