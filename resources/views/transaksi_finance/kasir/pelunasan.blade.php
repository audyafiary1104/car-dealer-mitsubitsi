@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4">
                    <h2> Pelunasan<b></b></h2>
                </div>
                <div class="d-flex flex-row-reverse">
                    <a href="#"
                        class="btn btn-info add-new position-sticky shadow buttom-responsive"><i class="fa fa-plus"></i>
                        Add Pelunasan</a>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Transaksi</th>
                        <th class="text-white shadow">No Smk</th>
                        <th class="text-white shadow">Address</th>
                        <th class="text-white shadow">Nilai</th>
                        <th class="text-white shadow">Pembayaran</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>BOM/20019/0001</td>
                        <td>SMK0001</td>
                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>Rp.1.000.000</td>
                        <td>GIRO</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-dark btn-sm shadow" target="_blank"><i
                                    class="fa fa-print text-white fa-lg"></i></a>
                            <a href="#" class="btn btn-info btn-sm shadow" data-target="#"><i
                                    class="fa fa-eye text-white fa-lg"></i></a>
                        </td>
                    </tr>
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
@endsection
