<div class="modal fade" id="biaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('add_biaya')}}"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Masukan File Excel</label>
                        <input name="file" type="file" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama ">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>