<?php
$g_title="IKM DPMPTSP";
$g_titleshort="IKM DPMPTSP";

$jmlLink=0;
$datatableconf="";
$js="";

function breadcrumbs($arr){
	$site=site_url('dashboard');
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
	<style>
		@import url(https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700);
		@import url(<?php echo media_url() ?>assets/icons/font-awesome/css/font-awesome.min.css);
		@import url(<?php echo media_url() ?>assets/icons/simple-line-icons/css/simple-line-icons.css);
		@import url(<?php echo media_url() ?>assets/icons/weather-icons/css/weather-icons.min.css);
		@import url(<?php echo media_url() ?>assets/icons/themify-icons/themify-icons.css);
		@import url(<?php echo media_url() ?>assets/icons/flag-icon-css/flag-icon.min.css);
		@import url(<?php echo media_url() ?>assets/icons/material-design-iconic-font/css/materialdesignicons.min.css);
		@import url(https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700);
		
		.errorCssClass {
		  font-size:9pt;
		  color:red;
		}
	</style>
    <link href="<?php echo media_url() ?>dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo media_url() ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo media_url() ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<script src="<?php echo media_url() ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo media_url() ?>assets/js/jquery.validate.min.js"></script>
<body class="skin-green fixed-layout">
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
        <?php $this->load->view('header') ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
		<?php $this->load->view('left-sidebar') ?>
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
							<a <?php echo $tambah;?>  class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah</a>
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
		<?php $this->load->view('footer') ?>
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
    <script src="<?php echo media_url() ?>dist/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="<?php echo media_url() ?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
	<script>
    $(document).ready(function() {
        $('#example').DataTable(<?php echo $this->session->flashdata('datatableconf');?>);
    });
    </script>
	<?php echo $js;?>	
</body>

</html>