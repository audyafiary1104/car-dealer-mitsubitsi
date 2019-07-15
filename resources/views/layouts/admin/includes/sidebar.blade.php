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
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            <div class="sidebar-scrollbar" style="overflow: hidden; width: auto; height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li class="has-sub expand">
                        <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#master_data" aria-expanded="true" aria-controls="master_data">
                            <i class="mdi mdi-folder-multiple-outline"></i>
                            <span class="nav-text">Master</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="master_data" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li class="active">
                                    <a class="sidenav-item-link" href="{{url('jabatan')}}">
                                        <span class="nav-text">Master Jabatan</span>
                                    </a>
                                </li>
                                <li class="has-sub expand">
                                    <a class="sidenav-item-link" href="{{url('karyawan')}}" aria-expanded="true">
                                        <span class="nav-text">Master Karyawan</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('Customer')}}">
                                        <span class="nav-text">Master Customer</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('Departement')}}">
                                        <span class="nav-text">Master Departement</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('Product')}}">
                                        <span class="nav-text">Master Product</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('master_biaya')}}">
                                        <span class="nav-text">Master Biaya</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('Cabang')}}">
                                        <span class="nav-text">Master Cabang</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('Level_Jabatan')}}">
                                        <span class="nav-text">Master Level Jabatan</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                            <span class="nav-text">Transaksi Finance</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li>
                                    <a class="sidenav-item-link" href="{{url('pengajuan_smk')}}">
                                        <span class="nav-text">Pengajuan Smk</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('konfirmasi_smk')}}">
                                        <span class="nav-text">Konfirmasi Smk(Oleh Bm)</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('buat_spk')}}">
                                        <span class="nav-text">Buat Spk</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('konfirmasi_smk_atasan')}}">
                                        <span class="nav-text">Konfirmasi Smk(Oleh Atasan)</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#faktur" aria-expanded="true" aria-controls="management">
                            <span class="nav-text">Kasir</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="faktur">
                            <div class="sub-menu">
                                <li>
                                    <a href="{{url('penerimaan_versekot')}}">Penerimaan Versekot</a>
                                </li>
                                <li>
                                    <a href="{{url('pelunasan')}}">Pelunasan</a>
                                </li>
                                <li>
                                    <a href="{{url('titipan')}}">Titipan</a>
                                </li>
                                <li>
                                    <a href="{{url('setor_giro')}}">Setor Giro</a>
                                </li>
                                <li>
                                    <a href="{{url('giro_cair')}}">Giro Cair</a>
                                </li>
                            </div>
                        </ul>

                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#operasional" aria-expanded="true" aria-controls="management">
                            <span class="nav-text">Biaya Operasional</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="operasional">
                            <div class="sub-menu">
                                <li>
                                    <a href="{{url('pengajuan_biaya')}}">Pengajuan Biaya Operasional</a>
                                </li>
                                <li>
                                    <a href="{{url('konfirmasi_biaya')}}">Konfirmasi Biaya Operasional</a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Bpn"
                            aria-expanded="true" aria-controls="data_statis">
                            <span class="nav-text">Proses Bpn</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="Bpn" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li>
                                    <a class="sidenav-item-link" href="{{url('serah_terima')}}">
                                        <span class="nav-text">Serah Terima Ke Biro Jasa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('terima_dari_birojasa')}}">
                                        <span class="nav-text">Terima Dari Biro Jasa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('terima_stnk')}}">
                                        <span class="nav-text">Serah Terima Stnk Custommer</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{url('terima_bpk')}}">
                                        <span class="nav-text">Serah Terima BBKB Ke Custommer</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#Pembelian" aria-expanded="true" aria-controls="data_statis">
                            <span class="nav-text">Transaksi Pembelian</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="Pembelian" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li>
                                    <a class="sidenav-item-link" href="{{url('terima_barang_dari_suplier')}}">
                                        <span class="nav-text">Terima Barang Dari Suplier</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</aside>
