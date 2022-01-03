 <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="mindex.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
											<?php
											$anggotaSql ="select a.id, b.id idsel, c.nama pengirim, a.subyek, a.tgl, c.foto
														from pesan a 
														inner join pesaninout b on b.id_pesan=a.id and b.id_penerima=".$_SESSION["id_pemakai"]."
														left join pemakai c on c.id_pemakai=b.id_pengirim
														where b.hasread=0 and b.id_penerima=".$_SESSION["id_pemakai"]."
														order by a.tgl desc limit 5";
											//echo $anggotaSql;
											$anggotaQry = mysqli_query($koneksidb,$anggotaSql)  or die ("Query salah : ".mysqli_error($koneksidb));
											while ($dataShow = mysqli_fetch_array($anggotaQry)) {
											
											if($dataShow['foto']=="") {
												$dataFoto	= "images.jpg";
											}
											else{
												$dataFoto	= $dataShow['foto'];
											}
											?>
                                            <a href="?page=detailinbox&id=<?php echo $dataShow['id']?>">
                                                <div class="user-img"> <img src="photo/<?php echo $dataFoto?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5><?php echo $dataShow['pengirim']?></h5> <span class="mail-desc"><?php echo $dataShow['subyek']?></span> <span class="time"><?php echo konversi_tanggal("d M Y H:i:s",$dataShow['tgl'])?></span> </div>
                                            </a>
											<?php 
											} 
											mysqli_free_result($anggotaQry);
											//mysqli_close($koneksidb);
											?>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="?page=dataminbox"> <strong>Lihat semua pesan</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>