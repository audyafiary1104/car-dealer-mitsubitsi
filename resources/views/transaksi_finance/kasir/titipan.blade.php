@extends('layouts.admin.master')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
						<h2>Titipan</h2>
					</div>
					<div class="col-sm-12">
                        <button type="button" class="btn btn-info add-new" style="margin-left:960px;box-shadow:1px 1px 3px black;"  data-toggle="modal" data-target="#"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

                        <th>No Titipan</th>
                        <th>No Cust</th>
                        <th>Nama</th>
						<th>Alamat</th>
                        <th>Nilai Titip</th>
                        <th>Tanggal Titip</th>

                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($titipan as $titipan)
                        <td>TIP/2019/0001</td>
                        <td>CUS0001</td>
                        <td>{{$titipan->nama_cust }}</td>
						<td>{{$titipan->alamat}}</td>
                        <td>{{$titipan->nilai_titip}}</td>
                        <td>{{$titipan->tanggal_pembuat}}</td>
                        <td>
                        <a href="#" style="margin-left:5%;"  data-target="#"><i class="fa fa-eye fa-lg" style="text-shadow:1px 1px 3px black;color:aqua;" data-toggle="tooltip" title="Lihat Detail"></i></a>
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
<script>
    $(document).ready(function () {
        $(document).on('click','.add-new',function(){
            $('#titipan').modal()
        });
    });
</script>
@include('transaksi_finance.kasir.modal.titipan')
@endsection
