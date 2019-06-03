<div class="modal fade" id="add_custommer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Custommer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('add_custommer')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">NIK</label>
    <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Provinsi</label>
    <input type="text" name="provinsi" class="form-control" id="exampleFormControlInput1" placeholder="Provinsi">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Pos</label>
    <input type="text" name="kode_pos" class="form-control" id="exampleFormControlInput1" placeholder="Kode Pos">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">agama</label>
    <select name="agama" class="form-control" id="exampleFormControlSelect1">
      <option value="Islam">Islam</option>
      <option value="Kristen Protestan">Kristen Protestan</option>
      <option value="Katolik">Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Buddha">Buddha</option>
      <option value="Kong Hu Cu">Kong Hu Cu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status Perkawinan</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="true">Menikah</option>
      <option value="false">Belum Menikah</option>
    </select>
  </div>
      <div class="form-group">
    <label for="exampleFormControlInput1">Pekerjaan</label>
    <input name="pekerjaan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Industri</label>
    <input name="industri" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
  </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>