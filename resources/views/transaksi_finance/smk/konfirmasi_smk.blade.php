@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
						<h2>Konfirmasi <b>Smk </b>Oleh BM</h2>
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
                        <th><center>Actions</center></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($conf_spv as $bm)
                    <tr>
                        <td>SMK0001</td>
                        <td>{{$bm->nama_cust}}</td>
						<td>{{$bm->alamat}}</td>
                        <td>{{$bm->nama_sales}}</td>
                        <td>{{$bm->payment}}</td>
                        <td>{{$bm->nilai_versekot}}</td>
                        <td>
                        <a href="/konfirmasi_smk/{{$bm->id}}"  data-target="#"><i class="fa fa-check-square-o fa-lg" style="text-shadow:1px 1px 3px black;color:springgreen;margin-left:10px" data-toggle="tooltip" title="Setuju"></i></a>
                        <a href="#" data-toggle="modal" data-target="#deleteEmployeeModal"><i class="fa fa-times-circle-o fa-lg" style="text-shadow:1px 1px 3px black;color:#FF0000" data-toggle="tooltip" title="Tidak Setuju"></i></a>
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

	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
