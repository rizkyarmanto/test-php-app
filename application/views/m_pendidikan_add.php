<?php
$modul="Pendidikan";
$modula="m_pendidikan";
$id="";
$nama="";
if(isset($data)){
	$id=$data["id"];
	$nama=$data["nama"];
}
?>
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
				<label class="col-sm-2 control-label">Jenis Pendidikan</label>
				<div class="col-sm-3">
					<input name="nama" value="<?php echo $nama; ?>"  class="form-control"/>
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
	  nama: "required"
    },
    messages: {
      nama: "Isikan Jenis Pendidikan"
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
			