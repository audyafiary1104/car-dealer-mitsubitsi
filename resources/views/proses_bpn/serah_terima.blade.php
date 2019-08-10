@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="table-wrapper shadow">
        <div class="table-title">
            <div class="col-sm-5 mb-2">
                <h2>Serah <b>Terima Biro jasa</b></h2>
            </div>
            <div class="d-flex justify-content-between">
                <div class="search-box w-50">
                </div>
                <button style="margin-bottom: 10px" class="btn btn-primary delete_all"
                    data-url="{{ url('tambah_serah_terima/print') }}">Print Data</button>
                <a href="{{url('tambah_serah_terima')}}" class="btn btn-info add-new shadow"><i class="fa fa-plus"></i>
                    Add Data</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th width="50px"><input type="checkbox" id="master" /> Select All</th>
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
                    @foreach($get as $spk)

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id="{{$spk->id}}"></td>
                        <td>{{$spk->kode_spk}}</td>
                        <td>{{$spk->no_cust}}</td>
                        <td>{{$spk->nama}}</td>
                        <td>{{$spk->alamat}}</td>
                        <td>{{$spk->type_kendaraan}}</td>
                        <td>{{$spk->warna}}</td>
                        <td class="text-center">
                            <a href="" data-target="#custommer_edit" class="btn btn-warning btn-sm shadow"
                                data-toggle="modal"><i class="fa fa-pencil fa-lg text-white"></i></a>
                            <a href="" class="btn btn-danger btn-sm shadow"><i
                                    class="fa fa-times fa-lg text-white"></i></a>
                        </td>
                    </tr>
                    @endforeach

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


<script type="text/javascript">
    $(document).ready(function () {
        $('#master').on('click', function (e) {
            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            } else {
                $(".sub_chk").prop('checked', false);
            }
        });

        $('.delete_all').on('click', function (e) {
            var allVals = [];
            $(".sub_chk:checked").each(function () {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                swal.fire({
                    title: 'Custom animation with Animate.css',
                    animation: false,
                    customClass: {
                        popup: 'animated tada'
                    }
                })
            } else {
                swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Ingin Print Semua Yang Dipilih? ",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes Print it',
                    showLoaderOnConfirm: true,
                    preConfirm: function (email) {
                        return new Promise(function (resolve, reject) {
                            setTimeout(function () {
                                if (email === 'taken@example.com') {
                                    reject('This email is already taken.')
                                } else {
                                    resolve()
                                }
                            }, 2000)
                        })
                    },
                    allowOutsideClick: false

                }).then((result) => {
                    
                    if (result.value) {
                        var join_selected_values = allVals.join(",");

                        $.ajax({
                            url: $(this).data('url'),
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            data: 'ids=' + join_selected_values,
                            xhrFields: {
                                responseType: 'blob'
                            },

                            success: function (response, status, xhr) {

                                var filename = "";
                                var disposition = xhr.getResponseHeader(
                                    'Content-Disposition');

                                if (disposition) {
                                    var filenameRegex =
                                        /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                    var matches = filenameRegex.exec(disposition);
                                    if (matches !== null && matches[1]) filename =
                                        matches[1]
                                        .replace(/['"]/g, '');
                                }
                                var linkelem = document.createElement('a');
                                try {
                                    var blob = new Blob([response], {
                                        type: 'application/octet-stream'
                                    });

                                    if (typeof window.navigator.msSaveBlob !==
                                        'undefined') {
                                        //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                        window.navigator.msSaveBlob(blob, filename);
                                    } else {
                                        var URL = window.URL || window.webkitURL;
                                        var downloadUrl = URL.createObjectURL(blob);

                                        if (filename) {
                                            // use HTML5 a[download] attribute to specify filename
                                            var a = document.createElement("a");

                                            // safari doesn't support this yet
                                            if (typeof a.download === 'undefined') {
                                                window.location = downloadUrl;
                                            } else {
                                                a.href = downloadUrl;
                                                a.download = filename;
                                                document.body.appendChild(a);
                                                a.target = "_blank";
                                                a.click();
                                            }
                                        } else {
                                            window.location = downloadUrl;
                                        }
                                    }

                                } catch (ex) {
                                    console.log(ex);
                                }

                                Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Succes Download',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }

                        });


                    }
                })
            }
        });
    });

</script>
@endsection
