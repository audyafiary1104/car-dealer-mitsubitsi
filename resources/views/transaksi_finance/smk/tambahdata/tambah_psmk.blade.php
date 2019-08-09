@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4 mb-4">
                    <h2>Tambah <b>SMK</b></h2>
                </div>
            </div>
            <form action="{{url('add_psmk')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Customer</label>
                    @if($cust == null)
                    <select class="form-control" name="nama" id="exampleFormControlSelect1">
                        <option disabled selected>Input Master Customer Terlebih dahulu</option>
                    </select>
                    @else
                    @foreach($cust as $c)
                    <select class="form-control" name="nama" id="exampleFormControlSelect1">
                        <option value="{{$c->id}}|{{$c->nama}}">{{$c->nama}}</option>
                    </select>
                    @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal Pemesanan</label>
                    <input type="date" class="form-control" name="tanggal_pemesan" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Stnk</label>
                    <input type="text" class="form-control" name="nama_stnk" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Merk</label>
                    @if($product == null)
                    <select class="form-control" name="id_sales" id="merk">
                        <option disabled>Input Master Product Terlebih Dahulu</option>
                    </select>
                    @else
                    @foreach($product as $s)
                    <select class="form-control" name="merk" id="merk">
                        <option value="{{$s->id}}|{{$s->nama}}">{{$s->nama}}</option>
                    </select>
                    @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Type</label>
                    <input type="text" disabled class="form-control" name="type" id="type" maxlength="3">
                    <input type="hidden"  class="form-control" name="type_dta" id="type_dta" maxlength="3">
                
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tahun</label>
                    <input type="text" class="form-control" disabled name="tahun" id="tahun"
                        placeholder="Nama">
                        <input type="hidden" class="form-control"  name="tahun" id="tahun_dta"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Warna</label>
                    <input type="text" class="form-control" name="warna" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Sales</label>
                    @if(count($sales) == 0)
                    <select class="form-control" name="id_sales" id="exampleFormControlSelect1">
                        <option selected disabled value="">Input Sales Terlebih dahulu</option>
                    </select>
                    @else
                    @foreach($sales as $s)
                    <select class="form-control" name="id_sales" id="exampleFormControlSelect1">
                        <option value="{{$s->id}}|{{$s->nama}}">{{$s->nama}}</option>
                    </select>
                    @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanda Jadi Rp</label>
                    <input type="number" class="form-control" name="nilai_versekot" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jatuh Tempo</label>
                    <input type="date" class="form-control" name="pembayaran_paling_lambat" id="exampleFormControlInput1"
                        placeholder="Nama">
                </div><div class="form-group">
                    <label for="exampleFormControlInput1">Type Pembayaran</label>
                    <select class="form-control" id="type_pembayaran" name="type_pembayaran">
                        <option value="tunai">Tunai</option>
                        <option value="kredit">Kredit</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Pembayaran</label>
                    <select class="form-control" id="jenis_pembayaran" name="payment">
                        <option value="of_the_road">of the Road</option>
                        <option value="On_the_road">On the road</option>
                    </select>
                </div>
                <div class="form-group" id="bbn">
                    <label for="exampleFormControlInput1">BBN</label>
                    <input type="number" class="form-control" name="bbn" 
                        placeholder="Nama">
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bbn').hide();
        $('#jenis_pembayaran').change(function () {
            if ($('#jenis_pembayaran').val() == 'On_the_road') {
                $('#bbn').show();
            }else if($('#jenis_pembayaran').val() == 'of_the_road'){
                $('#bbn').hide();
            }
        });
        $('#merk').click(function (e) {
            var selectedCCountry =
                $(this).children("option:selected").val();
            var pecah = selectedCCountry.split("|");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/pengajuan_smk/ajax/" + pecah[0],
                type: "POST",
                data: pecah[0],
                success: function (data) {
                    $("#type").val(data.type);
                    $("#type_dta").val(data.type);

                    $("#tahun").val(data.tahun_perakitan);
                    $("#tahun_dta").val(data.tahun_perakitan);

                },
            });
        });
        
    });

</script>
@endsection
