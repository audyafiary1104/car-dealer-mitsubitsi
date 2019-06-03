<div class="modal fade" id="modal_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('add_jabatan')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nik</label>
    <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="Nik ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jabatan</label>
    <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
      <option value="manager">manager</option>
      <option value="sales">sales</option>
      <option value="supervisor">spv</option>
      <option value="admin">admin</option>
      <option value="bm">branch Manager</option>
      <option value="super_admin">super admin</option>
      <option value="area_manager">area manager</option>
      <option value="gm">general manager </option>
      <option value="owner">owner</option>
    </select>
  </div>   
  <div class="form-group">     
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" name="role" id="exampleFormControlSelect1">
      <option value="nasional">nasional</option>
      <option value="regional">regional</option>
      <option value="cabang">cabang</option>
      <option value="supervisor">supervisor</option>
      <option value="admin">admin</option>
      <option value="cso_cs">cso/cs</option>
    </select>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>