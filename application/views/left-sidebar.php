<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="user" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)"class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($this->session->userdata('uname')); ?> <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <a href="<?php echo site_url('auth/logout');?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo site_url('dashboard') ?>"aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Data Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('m_layanan') ?>">Izin</a></li>
                                <li><a href="<?php echo site_url('m_kuesioner') ?>">Kuesioner</a></li>
								<?php if($this->session->userdata('urole')==2){?>
                                <li><a href="<?php echo site_url('m_user') ?>">User</a></li>
                                <li><a href="<?php echo site_url('m_pendidikan') ?>">Pendidikan</a></li>
                                <li><a href="<?php echo site_url('m_pekerjaan') ?>">Pekerjaan</a></li>
								<?php } ?>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Data IKM</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('t_kuesioner') ?>">Input Kuesioner</a></li>
                                <li><a href="<?php echo site_url('t_kuesioner/view_all') ?>">Lihat Kuesioner</a></li>
                                <li><a href="<?php echo site_url('t_kuesioner/daftar_bulan') ?>">Kunci Kuesioner</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('t_kuesioner/laporan/1') ?>">IKM Global</a></li>
                                <li><a href="<?php echo site_url('t_kuesioner/laporan/2') ?>">IKM Perizinan</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>