@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
						<h2>Pengajuan <b>Smk</b></h2>
					</div>
					<div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"  data-toggle="modal" data-target="#tambah_smk"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
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
                    <tr>
			@foreach($smk as $smk)
                        <td>SMK0001</td>
                        <td>{{$smk->nama_cust}}</td>
						<td>{{$smk->alamat}}</td>
                        <td>{{$smk->nama_sales}}</td>
                        <td>{{$smk->payment}}</td>
                        <td>{{$smk->nilai_versekot}}</td>

                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="pengajuan_smk/del/{{$smk->id}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                   @endforeach
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
        @include('transaksi_finance.smk.modal.tambah_psmk')
@endsection