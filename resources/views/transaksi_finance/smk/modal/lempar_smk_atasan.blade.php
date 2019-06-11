<div class="modal fade" id="lempar_smk_ats" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lempar Smk Ke atasan Lain</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('add_psmk')}}" method="post">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Atasan</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama">
  </div>      
       <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">Lempar</button>
      </div>
      </form>
    </div>
  </div>
</div>
