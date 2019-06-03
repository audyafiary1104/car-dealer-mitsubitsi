<div class="modal fade" id="tambah_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('tambah_karyawan')}}" method="POST">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nik</label>
    <input type="text" class="form-control" name="nik" id="exampleFormControlInput1" placeholder="nik ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">alamat</label>
    <input type="text" class="form-control" name="alamat"id="exampleFormControlInput1" placeholder="email ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cabang</label>
    <input type="text" class="form-control" name="cabang" id="exampleFormControlInput1" placeholder="cabang ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">jabatan</label>
    <input type="text" class="form-control" name="jabatan" id="exampleFormControlInput1" placeholder="cabang ">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Departement</label>
    <input type="text" class="form-control" name="dpt" id="exampleFormControlInput1" placeholder="departement ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Atasan</label>
    <input type="text" class="form-control"name="nama_atasan" id="exampleFormControlInput1" placeholder="Nama Atasan ">
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>