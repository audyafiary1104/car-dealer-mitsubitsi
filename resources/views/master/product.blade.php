@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-5 mb-2">
                    <h2>Master <b>Product</b></h2>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="search-box w-50">
                        <i class="material-icons">&#xE8B6;</i>
                        <input type="text" class="form-control shadow" placeholder="Search&hellip;">
                    </div>
                    <a href="{{route('tambahproduct')}}" class="btn btn-info ml-auto shadow"><i class="fa fa-plus fa-lg"></i> <span>Add Product</span></a>
                    <a href="#" class="btn btn-info ml-1 shadow"><i class="fa fa-folder fa-lg"></i> <span>Import Excel</span></a>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Kode Barang</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Suplier</th>
                        <th class="text-white shadow">Type</th>
                        <th class="text-white shadow">Tahun Perakitan</th>
                        <th class="text-white shadow">Minimum Stock</th>
                        <th class="text-white shadow">Aktif</th>
                        <th class="text-white shadow">Price List</th>
                        <th class="text-white text-center shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $product)
                    <tr>
                        <td>BRG0001</td>
                        <td>{{$product -> nama}}</td>
                        <td>{{$product -> suplier}}</td>
                        <td>{{$product -> type}}</td>
                        <td>{{$product -> tahun_perakitan}}</td>
                        <td>{{$product->stock}}</td>
                        @if($product-> non_aktif == 0)
                        <td>Aktif</td>
                        @else
                        <td>Non Aktif</td>
                        @endif
                        <td>{{$product -> price_list}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning btn-sm shadow edit-item" value="{{$product->id}}"><i class="fa fa-pencil text-white"></i></a>
                            <a href="{{route('del_product',['id'=>$product->id])}}" class="btn btn-sm btn-danger shadow"><i class="fa fa-times text-white"></i></a>
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
@include('master.modal.edit_product')
<script>
    $(document).ready(function () {
        $(document).on('click', '.edit-item', function () {
            var i = $(this).attr("value");
            $(".edit_producct").attr('action', "/edit_product/" + i);
            $(".edit_prod").modal();
        });
    });

</script>
@endsection
