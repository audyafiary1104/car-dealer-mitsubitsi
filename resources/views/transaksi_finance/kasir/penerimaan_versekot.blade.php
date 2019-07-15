    @extends('layouts.admin.master')
    @section('content')
    <div class="container-fluid">
            <div class="table-wrapper shadow">
                <div class="table-title">
                    <div class="col-sm-5 mb-2">
                        <h2>Penerimaan <b>Versekot</b></h2>
                    </div>
                </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">No Transaksi</th>
                        <th class="text-white shadow">Nama Peminat</th>
                        <th class="text-white shadow">Address</th>
                        <th class="text-white shadow">Nilai Versekot</th>
                        <th class="text-white shadow">Status Pembayaran</th>
                        <th class="text-white shadow text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $penerimaaan)
                    <tr>
                        <td>TRK0001</td>
                        <td>{{$penerimaaan->nama_cust}}</td>
                        <td>{{$penerimaaan->alamat}}</td>
                        <td >{{$penerimaaan->nilai_versekot}}</td>
                        <td>{{$penerimaaan->status_pembayaran}}</td>
                        <td class="text-center">
                            @if($penerimaaan->status_pembayaran == 'Belum Terbayar')
                            <a  class="btn btn-success btn-sm edit-item shadow text-white"
                                data-id_cust="{{$penerimaaan->id_cust}}" data-target="{{$penerimaaan->id}}"
                                value="{{$penerimaaan->nilai_versekot}}" data-toggle="modal"><i class="fa fa-money fa-lg text-white pr-1"></i>Bayar</a>
                            @else
                            <a href="#" class="btn btn-dark btn-sm  shadow" data-toggle="modal" data-target="#"><i
                                    class="fa fa-print fa-lg text-white shadow" data-toggle="tooltip"></i></a>
                            @endif
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
    <script>
        $(document).ready(function () {
            $(document).on('click', '.edit-item', function () {
                var i = $(this).attr("value");
                var a = $(this).data("target");
                var b = $(this).data("id_cust");
                $(".nilai_versekot").val(i);
                $(".id_cust").val(b);
                $(".bayar").attr('action', "/penerimaan_versekot/" + a + "/bayar");
                $(".id").val(a);
                $("#bayar").modal();
            });
        });

    </script>

    @include('transaksi_finance.kasir.modal.bayar')
    @endsection
