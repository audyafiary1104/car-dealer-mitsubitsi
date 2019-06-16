<div class="modal fade" id="tambah_smk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah SMk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
    <input type="date" class="form-control" name="tanggal_pemesan" id="exampleFormControlInput1" placeholder="Nama">
  </div>   
   
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Stnk</label>
    <input type="text" class="form-control" name="nama_stnk" id="exampleFormControlInput1" placeholder="Nama">
  </div>   
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" placeholder="Nama">
  </div>   
  <div class="form-group">
    <label for="exampleFormControlInput1">Merk</label>
    <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="Nama">
  </div>      
  <div class="form-group">
    <label for="exampleFormControlInput1">Type</label>
    <input type="text" class="form-control" name="type" id="exampleFormControlInput1" placeholder="Nama">
  </div>   
  <div class="form-group">
    <label for="exampleFormControlInput1">Tahun</label>
    <input type="text" class="form-control" name="tahun" id="exampleFormControlInput1" placeholder="Nama">
  </div>     
  <div class="form-group">
    <label for="exampleFormControlInput1">warna</label>
    <input type="text" class="form-control" name="warna" id="exampleFormControlInput1" placeholder="Nama">
  </div>   
  <div class="form-group">     
    <label for="exampleFormControlSelect1">Nama Sales</label>
    @if($sales == null)
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
    <input type="number" class="form-control" name="nilai_versekot" id="exampleFormControlInput1" placeholder="Nama">
  </div>    
  <div class="form-group">     
    <label for="exampleFormControlSelect1">Type Pembayaran</label>
    <select class="form-control" id="exampleFormControlSelect1" name="payment">
      <option value="tunai">Tunai</option>
      <option value="kredit">Kredit</option>
    </select>
  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>
