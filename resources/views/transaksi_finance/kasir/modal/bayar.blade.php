<div class="modal fade bayar" id="bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary shadow">
                <h5 class="modal-title text-white" id="exampleModalLabel">Bayar Versekot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="bayar" method="post">
                    @csrf
                    <input type="hidden" name="id" class="id">
                    <input type="hidden" name="id_cust" class="id_cust">

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
                        <label for="exampleFormControlInput1">Nilai Versekot</label>
                        <input type="number" class="form-control nilai_versekot" name="nilai_versekot" required>
                        <label for="exampleFormControlInput1">Dibayar</label>
                        <input class="form-control" id="exampleFormControlInput1" name="dibayar_tunai" type="number" />

                    </div>


                    <div class="form-group" id="giro">
                        <label for="exampleFormControlInput1">Nama Bank</label>
                        <select name="nama_bank" class="form-control">
                            <option value="bca">bca</option>
                            <option value="bri">bri</option>
                            <option value="syariah">syariah</option>
                        </select>
                        <label for="exampleFormControlInput1">Nomer Giro</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nomer_giro" type="text" />
                        <label for="exampleFormControlInput1">Tanggal Jatuh Tempo</label>
                        <input class="form-control" id="exampleFormControlInput1" name="tanggal_jatuh_tempo"
                            type="date" />
                            <label for="exampleFormControlInput1">Dibayar</label>
                        <input class="form-control" id="exampleFormControlInput1" name="dibayar_giro" type="text" />

                        <label for="exampleFormControlInput1">Nilai Versekot</label>
                        <input class="form-control nilai_versekot" name="nilai_versekot" type="text" required />
                    </div>


                    <div class="form-group" id="titipan">
                        <label for="exampleFormControlInput1">Nilai Versekot</label>
                        <input class="form-control nilai_versekot" name="nilai_versekot" type="text" disabled />
                        <label for="exampleFormControlInput1">Nama Cust</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nama_cust" type="text" />
                        <label for="exampleFormControlInput1">Nilai Titipan</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nilai_titipan" type="text" />

                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary shadow">Save Change</button>
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
            } else if ($('#jenis_pembayaran').val() == 'titipan') {
                $('#tunai').hide();
                $('#giro').hide();
                $('#titipan').show();
            }
        });
    });

</script>
