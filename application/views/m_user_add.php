<?php
$modul="User";
$modula="m_user";
$id="";
$id_role="";
$nama="";
$jabatan="";
$nm_user="";
$sandi="";
$aktif="";
if(isset($data)){
	$id=$data["id_user"];
	$id_role=$data["id_role"];
	$nama=$data["nama"];
	$jabatan=$data["jabatan"];
	$nm_user=$data["nm_user"];
	$sandi=$data["sandi"];
	$aktif=$data["aktif"];
}
?>
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2.min.css">
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2-bootstrap.css">
<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
			
<div class="panel-default">
	<div class="content-box-header  panel-heading">
		<div class="panel-title"></div>
	</div>
	<div class="content-box-large box-with-header">
		<form id=frm name=frm method=post enctype="multipart/form-data">
			<div class="form-group row">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-7">
					<input name="nama" value="<?php echo $nama; ?>"  class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Jabatan</label>
				<div class="col-sm-6">
					<input name="jabatan" value="<?php echo $jabatan; ?>"  class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-4">
					<input name="nm_user" value="<?php echo $nm_user; ?>"  class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Sandi</label>
				<div class="col-sm-4">
					<input name="sandi" class="form-control"/><br>
					<font color=red size=1>* Kosongkan apabila tidak dilakukan perubahan.</font>
				</div>
			</div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Foto</label>
                <div class="col-md-5">
                  <input type=file name=foto id=foto>
                </div>
            </div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Role</label>
				<div class="col-sm-4">
					<select class='form-control select2' id=id_role name=id_role>
					<?php
						echo "<option value=''";
						if($id_role==""){echo " selected ";}
						echo ">-Pilih-";
					  	if (!empty($role)) {
                      		foreach ($role as $row){
								echo "<option value='".$row["id_role"]."'";
								if($row["id_role"]==$id_role){echo " selected ";}
								echo ">".$row["nama"];
							}
						}
	                ?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Status</label>
				<div class="col-sm-2">
					<select class='form-control select2' id=aktif name=aktif>
					<?php
					  	echo "<option value=''";
						if($aktif==""){echo " selected ";}
						echo ">-Pilih-";
					  	echo "<option value='1'";
						if($aktif=="1"){echo " selected ";}
						echo ">Aktif";
					  	echo "<option value='0'";
						if($aktif=="0"){echo " selected ";}
						echo ">Tidak Aktif";
	                ?>
					</select>
				</div>
			</div>
			<br />
			<div class="form-group row">
				<div class="col-sm-offset-2 col-sm-10">
					<input name="id" type="hidden" value="<?php echo $id; ?>" />
					<button type="submit" class="btn btn-primary btn-sm" name="btnSave"><i class='fa fa-save'></i> Simpan</button>
					<a href="javascript:history.back()" class="btn btn-warning btn-sm"><i class='fa fa-repeat'></i> Batalkan</a>
				</div>
			</div>
		</form>
	</div>
</div>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
  $("#frm").validate({
  	errorClass: "errorCssClass",
    rules: {
	  nama: "required",
	  nm_user: "required",
	  id_role: "required",
	  aktif: "required",
    },
    messages: {
      nama: "Isikan Nama user",
      nm_user: "Isikan Username",
      id_role: "Pilih Role",
	  aktif: "Pilih Status"
    },
	errorPlacement: function (error, element) {
        if (element.parent('.input-group').length) { 
            error.insertAfter(element.parent());      // radio/checkbox?
        } else if (element.hasClass('select2')) {    
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
		var frm = document.getElementById("frm");
		//frm.submit();
		var formData = new FormData(frm);
		$.ajax({
		    type: "POST",
		    url: "<?php echo site_url($modula.'/save')?>",
		    data: formData,
		    contentType: false,
		    processData: false,
		    beforeSend: function() {
		    },
		    success: function(msg){
				document.location.href="<?php echo site_url($modula)?>"
		    },
		    error: function() {
		    }
		});
	}
  });
});
</script>
<script src="<?php echo media_url() ?>assets/js/select2.full.js"></script>
<script>
$(".select2").select2();
</script>
			