<div class="modal fade" id="modal_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('add_jabatan')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="show_user" type="text" class="form-control nama_karyawan" id="nama_karyawan" placeholder="Nama ">
    <input type="hidden" name="user_id" value="" />

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
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
        <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script>
   $(document).ready(function() {
    src = "{{ route('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});
</script>
