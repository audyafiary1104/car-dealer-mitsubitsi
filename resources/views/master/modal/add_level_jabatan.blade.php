<div class="modal fade" id="add_level_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Level Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('add_level_jabatan')}}" method="post">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Level Jabatan</label>
    <input type="text" name="nama_level_jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Nama Level Jabatan">
  </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>
