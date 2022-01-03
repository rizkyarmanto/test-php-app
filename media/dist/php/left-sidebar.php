<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="photo/<?php echo $_SESSION["foto"]; ?>" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)"class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["nama"] ?><span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <a href="?page=datainbox"class="dropdown-item"><i class="ti-email"></i> Pesan</a>
                                <a href="?page=detailprofile"class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                                <a href="index.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
						<li> <a class="waves-effect waves-dark" href="?page=home" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Beranda </span></a>
                        <?php
						if($_SESSION["jenispemakai"]==1){
						?>
							<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data </span></a>
	                            <ul aria-expanded="false" class="collapse">
									<li><a href="?page=templatespmk">Template SPMK</a></li>
									<li><a href="?page=templatemail">Template Email</a></li>
	                            </ul>
	                        </li>
						<?php
						}
						elseif($_SESSION["jenispemakai"]==3){
						?>
							<li> <a class="waves-effect waves-dark" href="?page=datajadwal" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Jadwal & Materi </span></a>
						<?php
						}
						else{
						?>
						<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data </span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="?page=datapenye">Penyelenggara</a></li>
							 	<li><a href="?page=datapenanda">Penandatangan SPMK</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Diklat</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?page=datadiklat">Diklat</a></li>
								<li><a href="?page=datamtdiklat">Mata Diklat</a></li>
								<li><a href="?page=datalokdiklat">Lokasi Diklat</a></li>
								<li><a href="?page=datajnsdiklat">Jenis Diklat</a></li>
								<li><a href="?page=datakelas">Ruang Kelas</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Pengajar</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?page=datapenga">Pengajar</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?page=datarekappengajar">Rekap Angka Kredit</a></li>
                                <li><a href="?page=datapengajarlokasi">Lokasi Pengajar</a></li>
                                <li><a href="?page=datapengajarjadwal">Jadwal Pengajar</a></li>
                                <li><a href="?page=datapengajarkosong">Jadwal Kosong Pengajar</a></li>
                            </ul>
                        </li>
						<?php } ?>						
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>