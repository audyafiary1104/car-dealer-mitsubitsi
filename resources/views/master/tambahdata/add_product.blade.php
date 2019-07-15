@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Product</b></h2>
                </div>
            </div>
            <form method="POST" action="{{url('product_add')}}">
                @csrf
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
                    <label>Tahun Perakitan</label>
                    <input type="date" class="form-control" name="tahun_perakitan" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Price List</label>
                    <input type="number" name="price_list" class="form-control" required>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
             </form>
        </div>
    </div>
</div>
@endsection
