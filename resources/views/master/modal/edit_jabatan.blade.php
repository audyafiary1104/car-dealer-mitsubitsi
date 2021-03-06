<div class="modal fade edit_jabatans" id="edit_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary shadow">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="edit_jabatan" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jabatan</label>
                    <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                        <option value="manager">Manager</option>
                        <option value="sales">Sales</option>
                        <option value="supervisor">Spv</option>
                        <option value="admin">Admin</option>
                        <option value="bm">Branch Manager</option>
                        <option value="super_admin">Super Admin</option>
                        <option value="area_manager">Area Manager</option>
                        <option value="gm">General Manager </option>
                        <option value="owner">Owner</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Role</label>
                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                        <option value="nasional">Nasional</option>
                        <option value="regional">Regional</option>
                        <option value="cabang">Cabang</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="admin">Admin</option>
                        <option value="cso_cs">Cso/Cs</option>
                    </select>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary shadow">Save changes</button>
                        <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
