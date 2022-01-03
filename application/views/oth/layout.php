<?php
$g_title="KOPERASI | KEMKOMINFO";
$g_titleshort="KOPERASI";

$jmlLink=0;
function breadcrumbs($arr){
	$site=site_url('kasn');
	$s='<ol class="breadcrumb">';
	$s.='<li class="breadcrumb-item"><a href="'.$site.'">Home</a></li>';
	$jmlarr=count($arr);
	for ($baris=0;$baris<$jmlarr;$baris++){
		$s.='<li class="breadcrumb-item '.($baris==$jmlarr-1?'active':'').'"><a href="'.$arr[$baris][1].'">'.$arr[$baris][0].'</a></li>';
	}
	return $s.'</ol>';
}
if(isset($arrLink)){
	$jmlLink=count($arrLink);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo media_url() ?>image/icon.png">
    <title><?php echo $g_title?></title>
    <!-- Custom CSS -->
    <link href="<?php echo media_url() ?>dist/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2.min.css" rel="stylesheet"/>	
	<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2-bootstrap.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#dcontent{
    width:800px;
    height:400px;
    position:fixed;
    bottom:0px; 
  	right: 0;
  margin-bottom:37px;
  padding-bottom:0px;
  	margin-right: 50px;
  	border-radius: 15px;
	-webkit-box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
-moz-box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
    display:none;
  z-index: 9999;
}

#dchat {
  background-color:#fff;
  position: fixed;
  width:120px;
  bottom: 0;
  right: 0;
  margin-bottom:37px;
  padding-top:0px;
  padding-bottom:0px;
  height:45px;
  margin-right: 80px;
  border-radius: 20px;
  -webkit-box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
  -moz-box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
box-shadow: 0px 0px 12px -3px rgba(0,0,0,0.48);
  z-index: 9999;
}
.frmcls{
	border:0;
	border-radius: 10px;
}
.chattbl{
	margin:auto;
	height:100%;
}
.chatjdl{
	text-decoration:none;
	color:#4b4d61;
	font-weight:600;
}

.notification-icon {
  margin-right: 6.8775px;
}
.notification-icon:after {
  position: absolute;
  content: attr(data-count);
  margin-left: -6.8775px;
  margin-top: -6.8775px;
  padding: 0 4px;
  min-width: 13.755px;
  height: 13.755px;
  line-height: 13.755px;
  background: #ff9966;
  border-radius: 10px;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  font-size: 11.004px;
  font-weight: 600;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}


.notif-icon {
  margin-right: 6.8775px;
}
.notif-icon:after {
  position: absolute;
  content: attr(data-count);
  margin-left: -6.8775px;
  margin-top: -6.8775px;
  padding: 0 4px;
  min-width: 13.755px;
  height: 13.755px;
  line-height: 13.755px;
  background: #ff9966;
  border-radius: 10px;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  font-size: 11.004px;
  font-weight: 600;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.errorCssClass {
  font-size:9pt;
  color:red;
}
</style>
<script src="<?php echo media_url() ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo media_url() ?>assets/js/jquery.validate.min.js"></script>
</head>

<body class="horizontal-nav skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?php echo $g_titleshort?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- Light Logo icon -->
                            <img src="<?php echo media_url() ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="hidden-sm-down">
                         <!-- dark Logo text -->
                         <!-- Light Logo text -->    
                         <img src="<?php echo media_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
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
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="user" class=""> <span class="hidden-md-down"><?php echo ucfirst($this->session->userdata('uname')); ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <a href="<?php echo site_url('auth/logout');?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"></li>
                    </ul>
                </div>
            </nav>
        </header>
		<?php $attr = 'id="form_login"'; echo form_open('logout', $attr); ?>
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
		<?php echo form_close() ?>
		<script>
			function logout(){
				$('#form_login').submit();
			}
		</script>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php $this->load->view('sidebar') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $title;?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
						<?php 
						if($jmlLink>0){ 
							echo breadcrumbs($arrLink);
						} 
						?>
						<?php 
							if(isset($tambah)){ 
						?>
							<a <?php echo $tambah;?> class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah</a>
						<?php } ?>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php isset($main) ? $this->load->view($main) : null; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 KOPERASI KOMINFO
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo media_url() ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo media_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo media_url() ?>dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo media_url() ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo media_url() ?>dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo media_url() ?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo media_url() ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo media_url() ?>dist/js/custom.js"></script>
	<script src="<?php echo media_url() ?>assets/js/select2.full.js"></script>
    <script src="<?php echo media_url() ?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo media_url() ?>assets/js/dataTables.responsive.min.js"></script>
	<script>
	$(".select2").select2();
	</script>
	<script>
    $(document).ready(function() {
        $('#example').DataTable(
		);
    });
    </script>
</body>

</html>