@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4">
                    <h2>Titipan</h2>
                </div>
                <div class="d-flex flex-row-reverse">
                    <a href="{{route('addpage')}}" class="btn btn-info add-new position-sticky shadow buttom-responsive"><i
                            class="fa fa-plus"></i>
                        Add Titipan</a>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Titipan</th>
                        <th class="text-white shadow">No Cust</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Alamat</th>
                        <th class="text-white shadow">Nilai Titip</th>
                        <th class="text-white shadow">Tanggal Titip</th>
                        <th class="text-center text-white shadow">Actions</th>
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
                        <td class="text-center">
                        <a href="#" class="btn btn-info btn-sm shadow" data-target="#"><i
                                    class="fa fa-eye text-white fa-lg"></i></a>
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
@endsection
