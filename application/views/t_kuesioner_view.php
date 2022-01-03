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
							<?php echo $res_nm_layanan["nm_layanan"]?>
						</div>
					</div>
                </div>
				<div class="col-sm-12 form-group row">
					<div class="col-sm-2">Tanggal</div>
					<div class="col-sm-4 input-group"><?php echo konversi_tanggal("d M Y",$tgl_isi);?></div>
				</div>
            </div>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th width=5%>Umur</th>
                        <th width=10%>Jns Kelamin</th>
                        <th width=17%>Pendidikan</th>
                        <th width=18%>Pekerjaan</th>
						<?php
		                  if (!empty($mkuis)) {
		                      foreach ($mkuis as $row) {
							  	echo "<th width=6%>".$row["kd_kuesioner"]."</th>";
							  }
						  }
						?>
                    </tr>
                </thead>
                <tbody>
					<?php
		                  if (!empty($kuis)) {
		                    foreach ($kuis as $row0) {
					?>
		                    <tr>
		                        <td><?php echo $row0['usia'];?></td>
		                        <td><?php echo $row0['jeniskelamin'];?></td>
		                        <td><?php echo $row0['pendidikan'];?></td>
		                        <td><?php echo $row0['pekerjaan'];?></td>
								<?php
				                  if (!empty($mkuis)) {
				                      foreach ($mkuis as $row1){
									  	$nilai=0;
									  	$nilai=$row0["u".$row1["id_mkuesioner"]];
									  	echo '<td>'.$nilai.'</td>';
									  }
								  }
								?>
		                    </tr>
					<?php
							}
						}
					?>
                </tbody>
            </table>
			<br>
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
			<br>
			<a href="javascript:history.back()" class="btn btn-warning btn-sm"><i class='fa fa-repeat'></i> Back</a>
        </div>
		
	</div>
</div>
            </div>
        </div>
    </div>
</div>