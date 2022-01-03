<?php
$modul="Kuesioner";
$modula="m_kuesioner";
$id="";
$kd_kuesioner="";
$kuesioner="";
$nilai_min="";
$nilai_max="";
$aktif="";
if(isset($data)){
	$id=$data["id_mkuesioner"];
	$kd_kuesioner=$data["kd_kuesioner"];
	$kuesioner=$data["kuesioner"];
	$nilai_min=$data["nilai_min"];
	$nilai_max=$data["nilai_max"];
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
		<form id=frm name=frm method=post>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Kode kuesioner</label>
				<div class="col-sm-2">
					<input name="kd_kuesioner" value="<?php echo $kd_kuesioner; ?>"  class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Kuesioner</label>
				<div class="col-sm-7">
					<textarea name="kuesioner" class="form-control"><?php echo $kuesioner; ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Nilai Minimal</label>
				<div class="col-sm-2">
					<input name="nilai_min" value="<?php echo $nilai_min; ?>"  class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 control-label">Nilai Maksimal</label>
				<div class="col-sm-2">
					<input name="nilai_max" value="<?php echo $nilai_max; ?>"  class="form-control"/>
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
	  kd_kuesioner: "required",
	  kuesioner: "required",
	  aktif: "required",
    },
    messages: {
      kd_kuesioner: "Isikan Kode kuesioner",
      kuesioner: "Isikan Nama kuesioner",
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
			