<div class="modal fade" id="titipan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input titipan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('add_titipan')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Cust</label>
                        @if(count($cust)<= 0)
                        <select class="form-control" name="nama" id="exampleFormControlSelect1">
                        <option disabled selected>Input Master Customer Terlebih dahulu</option>
                        </select>@else
                        @foreach($cust as $cust)
                        <select class="form-control" name="nama" id="exampleFormControlSelect1">
                        <option value="{{$cust->id}}|{{$cust->nama}}">{{$cust->nama}}</option>
                        </select>
                        @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nilai Titipan</label>
                        <input type="text" class="form-control" name="nilai_titipan" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Titipan</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Nama">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>