<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Car Deller</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#master_data" aria-expanded="false" aria-controls="master_data">
                        <span class="nav-text">Master</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="master_data" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                        <li class="active">
                                <a class="sidenav-item-link" href="{{url('jabatan')}}">
                                    <span class="nav-text">Master Jabatan</span>
                                </a>
                            </li>
                        <li class="has-sub">
                                <a class="sidenav-item-link" href="{{url('karyawan')}}" aria-expanded="false" >
                                    <span class="nav-text">Master Karyawan</span>
                                </a>
                               
                            <li class="active">
                                <a class="sidenav-item-link" href="{{url('Customer')}}">
                                    <span class="nav-text">Master Customer</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{url('Product')}}">
                                    <span class="nav-text">Master Product</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                         <span class="nav-text">Transaksi Finance</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                       
                        <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#management" aria-expanded="false" aria-controls="management">
                                    <span class="nav-text">Surat Minat Kendaraan</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="management">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="alert.html">Pengajuan Smk</a>
                                        </li>

                                        <li>
                                            <a href="badge.html">Konfirmasi Smk (oleh atasan)</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Setor Versekot</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Konfirmasi Smk (oleh BM)</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Serah Terima Survai</a>
                                        </li>
                                    </div>
                                </ul>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Serah Terima Survai</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Buat Spk</span>

                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#faktur" aria-expanded="false" aria-controls="management">
                                    <span class="nav-text">Kasir</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="faktur">
                                    <div class="sub-menu">
                                    <li>
                                            <a href="alert.html">Terima Faktur Dari pabrik</a>
                                        </li>
                                        <li>
                                            <a href="alert.html">Kartu Tagihan</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Terima uang oleh kasir</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Penerimaan lain lain</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">Pelunasaan Ar</a>
                                        </li>
                                    </div>
                                </ul>
                                <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#operasional" aria-expanded="false" aria-controls="management">
                                    <span class="nav-text">Biaya operasional</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="operasional">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="alert.html">Pengajuan biaya operasional</a>
                                        </li>

                                        <li>
                                            <a href="badge.html">Konfirmasi Biaya operasional</a>
                                        </li>
                                    </div>
                                </ul> 
                        </div>

                    </ul>
                    <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#Bpn" aria-expanded="false" aria-controls="data_statis">
                        <span class="nav-text">Proses Bpn</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="Bpn" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                                <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Serah Terima Ke biro jasa</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Terima Dari Biro Jasa</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Serah Terima Stnk Custommer</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Serah Terima BBKB ke custommer</span>
                                </a>
                            </li>
                </li>
            </ul>
            <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#Pembelian" aria-expanded="false" aria-controls="data_statis">
                        <span class="nav-text">Transaksi Pembelian</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="Pembelian" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#management" aria-expanded="false" aria-controls="management">
                                    <span class="nav-text">Menu Po(purchase Order)</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="management">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="alert.html">pengajuan po pembelian</a>
                                        </li>

                                        <li>
                                            <a href="badge.html">konfirmasi po pembelian</a>
                                        </li>
                                    </div>
                                </ul>
                                <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">terima  barang dari suplier</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">input faktur pembelian</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">pelunasan pembelian</span>
                                </a>
                            </li>
                </li>
            </ul>
        </div>

        <hr class="separator" />

        <div class="sidebar-footer">
            {{-- <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>
                <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
            </div> --}}
        </div>
    </div>
</aside>