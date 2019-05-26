@extends('layouts.admin.master')
@section('content') 
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<h2>Master <b>Karyawan</b></h2>
					</div>
					<div class="col-sm-7">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_karyawan"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploud_excel"><i class="material-icons">&#xE24D;</i> <span>Import Via Excel</span></button>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>						
						<th>Alamat</th>
						<th>jabatan</th>
                        <th>Nik</th>
						<th>nama atasan</th>
						<th>Cabang</th>
                        <th>Departement</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
        @If($htng == 0)
                    <tr>
                       
                    </tr>
				@else
                @foreach($karyawan as $k)
                    <tr>
                        <td><a href="#">{{$k->nama}}</a></td>
                        <td>{{$k->alamat}}</td>  
                        <td>{{$k->jabatan}}</td>                      
						<td>{{$k->nik}}</td>
						<td>{{$k->nama_atasan}}</td>
                        <td>{{$k->cabang}}</td>
						<td>{{$k->departement}}</td>
						<td>
							<button type="button" class="setting" data-toggle="modal" data-toggle="tooltip" data-target="#edit_karyawan" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></button>
							<a href="/karyawan/del/{{$k->id}}" class="delete" title="Delete" ><i class="material-icons">&#xE5C9;</i></a>
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