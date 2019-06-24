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
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>

                    <th>No Transaksi</th>
                    <th>Nama Peminat</th>
                    <th>Address</th>
                    <th>Nilai Versekot</th>
                    <th>Status Pembayaran</th>
                    <th>
                        <center>Actions</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $penerimaaan)
                <tr>
                    <td>TRK0001</td>
                    <td>{{$penerimaaan->nama_cust}}</td>
                    <td>{{$penerimaaan->alamat}}</td>
                    <td>{{$penerimaaan->nilai_versekot}}</td>
                    <td>{{$penerimaaan->status_pembayaran}}</td>
                    <td>
                    @if($penerimaaan->status_pembayaran == 'Belum Terbayar')
                        <button type="button" class="btn btn-success edit-item" data-id_cust="{{$penerimaaan->id_cust}}" data-target="{{$penerimaaan->id}}" value="{{$penerimaaan->nilai_versekot}}"
                            data-toggle="modal">Bayar</button>
                                @else
                                <a href="#" style="margin-left:40%;" data-toggle="modal" data-target="#"><i
                                class="fa fa-print fa-lg" style="text-shadow:1px 1px 3px black;color:black;"
                                data-toggle="tooltip" title="Print Kwitansi"></i></a>
                                @endif
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
        $(document).on('click','.edit-item',function () {
                        var i = $(this).val();   
                        var a = $(this).data("target");
                        var b = $(this).data("id_cust");
                        $(".nilai_versekot").val(i);
                        $(".id_cust").val(b);
                        $(".bayar").attr('action', "/penerimaan_versekot/"+a+"/bayar");
                        $(".id").val(a);
                        $("#bayar").modal();
                   });
       });
</script>

@include('transaksi_finance.kasir.modal.bayar')
@endsection