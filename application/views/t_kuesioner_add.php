<?php
$modul="Kuesioner";
$modula="t_kuesioner";

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2.min.css">
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2-bootstrap.css">
<link href="<?php echo media_url() ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.table-wrapper {
		width: 100%;
		margin: 1px auto;
        background: #fff;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 33px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
		margin-right: 10px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    .table-title .simpan {
        float: right;
		height: 33px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .simpan i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
		text-align:center;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 3px;
		min-width: 24px;
    }    
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table .form-control {
        height: 25px;
        line-height: 25px;
		font-size:12px;
		padding:5px;
		border:0px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td{
		padding:1px;
	}
	.tbl{
		padding:5px;
		font-size:12px;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("#tb td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		//$(this).attr("disabled", "disabled");
		var index = $("#tb tbody tr:last-child").index();
		var idx=$("#no_last").val();
		idx=(idx==""?0:parseInt(idx)+1);
        var row = '<tr>' +
            '<td><input type=hidden name=no[] id=no[] value="'+idx+'"><input type="text" class="form-control" name="usia[]" id="usia[]"></td>' +
            '<td>'+
			"<select class='form-control select2' style=\'width:100%\' id=id_jeniskelamin[] name=id_jeniskelamin[]>"+
			<?php
				echo "'<option value=\'\'>-Pilih-'+";
			  	if (!empty($jeniskelamin)) {
                  		foreach ($jeniskelamin as $row){
						echo "'<option value=\'".$row["id"]."\'>".$row["nama"]."'+\n";
					}
				}
	        ?>
			'</select>' +
			'</td>' +
            '<td>'+
			'<select class="form-control select2" style=\'width:100%\' id=id_pendidikan[] name=id_pendidikan[]>'+
			<?php
				echo "'<option value=\'\'>-Pilih-'+";
			  	if (!empty($pendidikan)) {
                  		foreach ($pendidikan as $row){
						echo "'<option value=\'".$row["id"]."\'>".$row["nama"]."'+\n";
					}
				}
	        ?>
			'</select>' +
			'</td>' +
            '<td>'+
			"<select class='form-control select2' style=\'width:100%\' id=id_pekerjaan[] name=id_pekerjaan[]>"+
			<?php
				echo "'<option value=\'\'>-Pilih-'+";
			  	if (!empty($pekerjaan)) {
                  		foreach ($pekerjaan as $row){
						echo "'<option value=\'".$row["id"]."\'>".$row["nama"]."'+\n";
					}
				}
	        ?>
			'</select>' +
			'</td>' +
			<?php
                 if (!empty($mkuis)) {
                      foreach ($mkuis as $row1){
					  	echo '\'<td>\'+';
					 	echo "\n".
							 '\'<select class="form-control select2" id="m_'.$row1["id_mkuesioner"].'[]" name="m_'.$row1["id_mkuesioner"].'[]">\'+';
						echo "\n".
							 '\'<option value="" >-\'+'.
							 "\n";
							 $nilai_min=$row1["nilai_min"];
							 $nilai_max=$row1["nilai_max"];
							 $nilai_min=($nilai_min!=""?$nilai_min:0);
							 $nilai_max=($nilai_max!=""?$nilai_max:0);
							 for($i=$nilai_min;$i<=$nilai_max;$i++){
								echo '\'<option value="'.$i.'">'.$i.'\'+';
							 }
					 	echo '\'</select>\'+';
						echo "\n";
					 	echo '\'</td>\'+';
						echo "\n";
					  }
				 }
			?>
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("#tb").append(row);	
		$(".select2").select2();	
		$("#tb tbody tr").eq(index + 1).find(".add, .edit").toggle();
    });
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>

<form name=frm id=frm method=post action="<?php echo site_url($modula).'/add'?>">
<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
			
<div class="panel-default">
	<div class="content-box-header  panel-heading">
		<div class="panel-title"></div>
	</div>
	<div class="content-box-large box-with-header">
	
		<div class="table-wrapper">
            <div class="table-title">
                <div class="col-sm-12 row">
					<div class="col-sm-12 form-group row">
						<div class="col-sm-2">Nama Izin</div>
						<div class="col-sm-4">
							<select name="id_layanan" id="id_layanan" class="form-control select2">
							<?php
								echo "<option value=''";
								if($id_layanan==""){echo " selected ";}
								echo ">-Pilih-";
							  	if (!empty($layanan)) {
		                      		foreach ($layanan as $row){
										echo "<option value='".$row["id_layanan"]."'";
										if($row["id_layanan"]==$id_layanan){echo " selected ";}
										echo ">".$row["nm_layanan"];
									}
								}
			                ?>
							</select>
						</div>
					</div>
                </div>
				<div class="col-sm-12 form-group row">
					<div class="col-sm-2">Tanggal</div>
					<div class="col-sm-4 input-group">
	                    <input type="text" name=tgl_isi class="form-control tgl" id="tgl_isi" placeholder="dd/mm/yyyy" value="<?php echo $tgl_isi;?>">
	                    <div class="input-group-append"> 
	                        <span class="input-group-text"><i class="icon-calender"></i></span> 
	                    </div> 
	                </div>
				</div>
				<?php if($sts_kunci!=0){?>
                <div class="col-sm-12 row"><font color=red>Data layanan <?php echo $nm_layanan;?> bulan <?php echo namabulan($bulan);?> tahun <?php echo $tahun;?> sudah dikunci dan tidak bisa ubah lagi nilainya.</font></div>
				<?php } ?>
            </div>
			<?php if($sts_kunci==0){?>
            <table id=tb class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th width=5%>Umur</th>
                        <th width=14%>Jns Kelamin</th>
                        <th width=13%>Pendidikan</th>
                        <th width=18%>Pekerjaan</th>
						<?php
		                  if (!empty($mkuis)) {
		                      foreach ($mkuis as $row) {
							  	echo "<th width=6%>".$row["kd_kuesioner"]."</th>";
							  }
						  }
						?>
                        <th width=5%>Aksi</th>
                    </tr>
                </thead>
                <tbody>
					<?php
						  $idx=0;
		                  if (!empty($kuis)) {
		                    foreach ($kuis as $row0) {
					?>
		                    <tr>
		                        <td>
									<input type="hidden" class="form-control" name="no[]" id="no[]" value="<?php echo $idx;?>">
									<input type="text" class="form-control" name="usia[]" id="usia[]" value="<?php echo $row0['usia'];?>">
								</td>
								<td>
									<select class='form-control select2' style="width:100%" id=id_jeniskelamin[] name=id_jeniskelamin[]>
									<?php
										echo "<option value=''";
										if($row0["id_jeniskelamin"]==""){echo " selected ";}
										echo ">-Pilih-";
									  	if (!empty($jeniskelamin)) {
				                      		foreach ($jeniskelamin as $row){
												echo "<option value='".$row["id"]."'";
												if($row["id"]==$row0["id_jeniskelamin"]){echo " selected ";}
												echo ">".$row["nama"];
											}
										}
					                ?>
									</select>
								</td>
								<td>
									<select class='form-control select2' style="width:100%" id=id_pendidikan[] name=id_pendidikan[]>
									<?php
										echo "<option value=''";
										if($row0["id_pendidikan"]==""){echo " selected ";}
										echo ">-Pilih-";
									  	if (!empty($pendidikan)) {
				                      		foreach ($pendidikan as $row){
												echo "<option value='".$row["id"]."'";
												if($row["id"]==$row0["id_pendidikan"]){echo " selected ";}
												echo ">".$row["nama"];
											}
										}
					                ?>
									</select>
								</td>
								<td>
									<select class='form-control select2' style="width:100%" id=id_pekerjaan[] name=id_pekerjaan[]>
									<?php
										echo "<option value=''";
										if($row0["id_pekerjaan"]==""){echo " selected ";}
										echo ">-Pilih-";
									  	if (!empty($pekerjaan)) {
				                      		foreach ($pekerjaan as $row){
												echo "<option value='".$row["id"]."'";
												if($row["id"]==$row0["id_pekerjaan"]){echo " selected ";}
												echo ">".$row["nama"];
											}
										}
					                ?>
									</select>
								</td>
								<?php
				                  if (!empty($mkuis)) {
				                      foreach ($mkuis as $row1){
									  	$nilai=0;
									  	$nilai=$row0["u".$row1["id_mkuesioner"]];
									  	echo '<td>'.
											 '<select class="form-control select2" id="m_'.$row1["id_mkuesioner"].'[]" name="m_'.$row1["id_mkuesioner"].'[]">'.
											 '<option value=""';
											 if($nilai==""){echo " selected ";}
											 echo ">-";
											 $nilai_min=$row1["nilai_min"];
											 $nilai_max=$row1["nilai_max"];
											 $nilai_min=($nilai_min!=""?$nilai_min:0);
											 $nilai_max=($nilai_max!=""?$nilai_max:0);
											 for($i=$nilai_min;$i<=$nilai_max;$i++){
												echo "<option value='".$i."'";
												if($nilai==$i){echo " selected ";}
												echo ">".$i;
											 }
											 echo '</select></td>';
									  }
								  }
								?>
		                        <td>
		                            <a class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
		                        </td>
		                    </tr>
					<?php
							$idx++;
							}
						}
					?>
                    <tr>
                        <td>
                            <input type="hidden" class="form-control" name="no[]" id="no[]" value="<?php echo $idx;?>">
							<input type="text" class="form-control" name="usia[]" id="usia[]">
						</td>
						<td>
							<select class='form-control select2' style="width:100%" id=id_jeniskelamin[] name=id_jeniskelamin[]>
							<?php
								echo "<option value=''>-Pilih-";
							  	if (!empty($jeniskelamin)) {
		                      		foreach ($jeniskelamin as $row){
										echo "<option value='".$row["id"]."'>".$row["nama"];
									}
								}
			                ?>
							</select>
						</td>
						<td>
							<select class='form-control select2' style="width:100%" id=id_pendidikan[] name=id_pendidikan[]>
							<?php
								echo "<option value=''>-Pilih-";
							  	if (!empty($pendidikan)) {
		                      		foreach ($pendidikan as $row){
										echo "<option value='".$row["id"]."'>".$row["nama"];
									}
								}
			                ?>
							</select>
						</td>
						<td>
							<select class='form-control select2' style="width:100%" id=id_pekerjaan[] name=id_pekerjaan[]>
							<?php
								echo "<option value=''>-Pilih-";
							  	if (!empty($pekerjaan)) {
		                      		foreach ($pekerjaan as $row){
										echo "<option value='".$row["id"]."'>".$row["nama"];
									}
								}
			                ?>
							</select>
						</td>
						<?php
		                  if (!empty($mkuis)) {
		                      foreach ($mkuis as $row1){
							  	echo '<td>'.
									 '<select class="form-control select2" id="m_'.$row1["id_mkuesioner"].'[]" name="m_'.$row1["id_mkuesioner"].'[]">'.
									 '<option value="" >-';
									 $nilai_min=$row1["nilai_min"];
									 $nilai_max=$row1["nilai_max"];
									 $nilai_min=($nilai_min!=""?$nilai_min:0);
									 $nilai_max=($nilai_max!=""?$nilai_max:0);
									 for($i=$nilai_min;$i<=$nilai_max;$i++){
										echo "<option value='".$i."'>".$i;
									 }
									 echo '</select></td>';
							  }
						  }
						?>
                        <td>
							<a class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
			<?php if($sts_kunci==0){?>
	            <div class="table-title">
	               <div class="col-sm-12 row">
	                   <div class="col-sm-4"></div>
	                   <div class="col-sm-8 pull-right">
						<button type="button" class="btn btn-info simpan"><i class="fa fa-plus"></i> Simpan</button>
						<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Tambah Row</button>
	                   </div>
	               </div>
				</div>
			<?php } ?>
			<br>
			<font class=tbl>Keterangan Kode Kuesioner :</font><br>
            <table cellpadding=5 class="tbl table-bordered">
                <thead>
                    <tr>
                        <th align=center>Kode</th>
                        <th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php
	                  if (!empty($mkuis)) {
	                      foreach ($mkuis as $row) {
						  	echo "<tr><td align=center>".$row["kd_kuesioner"]."</td><td>".$row["kuesioner"]."</td></tr>";
						  }
					  }
					?>
				</tbody>
			</table>
			<?php } ?>
        </div>
		
	</div>
</div>
            </div>
        </div>
    </div>
</div>
<?php $idx++;?>
<input type=hidden name=no_last id=no_last value="<?php echo $idx;?>">
<input type=hidden name=stssubmit id=stssubmit>
</form>

<script>
$(document).ready(function(){
	$("#id_layanan").change(function(){
	  ubahparam();
	});
	$("#tgl_isi").change(function(){
	  ubahparam();
	});
	function ubahparam(){
		var id_layanan=$("#id_layanan").val();
		var tgl_isi=$("#tgl_isi").val();
		if(id_layanan!=""&&tgl_isi!=""){
			document.frm.submit();
		}
	}
});

$(".simpan").click(function(){
	var lanjut=true;
	var id_layanan=$("#id_layanan").val();
	var tgl_isi=$("#tgl_isi").val();
	if(lanjut){
		if(id_layanan==""){
			alert('Nama Izin harus dipilih terlebih dahulu');
			lanjut=false;
		}
	}
	if(lanjut){
		if(tgl_isi==""){
			alert('Tanggal isi data terlebih dahulu');
			lanjut=false;
		}
	}
	if(lanjut){
	  	document.frm.action="<?php echo site_url($modula).'/save'?>"
		document.frm.submit();
	}
});
function chgkode(obj,nmin,nmax){
	var n=obj.value;
	var d=obj.title;
	if(n<nmin){
		alert('Nilai tidak boleh kurang dari '+nmin)
		obj.value=d
	}
	else if(n>nmax){
		alert('Nilai tidak boleh lebih dari '+nmax)
		obj.value=d
	}
	else{
		obj.title=obj.value
	}
	obj.focus();
}
</script>
<script src="<?php echo media_url() ?>assets/js/select2.full.js"></script>
<script src="<?php echo media_url() ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script>
$(".select2").select2();
jQuery('.tgl').datepicker({
	format: 'dd/mm/yyyy',
    autoclose: true,
    todayHighlight: true,
 	orientation: "bottom"
});
</script>
			