@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
            <div class="table-wrapper shadow">
                <div class="table-title">
                    <div class="col-sm-5 mb-2"><h2>Serah  <b>Terima Biro jasa</b></h2></div>
                    <div class="d-flex justify-content-between">
                        <div class="search-box w-50">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control shadow" placeholder="Search&hellip;">
                        </div>
                        <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
                        <a href="{{url('tambah_serah_terima')}}" class="btn btn-info add-new shadow"><i class="fa fa-plus"></i> Add Data</a>
                    </div>
                </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                       <th width="50px"><input type="checkbox" id="master"/> Select All</th>
                        <th class="text-white shadow">No Spk</th>
                        <th class="text-white shadow">No Cust</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Alamat</th>
                        <th class="text-white shadow">Type Kendaraan</th>
                        <th class="text-white shadow">Warna</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>BY0001</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td>Kas Besar</td>
                        <td class="text-center">
                        <a href="" data-target="#custommer_edit" class="btn btn-warning btn-sm shadow" data-toggle="modal"><i class="fa fa-pencil fa-lg text-white"></i></a>
                        <a href="" class="btn btn-danger btn-sm shadow"><i class="fa fa-times fa-lg text-white"></i></a>
						</td>
                    </tr>
                </tbody>
            </table>
        </div>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true); 
         } else {  
            $(".sub_chk").prop('checked',false); 
         }  
        });

        $('.delete_all').on('click', function(e) {
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  

            if(allVals.length <=0)  
            {  
                alert("Please select row."); 
            }  else {  
                var check = confirm("Are you sure you want to Print this row?"); 
                if(check == true){  
                    var join_selected_values = allVals.join(","); 

                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                           
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });

                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                } 
            }  
        });
    });
</script>
@endsection
