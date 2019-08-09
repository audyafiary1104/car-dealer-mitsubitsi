@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>Serah Terima</b></h2>
                </div>
            </div>
            <form action="{{url('add_cabang')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Spk</label>
                    <select class="form-control" id="nomor_spk" name="no_spk">
                        @if($spk)
                        @foreach($spk as $spk)
                        <option value="{{$spk->id}}">{{$spk->kode_spk}}</option>
                        @endforeach
                        @else
                        <option value="of_the_road">Input Spk Terlebih Dahulu</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Cust</label>
                    <input type="text" name="nama_cabang" class="form-control kode_custommer" id="kode_custommer"
                    disabled  placeholder="Nama">
                    <input type="hidden" name="no_cust" class="form-control kode_custommer" id="exampleFormControlInput1"
                      placeholder="nomor_cust">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" name="nama_cabang" class="form-control nama" id="nama"
                    disabled    placeholder="Nama">
                    <input type="hidden" name="nama" class="form-control nama" id="exampleFormControlInput1"
                    placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" name="nama_cabang" class="form-control Alamat" id="Alamat"
                    disabled placeholder="alamat">
                    <input type="hidden" name="alamat" class="form-control Alamat" id="exampleFormControlInput1"
                     placeholder="alamat">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Type Kendaraan</label>
                    <input type="text" name="nama_cabang" class="form-control type" id="type"
                        disabled placeholder="Type Kendaraan">
                    <input type="hidden" name="type_kendaraan" class="form-control type" id="exampleFormControlInput1"
                     placeholder="Warna">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Warna</label>
                    <input type="text" name="nama_cabang" class="form-control Warna" id="Warna"
                    disabled placeholder="Warna">
                    <input type="hidden" name="warna" class="form-control Warna" id="Warna"
                     placeholder="Warna">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
     $('#nomor_spk').click(function (e) {
            var selectedCCountry =
               $(this).children("option:selected").val();
                e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/tambah_serah_terima/ajax/"+selectedCCountry,
                type: "POST",
                success: function (data) {
                    $("#Alamat").val(data.alamat);
                    $(".kode_custommer").val(data.kode_custommer);
                    $(".nama").val(data.nama);
                    $(".type").val(data.type_kendaraan);
                    $(".Warna").val(data.warna);

                },
            });
        });
        </script>
@endsection
