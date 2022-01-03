<?php
$urole=$this->session->userdata('urole');
?>
		<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
		                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo ucfirst($this->session->userdata('uname')); ?></span></a>
		                    <ul aria-expanded="false" class="collapse">
		                        <li><a href="<?php echo site_url('auth/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
		                    </ul>
		                </li>
						<!--<li><a class="waves-effect waves-dark" href="?page=home" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Beranda </span></a>-->
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2 "></i><span class="hide-menu">Data Master</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('m_anggota') ?>">Anggota</a></li>
                                <li><a href="<?php echo site_url('m_satker') ?>">Satker</a></li>
                                <li><a href="<?php echo site_url('m_golongan') ?>">Golongan</a></li>
                                <li><a href="<?php echo site_url('m_simpanan') ?>">Produk Simpanan</a></li>
                                <li><a href="<?php echo site_url('m_pinjaman') ?>">Produk Pinjaman</a></li>
                                <li><a href="<?php echo site_url('m_status') ?>">Status</a></li>
                            </ul>
						</li>
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt "></i><span class="hide-menu">Transaksi</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('form/list_pinjaman') ?>">Pengajuan Pinjaman</a></li>
                                <li><a href="<?php echo site_url('form/list_pinjamantopup') ?>">Pengajuan Pinjaman Top Up</a></li>
                                <li><a href="<?php echo site_url('form/list_pencairan') ?>">Pencairan Pinjaman</a></li>
                                <li><a href="<?php echo site_url('form/list_angsuran') ?>">Pembayaran Angsuran</a></li>
                                <li><a href="<?php echo site_url('form/list_angsurancepat') ?>">Pelunasan Dipercepat</a></li>
                                <li><a href="<?php echo site_url('form/list_simpanan_pokok') ?>">Simpanan Pokok </a></li>
                                <li><a href="<?php echo site_url('form/list_simpanan_wajib') ?>">Simpanan Wajib</a></li>
                                <li>
									<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">Simpanan Sukarela</a>
									<ul aria-expanded="false" class="collapse">
		                                <li><a href="<?php echo site_url('form/list_simpanan_suha') ?>">Simpanan KOPPOSTEL</a></li>
		                                <li><a href="<?php echo site_url('form/list_simpanan_sumo') ?>">Simpanan Partisipasi Anggota</a></li>
									</ul>
								</li>
                                <li><a href="<?php echo site_url('form/list_penarikan') ?>">Penarikan Simpanan</a></li>
								<?php if($urole==2||$urole==3||$urole==4){?>
                                <li><a href="<?php echo site_url('form/list_angsuranampun') ?>">Pengampunan Angsuran</a></li>
								<?php } ?>
                                <li><a href="<?php echo site_url('form/autodebet') ?>">Auto Debet</a></li>
                            </ul>
						</li>
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Laporan</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('form/lap_simpananwajibumum') ?>">Simpanan Wajib Umum</a></li>
                                <li><a href="<?php echo site_url('form/lap_simpananwajibgol') ?>">Simpanan Wajib Berdasarkan Golongan</a></li>
                                <li><a href="<?php echo site_url('form/lap_simpananwajibsatker') ?>">Simpanan Wajib Berdasarkan Satker</a></li>
                                <li><a href="<?php echo site_url('form/lap_rekapsimpananpokok') ?>">Rekap Simpanan Pokok</a></li>
                                <li><a href="<?php echo site_url('form/lap_rekapsimpananwajib') ?>">Rekap Simpanan Wajib</a></li>
                                <li><a href="<?php echo site_url('form/lap_rekapsimpanansukarela') ?>">Rekap Simpanan Sukarela</a></li>
                                <li><a href="<?php echo site_url('form/lap_akumwajibsatker') ?>">Simpanan Wajib Akumulasi Per Satker</a></li>
                                <li><a href="<?php echo site_url('form/lap_akumpokoksatker') ?>">Simpanan Pokok Akumulasi Per Satker</a></li>
                                <li><a href="<?php echo site_url('form/lap_pinjaman') ?>">Pinjaman</a></li>
                                <li><a href="<?php echo site_url('form/lap_pinjamansatker') ?>">Pinjaman Berdasarkan Satker</a></li>
                                <li><a href="<?php echo site_url('form/lap_anggota') ?>">Daftar Anggota</a></li>
                                <li><a href="<?php echo site_url('form/lap_debetsimpwajib') ?>">Log Autodebet Simpanan Wajib</a></li>
                                <li><a href="<?php echo site_url('form/lap_debetangsuran') ?>">Log Autodebet Pinjaman</a></li>
                                <li><a href="<?php echo site_url('form/lap_ampunan') ?>">Log Pengampunan Angsuran</a></li>
                                <!--<li><a href="<?php echo site_url('form/lap_hutang') ?>">Kartu Hutang</a></li>-->
                            </ul>
						</li>
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Histori</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('form/hist_simpanan') ?>">Simpanan Anggota</a></li>
                                <li><a href="<?php echo site_url('form/hist_pinjaman') ?>">Transaksi Pinjaman Anggota</a></li>
                            </ul>
						</li>
						<?php if($urole==2||$urole==3){?>
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">CMS</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('m_user') ?>">User</a></li>
                            </ul>
						</li>
						<?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>