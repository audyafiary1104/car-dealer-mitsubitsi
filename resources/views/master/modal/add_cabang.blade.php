<div class="modal fade" id="add_cabang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cabang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('add_cabang')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Cabang</label>
    <input type="text" name="kode_cabang" class="form-control" id="exampleFormControlInput1" placeholder="kode_cabang">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Cabang</label>
    <input type="text" name="nama_cabang" class="form-control" id="exampleFormControlInput1" placeholder="nama_cabang">
  </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>