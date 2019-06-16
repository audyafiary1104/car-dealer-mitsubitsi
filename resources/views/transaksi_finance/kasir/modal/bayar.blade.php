<div class="modal fade" id="bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bayar Versekot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('add_cabang')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Pembayaran</label>
                        <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran">
                            <option value=""> </option>
                            <option value="tunai">Tunai</option>
                            <option value="giro">Giro</option>
                            <option value="titipan">Titipan</option>
                        </select>
                    </div>
                    <div class="form-group" id="tunai">
                        <label for="exampleFormControlInput1">Nilai Persekot</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                        <label for="exampleFormControlInput1">Dibayar</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                    </div>
                    <div class="form-group" id="giro">
                        <label for="exampleFormControlInput1">Nama Bank</label>
                        <select class="form-control">
                            <option value="item1">bca</option>
                            <option value="item2">bri</option>
                            <option value="item3">syariah</option>
                        </select>
                        <label for="exampleFormControlInput1">Nomer Giro</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                    </div>
                    <div class="form-group" id="titipan">
                        <label for="exampleFormControlInput1">Nomer Titipan</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                        <label for="exampleFormControlInput1">Nama Cust</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                        <label for="exampleFormControlInput1">Nilai Titipan</label>
                        <input class="form-control" id="exampleFormControlInput1" name="otherField" type="text" />
                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">ADD</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#titipan').hide();
        $('#tunai').hide();
        $('#giro').hide();
        $('#jenis_pembayaran').change(function () {
            if ($('#jenis_pembayaran').val() == 'tunai') {
                $('#tunai').show();
                $('#titipan').hide();
                $('#giro').hide();
            } else if ($('#jenis_pembayaran').val() == 'giro') {
                $('#giro').show();
                $('#titipan').hide();
                $('#tunai').hide();                 
            }else if($('#jenis_pembayaran').val() == 'titipan') {
                $('#tunai').hide();                 
                $('#giro').hide();                 
                $('#titipan').show();
            }

        });
    });
</script>