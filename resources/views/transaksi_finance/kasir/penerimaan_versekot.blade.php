@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
						<h2>Penerimaan <b>Versekot</b></h2>
					</div>
                </div>
            </div>
<<<<<<< HEAD
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
=======
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
                        <th>No Transaksi</th>
                        <th>Nama Peminat</th>
						<th>Address</th>
                        <th>Nilai Versekot</th>
<<<<<<< HEAD
                        <th>Actions</th>
=======
                        <th><center>Actions</center></th>
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
                    </tr>
                </thead>
                <tbody>
                    <tr>
<<<<<<< HEAD
					
=======

>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
                        <td>TRK0001</td>
                        <td>Audy Afiary</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>Rp.1.000.000</td>
                        <td>
<<<<<<< HEAD
                        <button type="button" class="btn btn-success">Cetak kwintansi</button>
                        </td>
                    </tr>
                   
=======
                        <a href="#" style="margin-left:40%;" data-toggle="modal" data-target="#"><i class="fa fa-print fa-lg" style="text-shadow:1px 1px 3px black;color:black;"data-toggle="tooltip" title="Print Kwitansi"></i></a>
                        </td>
                    </tr>

>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
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
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 45ec3a5339f49044a2cfc7d6288b405272c56f2c
