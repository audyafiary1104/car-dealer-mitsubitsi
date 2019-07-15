@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
        <div class="table-wrapper shadow">
            <div class="table-title">
                <div class="col-sm-4">
                    <h2>Master <b>Jabatan</b></h2>
                </div>
                <div class="d-flex flex-row-reverse">
                    <a href="{{route('tambahjabatan')}}"
                        class="btn btn-info add-new position-sticky shadow buttom-responsive"><i class="fa fa-plus"></i>
                        Add Jabatan</a>
                </div>
            </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered table-fixed">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white shadow">Kode</th>
                        <th class="text-white shadow">Nama</th>
                        <th class="text-white shadow">Jabatan</th>
                        <th class="text-white shadow">Role</th>
                        <th class="text-center text-white shadow">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jabatan as $jb)
                    <tr>
                        <td>JBT0001</td>
                        <td>{{$jb->nama}}</td>
                        <td>{{$jb->nama_jabatan}}</td>
                        <td>{{$jb->role}}</td>
                        <td class="text-center">
                            <a  class="btn btn-warning btn-sm shadow edit-item" value="{{$jb->id}}"><i
                                    class="fa fa-pencil text-white" ></i></a>
                            <a href="{{ route('del_jabatan',['id'=>$jb->id]) }}" class="btn btn-sm btn-danger shadow"><i
                                    class="fa fa-times text-white"></i></a>
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
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
        </div>
    </div>
</div>

@include('master.modal.edit_jabatan')
<script>
    $(document).ready(function(){
        $(document).on('click','.edit-item',function(){
            var i = $(this).attr("value");
            $(".edit_jabatan").attr('action',"/edit_jabatan/"+i);
            $(".edit_jabatans").modal();
        });
    });

</script>
@endsection
