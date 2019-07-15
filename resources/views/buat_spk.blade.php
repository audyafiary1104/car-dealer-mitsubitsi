@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-5 mb-2">
                    <h2>Buat <b>Spk</b></h2>
                </div>
            </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg-primary">
                    <th class="text-white shadow">No Transaksi</th>
                    <th class="text-white shadow">No Smk</th>
                    <th class="text-white shadow">Nama</th>
                    <th class="text-white shadow">Address</th>
                    <th class="text-white shadow">Ktp</th>
                    <th class="text-white shadow">Type Kendaraan</th>
                    <th class="text-white shadow">Pembayaran</th>
                    <th class="text-center text-white shadow">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($spk as $spk)
                <tr>
                    <td>BOM/20019/0001</td>
                    <td>SMK0001</td>
                    <td>{{$spk->nama_cust}}</td>
                    <td>{{$spk->alamat}}</td>
                    <td>{{$spk->ktp}}</td>
                    <td>{{$spk->type_kendaraan}}</td>
                    <td>{{$spk->pembayaran}}</td>
                    <td clas="text-center">
                        <a href="/print_spk/{{$spk->id}}" class="btn btn-dark btn-sm shadow" target="_blank"><i class="fa fa-print text-white fa-lg"></i></a>
                        <a href="/print_spk/{{$spk->id}}" class="btn btn-info btn-sm shadow" data-target="#"><i class="fa fa-eye text-white fa-lg"></i></a>
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
