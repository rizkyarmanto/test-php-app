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
		width: 83%;
        table-layout: fixed;
		font-size:12px;
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
		padding:5px;
	}
	.tbl{
		padding:5px;
		font-size:12px;
	}
	.font_tbl{
		padding-top:5px;
		padding-right:5px;
		padding-bottom:5px;
		font-size:12px;
	}
</style>
<form name=frm id=frm method=post action="<?php echo site_url($modula).'/laporan/'.$type?>">
<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
			
<div class="panel-default">
	<div class="content-box-header  panel-heading">
		<div class="panel-title"></div>
	</div>
	<div class="content-box-large box-with-header">
		<div class="table-wrapper ">
            <div class="table-title">
				<?php if($type==2){?>
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
				<?php } ?>
				<div class="col-sm-12 form-group row">
					<div class="col-sm-2">Tahun</div>
					<div class="col-sm-4 input-group">
						<select name="tahun" id="tahun" class="form-control select2">
						<?php
							echo "<option value=''";
							if($tahun==""){echo " selected ";}
							echo ">-Pilih-";
							for($j=TAHUN_MULAI;$j<=date("Y");$j++){
								echo "<option value='".$j."'";
								if($j==$tahun){echo " selected ";}
								echo ">".$j;
							}
		                ?>
						</select>
					</div>
				</div>
				<div class="col-sm-12 form-group row">
					<div class="col-sm-2">Semester</div>
					<div class="col-sm-2 input-group">
						<select name="semester" id="semester" class="form-control select2">
						<?php
							echo "<option value=''";
							if($semester==""){echo " selected ";}
							echo ">-Pilih-";
							for($j=1;$j<=2;$j++){
								echo "<option value='".$j."'";
								if($j==$semester){echo " selected ";}
								echo ">".$j;
							}
		                ?>
						</select>
					</div>
				</div>
				<br />
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="button" class="btn btn-primary btn-sm btncari"><i class='fa fa-search-plus'></i> Cari</button>
						<button type="button" class="btn btn-info btn-sm btncetak"><i class='fa fa fa-print'></i> Cetak</button>
						<a href="javascript:history.back()" class="btn btn-warning btn-sm"><i class='fa fa-repeat'></i> Back</a>
					</div>
				</div>
            </div>
			<?php 
			$nil=array();
			if(!empty($stscari)){ 
			?>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th width=5%>No</th>
                        <th width=5%>Umur</th>
                        <th width=10%>Jns Kelamin</th>
                        <th width=17%>Pendidikan</th>
                        <th width=18%>Pekerjaan</th>
						<?php
		                  if (!empty($mkuis)) {
		                      foreach ($mkuis as $row) {
							  	array_push($nil,0);
							  	echo "<th width=6%>".$row["kd_kuesioner"]."</th>";
							  }
						  }
						?>
                    </tr>
                </thead>
                <tbody>
					<?php
						  $j=1;
		                  if (!empty($kuis)) {
		                    foreach ($kuis as $row0) {
					?>
		                    <tr>
		                        <td><?php echo $j;?></td>
		                        <td><?php echo $row0['usia'];?></td>
		                        <td><?php echo $row0['jeniskelamin'];?></td>
		                        <td><?php echo $row0['pendidikan'];?></td>
		                        <td><?php echo $row0['pekerjaan'];?></td>
								<?php
				                  if (!empty($mkuis)) {
								  	  $m=0;
				                      foreach ($mkuis as $row1){
									  	$nilai=0;
									  	$nilai=$row0["u".$row1["id_mkuesioner"]];
									  	echo '<td align=right>'.$nilai.'</td>';
										$nil[$m]=$nil[$m]+$nilai;
										$m=$m+1;
									  }
								  }
								?>
		                    </tr>
					<?php
								$j=$j+1;
							}
					?>
						
						<tr>
							<td colspan=5 align=right>Jumlah Nilai</td>
							<?php
								$jml=count($nil);
								if ($jml>0) {
									for ($h=0;$h<$jml;$h++){
										echo '<td align=right>'.$nil[$h].'</td>';
									}
								}
							?>
						</tr>
						<tr>
							<td colspan=5 align=right>NRR</td>
							<?php
								$jml=count($nil);
								if ($jml>0) {
									for ($h=0;$h<$jml;$h++){
										$rata=formatnumberapp(($nil[$h]/($j-1)),3);
										echo '<td align=right>'.$rata.'</td>';
									}
								}
							?>
						</tr>
						<tr>
							<td colspan=5 align=right>NRR Tertimbang</td>
							<?php
								$jml_nrrt=0;
								$jml=count($nil);
								if ($jml>0) {
									for ($h=0;$h<$jml;$h++){
										$nrrt=round(round(($nil[$h]/($j-1)),3)*NRR_TERTIMBANG,3);
										echo '<td align=right>'.formatnumberapp($nrrt,3).'</td>';
										$jml_nrrt=$jml_nrrt+$nrrt;
									}
								}
								$ikm=$jml_nrrt*IKM;
							?>
						</tr>
						<tr>
							<td colspan=5 align=right>Jumlah NRR Tertimbang</td>
							<td colspan="<?php echo $jml;?>" align=center><?php echo formatnumberapp($jml_nrrt,3);?></td>
						</tr>
						<tr>
							<td colspan=5 align=right><strong>IKM Unit Pelayanan</strong></td>
							<td colspan="<?php echo $jml;?>" align=center><strong><?php echo formatnumberapp($ikm,3);?></strong></td>
						</tr>
					<?php
						}
					?>
                </tbody>
            </table>
			<br>
			<div class="row">
				<div class="col-sm-6">
					<font class=font_tbl>Keterangan Kode Kuesioner :</font><br>
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
				</div>
				<div class="col-sm-6">
					<font class=font_tbl>Mutu Layanan :</font><br>
		            <table cellpadding=5 class="tbl table-bordered">
		                <thead>
		                    <tr>
		                        <th align=center>Mutu</th>
		                        <th>Rentang Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>A</strong> (Sangat Baik)</td>
								<td>88,31 - 100,00</td>
							</tr>
							<tr>
								<td><strong>B</strong> (Baik)</td>
								<td>76,61 - 88,30</td>
							</tr>
							<tr>
								<td><strong>C</strong> (Kurang Baik)</td>
								<td>65,00 - 76,60</td>
							</tr>
							<tr>
								<td><strong>D</strong> (Tidak Baik)</td>
								<td>25,00 - 64,99</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
        </div>
		
	</div>
</div>
            </div>
        </div>
    </div>
</div>
<input type=hidden name=type id=type value=<?php echo $type?>>
<input type=hidden name=stscari id=stscari>
<input type=hidden name=stscetak id=stscetak>
</form>
<script src="<?php echo media_url() ?>assets/js/select2.full.js"></script>
<script>
$(document).ready(function(){
	$(".btncari").click(function(){
	  $("#stscetak").val('');
	  $("#stscari").val('1');
	  var lanjut=true
	  var tahun=$("#tahun").val();
	  var semester=$("#semester").val();
	  var t=$("#type").val();
	  if(t==2){
	  	var layanan=$("#id_layanan").val();
	  	if(layanan==""){
			alert('Izin harus dipilih terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	  	if(tahun==""){
			alert('Tahun harus diisi terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	  	if(semester==""){
			alert('Semester harus diisi terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	 	document.frm.submit();
	  }
	});
	$(".btncetak").click(function(){
	  $("#stscetak").val('pdf');
	  $("#stscari").val('1');
	  var lanjut=true
	  var tahun=$("#tahun").val();
	  var semester=$("#semester").val();
	  var t=$("#type").val();
	  if(t==2){
	  	var layanan=$("#id_layanan").val();
	  	if(layanan==""){
			alert('Izin harus dipilih terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	  	if(tahun==""){
			alert('Tahun harus diisi terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	  	if(semester==""){
			alert('Semester harus diisi terlebih dahulu')
			lanjut=false
		}
	  }
	  if(lanjut){
	 	document.frm.submit();
	  }
	});
});
$(".select2").select2();
</script>