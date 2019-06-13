@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Pengajuan <b>Smk</b></h2>
					</div>
					<div class="col-sm-12">
                        <button type="button" class="btn btn-info add-new" style="margin-left:960px;box-shadow:1px 1px 3px black;"  data-toggle="modal" data-target="#tambah_smk"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

                        <th>No Smk</th>
                        <th>Nama Peminat</th>
						<th>Address</th>
                        <th>Nama Sales</th>
                        <th>Pembayaran</th>
                        <th>Harga</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>SMK0001</td>
                        <td>Audy Afiary</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>Samuel</td>
                        <td>Credit</td>
                        <td>RP.1.000.000.00</td>
                        <td>
                            <a href="#editEmployeeModal" style="margin-left:28%;" class="edit" data-toggle="modal"><i class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#deleteEmployeeModal" style="margin-left:2%;" class="delete" data-toggle="modal"><i class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
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
    @include('transaksi_finance.smk.modal.tambah_psmk')
@endsection
