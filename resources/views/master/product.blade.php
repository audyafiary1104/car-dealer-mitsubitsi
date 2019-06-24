@extends('layouts.admin.master')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4" style="margin-bottom:-10px;">
                    <h2>Master <b>Product</b></h2>
                </div>
                <div class="col-sm-12" style="margin-left:790px">
                    <a href="#addEmployeeModal" class="btn btn-info"
                        style="box-shadow:1px 1px 3px black;margin-bottom:-50px;" data-toggle="modal"><i
                            class="fa fa-plus fa-lg"></i> <span>Add Product</span></a>
                    <a href="#" class="btn btn-info"
                        style="box-shadow:1px 1px 3px black;margin-bottom:-50px;margin-left:10px;"><i
                            class="fa fa-folder fa-lg"></i> <span>Import Excel</span></a>
                </div>
                <div class="search-box col-sm-8">
                    <i class="material-icons" style="margin-left:15px;">&#xE8B6;</i>
                    <input type="text" class="form-control" placeholder="Search&hellip;">
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="bg-primary">
                    <th class="text-white">Kode Barang</th>
                    <th class="text-white">Nama</th>
                    <th class="text-white">Suplier</th>
                    <th class="text-white">Type</th>
                    <th class="text-white">Minimum Stock</th>
                    <th class="text-white">Non aktif</th>
                    <th class="text-white text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $product)
                <tr>
                    <td>BRG0001</td>
                    <td>{{$product -> nama}}</td>
                    <td>{{$product -> suplier}}</td>
                    <td>{{$product -> type}}</td>
                    <td>{{$product->stock}}</td>
					@if($product-> non_aktif == 0)
                    <td>Aktif</td>
					@else
                    <td>Non Aktif</td>
					@endif
                    <td>
                        <a href="#editEmployeeModal" style="margin-left:28%;" class="edit" data-toggle="modal"><i
                                class="fa fa-pencil fa-lg" style="text-shadow:1px 1px 3px black" data-toggle="tooltip"
                                title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                class="fa fa-times-circle fa-lg" style="text-shadow:1px 1px 3px black"></i></a>
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
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/product/add" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Suplier</label>
                        <input type="text" name="suplier" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" required>
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
