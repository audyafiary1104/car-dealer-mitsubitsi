@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-5 mb-2">
                    <h2>Konfirmasi <b>Smk </b>Oleh BM</h2>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Smk</th>
                        <th class="text-white shadow">Nama Peminat</th>
                        <th class="text-white shadow">Address</th>
                        <th class="text-white shadow">Nama Sales</th>
                        <th class="text-white shadow">Pembayaran</th>
                        <th class="text-white shadow">Harga</th>
                        <th class="text-center text-white shadow">Actions</th>
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
                        <td class="text-center">
                            <a href="/konfirmasi_smk/{{$bm->id}}" data-target="#" class="btn btn-success btn-sm shadow"><i class="fa fa-check fa-lg text-white"></i></a>
                            <a href="#" data-toggle="modal" class="btn btn-danger btn-sm shadow" data-target="#deleteEmployeeModal"><i class="fa fa-times fa-lg text-white"></i></a>
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

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary shadow">
                    <h4 class="modal-title text-white">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus Catatan ini?</p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-primary shadow" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger shadow" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
