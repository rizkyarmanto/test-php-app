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
                                <a href="?page=dataminbox"class="dropdown-item"><i class="ti-email"></i> Pesan</a>
                                <a href="?page=mdetailprofile"class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                                <a href="mindex.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
						<li> <a class="waves-effect waves-dark" href="?page=mhome" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Beranda </span></a>
                       	<?php 
						if($_SESSION["jenispemakai"]==1){ ?>
							<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data </span></a>
	                            <ul aria-expanded="false" class="collapse">
									<li><a href="?page=templatespmk">Template SPMK</a></li>
									<li><a href="?page=templatemail">Template Email</a></li>
	                            </ul>
	                        </li>
						<?php
						}elseif($_SESSION["jenispemakai"]==3){ 
							echo '<li> <a class="waves-effect waves-dark" href="?page=datamjadwal" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Jadwal & Materi </span></a>';
						}
						else{
							echo '<li> <a class="waves-effect waves-dark" href="?page=datampenga" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Jadwal & Materi </span></a>';
                   		}
						?>
				    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>