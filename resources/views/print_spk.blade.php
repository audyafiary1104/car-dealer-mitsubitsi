<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> SPK </title>
</head>

<body>

    <!-- header -->
    <div class="container center">
        <div class="row">
            <div class="col">
                <img src="images/header.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <label for="no_faktur" class="col-xs-3 col-form-label mr-2">No</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"> {{$spk->kode_spk}} </span>
                    </div>
                    <input type="text" class="form-control" placeholder="79/90" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <h2 class="ml-5"> SURAT PESANAN KENDARAAN </h2>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="tanggal_faktur" class="col-xs-3 col-form-label mr-2">Tanggal</label>
                    <div class="col-xs-9">
                        <input type="date" class="form-control" id="tanggal_faktur" name="tanggal_faktur" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="form mt-2">
                    <h6>DATA PEMESANAN</h6>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->nama_cust}}"id="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="KTP" class="col-sm-2 col-form-label">KTP</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="KTP" value="{{$spk->nik}}" placeholder="KTP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->alamat}}"id="Alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="No Hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="tel" class="form-control" value="{{$spk->phone_number}}" value=""id="No Hp" placeholder="No Hp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control"  value="{{$spk->email}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NPWP" class="col-sm-2 col-form-label">NPWP</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control"  value="{{$spk->npwp}}"  id="NPWP" placeholder="NPWP">
                        </div>
                    </div>
                    <h6>DATA YANG TERTERA DI STNK & BPKB</h6>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->nama_stnk}}" id="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->alamat}}"  id="Alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="KTP" class="col-sm-2 col-form-label">KTP</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{$spk->nik}}"  id="KTP" placeholder="KTP">
                        </div>
                    </div>
                    <h6>DATA KENDARAAN</h6>
                    <div class="form-group row">
                        <label for="Tipe Kendaraan" class="col-sm-2 col-form-label">Tipe Kendaraan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  value="{{$spk->type}}" id="Tipe Kendaraan" placeholder="Tipe Kendaraan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tahun Perakitan" class="col-sm-2 col-form-label">Tahun Perakitan</label>
                        <div class="col-sm-10">
                        <input type="" class="form-control"  value="{{$spk->tahun}}" id="Tahun Perakitan" placeholder="Tahun Perakitan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Warna" class="col-sm-2 col-form-label">Warna</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->warna}}" id="Warna" placeholder="Warna">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Perlengkapan Tambah" class="col-sm-2 col-form-label">Perlengkapan Tambah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="Perlengkapan Tambah" placeholder="Perlengkapan Tambah">
                        </div>
                    </div>
                    <h6>ALAMAT</h6>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->alamat}}" id="Alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <h6>HARGA & CARA PEMBAYARAN</h6>
                    <p>Harga</p>
                    <div class="col">
                        <div class="form-group row">
                            <label for="Off the Road" class="col-sm-2 col-form-label">Off the Road</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="Off the Road" placeholder="Off the Road">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="BBN*" class="col-sm-2 col-form-label">BBN*</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="BBN*" placeholder="BBN*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="On the Road" class="col-sm-2 col-form-label">On the Road</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="On the Road" placeholder="On the Road">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="On the Road" class="col-sm-2 col-form-label"> Cara Pembayaran </label>
                            <div class="col-sm-9 ml-2">
                            @if($spk->payment == "kredit")
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Kredit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tunai</label>
                                    </div>
                            @else
                            <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >
                                        <label class="form-check-label" for="inlineRadio1">Kredit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
                                        <label class="form-check-label" for="inlineRadio2">Tunai</label>
                                    </div>     
                                @endif      
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="Juamlah Uang Muka" class="col-sm-2 col-form-label">Juamlah Uang Muka</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$spk->nilai_versekot}}" id="Juamlah Uang Muka" placeholder="Juamlah Uang Muka">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jumlah Dibayar" class="col-sm-2 col-form-label">Jumlah Dibayar</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="Jumlah Dibayar" value="{{$spk->dibayar}}"  placeholder="Jumlah Dibayar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Sisa" class="col-sm-2 col-form-label">Sisa*</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="Sisa" value="{{$spk->sisa}}"  placeholder="Sisa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Pembayaran Paling Lambat" class="col-sm-2 col-form-label"> <b style="font-size: 12px !important;"> Pembayaran Paling Lambat</b></label>
                        <div class="col-sm-10">
                        <input type="" value="{{$spk->pembayaran_paling_lambat}}" class="form-control" id="Pembayaran Paling Lambat" placeholder="Pembayaran Paling Lambat">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>