<?php
$g_title="IKM DPMPTSP";
$g_titleshort="IKM DPMPTSP";
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
    
    <!-- page css -->
    <link href="<?php echo media_url() ?>dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo media_url() ?>dist/css/style.min.css" rel="stylesheet">
	<link href="<?php echo media_url() ?>login/stylecap.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
.has-error{
	color:#ff5e5e;
}
.bd{
	border:1 solid red!important;
}
.konf{
	color:red;
}
</style>

<body class="skin-blue card-no-border">
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
	<script src="<?php echo media_url() ?>assets/js/jquery-1.12.4.min.js"></script>
	<script src="<?php echo media_url() ?>assets/js/jquery.validate.min.js"></script>
	<style>
	.cap{
		transform:scale(0.8);transform-origin:0 0
	}
	</style>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo media_url() ?>assets/images/background/login-registerb.jpg)">
			<div align=center valign=top style="border:0px solid red;margin-top:-90px;margin-bottom:20px">
				<img src="<?php echo media_url() ?>assets/images/dpm-logo.png">
			</div>
			<div class="login-box card" style="border-radius:10px;background-color:#fff;;border:1px solid #e6e6e6">
                <div class="card-body">
						<?php $attr = 'id="form_login" name=form_login method="post" autocomplete="off" class="form-horizontal form-material" '; echo form_open(site_url('auth/login'), $attr); ?>
                        <h3 class="box-title m-b-20"><img src="<?php echo media_url() ?>assets/images/ikm.png"></h3>
                        <div class="form-group">
                            <div class="col-xs-12 konf" id=konf>
							<?php
								if ($this->session->flashdata('failed')) { 
									echo $this->session->flashdata('failed');
								} 
							?>
							</div>
                        </div>
                        <div class="form-group required">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" placeholder="User Login" id="username" name="username" required> </div>
                        </div>
                        <div class="form-group required">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" placeholder="Kata Sandi" id="password" name="password" required> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btnsubmit btn btn-block btn-lg btn-info btn-rounded" type="submit" id=btnsubmit>Log In</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo media_url() ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo media_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
<script language=javascript>
var h = window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;
$("#wrapper").height(h);
$("#username").focus();

$(function() {
  $("#form_login").validate({
    rules: {
	  username: "required",
	  password: "required"
    },
    messages: {
      username: "Isikan User Login",
      password: "Isikan Kata Sandi"
    },
	errorPlacement: function (error, element) {
        if (element.parent('.input-group').length) { 
            error.insertAfter(element.parent());      // radio/checkbox?
        } else if (element.hasClass('select2-single')) {    
            error.insertAfter(element.next('span'));  // select2
        } else {         
            error.insertAfter(element);               // default
        }
    },
	highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass); //.removeClass(errorClass);
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
   	unhighlight: function (element, errorClass, validClass) {
       	$(element).removeClass(errorClass); //.addClass(validClass);
       },
	submitHandler: function(form) {
		var frm = document.getElementById("form_login");
		//frm.submit();
		var formData = new FormData(frm);
   		frm.submit();
	}
  });
});
</script>
</body>

</html>