
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2.min.css">
<link rel="stylesheet" href="<?php echo media_url() ?>assets/css/select2-bootstrap.css">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<style>
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
#grafik1, #sliders {
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
#grafik1 {
    height: 400px; 
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
.a{
	border:1px red;
}
.batas{
	border:1px solid #e3e3e3;
	border-radius: 10px;
}
.tbl th{
	text-align:center;
}
</style>

<form name=frm id=frm method=post action="<?php echo site_url("dashboard")?>">
<div class="row my-flex-card">
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-block d-flex justify-content-center batas">
				<div>
	                <div class="row d-flex justify-content-center" style="padding:5px">
						<figure class="highcharts-figure">
						    <div id="grafik1" style="width: 400px;height: 400px"></div>
						</figure>
					</div>
					<div class="row" style="padding:5px">
						<font class=font_tbl>Keterangan Grafik :</font><br><br>
			            <table cellpadding=5 class="tbl table-bordered" width=100%>
			                <thead>
			                    <tr>
			                        <th rowspan=2>Nama Izin</th>
			                        <th colspan=2>Semester</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<?php
								  $data1_nm="";$data1_sm1="";$data1_sm2="";
				                  if (!empty($data1)) {
				                      foreach ($data1 as $row1) {
									  	echo "<tr><td>".$row1["nm_layanan"]."</td><td align=right>".$row1["sm1"]."</td><td align=right>".$row1["sm2"]."</td></tr>";
										$data1_nm.="'".$row1["nm_layanan"]."',";
										$data1_sm1.=$row1["sm1"].",";
										$data1_sm2.=$row1["sm2"].",";
									  }
								  }
								  $data1_nm=delkoma($data1_nm);
								  $data1_sm1=delkoma($data1_sm1);
								  $data1_sm2=delkoma($data1_sm2);
								?>
							</tbody>
						</table><br><br>
					</div>
					<div class="row" style="padding:10px">
						<table cellpadding=5  align=center>
							<tr>
								<td>Data Tahun</td>
								<td>:</td>
								<td>
									<select name="g1_tahun" id="g1_tahun" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g1_tahun==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g1_tahun){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm btncari"><i class='fa fa-search-plus'></i> Cari</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-block d-flex justify-content-center batas">
				<div>
	                <div class="row d-flex justify-content-center" style="padding:5px">
						<figure class="highcharts-figure">
						    <div id="grafik2" style="width: 400px;height: 400px"></div>
						</figure>
					</div>
					<div class="row" style="padding:5px">
						<font class=font_tbl>Keterangan Grafik :</font><br><br>
			            <table cellpadding=5 class="tbl table-bordered" width=100%>
			                <thead>
			                    <tr>
			                        <th rowspan=2>Nama Izin</th>
			                        <th colspan=2>Semester</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<?php
								  $data2_nm="";$data2_sm1="";$data2_sm2="";
				                  if (!empty($data2)) {
				                      foreach ($data2 as $row2) {
									  	echo "<tr><td>".$row2["nm_layanan"]."</td><td align=right>".$row2["sm1"]."</td><td align=right>".$row2["sm2"]."</td></tr>";
										$data2_nm.="'".$row2["nm_layanan"]."',";
										$data2_sm1.=$row2["sm1"].",";
										$data2_sm2.=$row2["sm2"].",";
									  }
								  }
								  $data2_nm=delkoma($data2_nm);
								  $data2_sm1=delkoma($data2_sm1);
								  $data2_sm2=delkoma($data2_sm2);
								?>
							</tbody>
						</table><br><br>
					</div>
					<div class="row" style="padding:10px">
						<table cellpadding=5 align=center>
							<tr>
								<td>Data Tahun</td>
								<td>:</td>
								<td>
									<select name="g2_tahun" id="g2_tahun" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g2_tahun==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g2_tahun){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm btncari"><i class='fa fa-search-plus'></i> Cari</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-block d-flex justify-content-center batas">
				<div>
	                <div class="row d-flex justify-content-center" style="padding:5px">
						<figure class="highcharts-figure">
						    <div id="grafik3" style="width: 400px;height: 400px"></div>
						</figure>
					</div>
					<div class="row" style="padding:5px">
						<font class=font_tbl>Keterangan Grafik :</font><br><br>
			            <table cellpadding=5 class="tbl table-bordered" width=100%>
			                <thead>
			                    <tr>
			                        <th rowspan=2>Tahun</th>
			                        <th colspan=2>Semester</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<?php
								  $data3_nm="";$data3_sm1="";$data3_sm2="";
				                  if (!empty($data3)) {
				                      foreach ($data3 as $row3) {
									  	echo "<tr><td>".$row3["tahun"]."</td><td align=right>".$row3["sm1"]."</td><td align=right>".$row3["sm2"]."</td></tr>";
										$data3_nm.="'".$row3["tahun"]."',";
										$data3_sm1.=$row3["sm1"].",";
										$data3_sm2.=$row3["sm2"].",";
									  }
								  }
								  $data3_nm=delkoma($data3_nm);
								  $data3_sm1=delkoma($data3_sm1);
								  $data3_sm2=delkoma($data3_sm2);
								?>
							</tbody>
						</table><br><br>
					</div>
					<div class="row" style="padding:10px">
						<table cellpadding=5 align=center>
							<tr>
								<td>Data Tahun</td>
								<td>:</td>
								<td>
									<select name="g3_tahun_mulai" id="g3_tahun_mulai" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g3_tahun_mulai==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g3_tahun_mulai){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>-</td>
								<td>
									<select name="g3_tahun_akhir" id="g3_tahun_akhir" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g3_tahun_akhir==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g3_tahun_akhir){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm btncari"><i class='fa fa-search-plus'></i> Cari</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-block d-flex justify-content-center batas">
				<div>
	                <div class="row d-flex justify-content-center" style="padding:5px">
						<figure class="highcharts-figure">
						    <div id="grafik4" style="width: 400px;height: 400px"></div>
						</figure>
					</div>
					<div class="row" style="padding:5px">
						<font class=font_tbl>Keterangan Grafik :</font><br>
			            <table cellpadding=5 class="tbl table-bordered" width=100%>
			                <thead>
			                    <tr>
			                        <th rowspan=2>Tahun</th>
			                        <th colspan=2>Semester</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<?php
								  $data4_nm="";$data4_sm1="";$data4_sm2="";
				                  if (!empty($data4)) {
				                      foreach ($data4 as $row4) {
									  	echo "<tr><td>".$row4["tahun"]."</td><td align=right>".$row4["sm1"]."</td><td align=right>".$row4["sm2"]."</td></tr>";
										$data4_nm.="'".$row4["tahun"]."',";
										$data4_sm1.=$row4["sm1"].",";
										$data4_sm2.=$row4["sm2"].",";
									  }
								  }
								  $data4_nm=delkoma($data4_nm);
								  $data4_sm1=delkoma($data4_sm1);
								  $data4_sm2=delkoma($data4_sm2);
								?>
							</tbody>
						</table><br><br>
					</div>
					<div class="row" style="padding:10px">
						<table cellpadding=5 align=center>
							<tr>
								<td>Data Tahun</td>
								<td>:</td>
								<td>
									<select name="g4_tahun_mulai" id="g4_tahun_mulai" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g4_tahun_mulai==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g4_tahun_mulai){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>-</td>
								<td>
									<select name="g4_tahun_akhir" id="g4_tahun_akhir" class="form-control select2">
									<?php
										echo "<option value=''";
										if($g4_tahun_akhir==""){echo " selected ";}
										echo ">-Pilih-";
										for($j=TAHUN_MULAI;$j<=date("Y");$j++){
											echo "<option value='".$j."'";
											if($j==$g4_tahun_akhir){echo " selected ";}
											echo ">".$j;
										}
					                ?>
									</select>
								</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm btncari"><i class='fa fa-search-plus'></i> Cari</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
</form>
<script>
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'grafik1',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
	title: {
        text: 'Jumlah Responden Per Jenis Izin Tahun <?php echo $g1_tahun;?>',
		style: {
            fontWeight: 'normal',
			fontSize:'12pt',
        }
    },
	xAxis: {
        categories: [<?php echo $data1_nm?>],
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    series: [{
    		name: 'Semester 1',
        data: [<?php echo $data1_sm1?>]
    },{
    		name: 'Semester 2',
        data: [<?php echo $data1_sm2?>]
    }]
});

var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'grafik2',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
	title: {
        text: 'Skor IKM Per Izin Tahun <?php echo $g2_tahun;?>',
		style: {
            fontWeight: 'normal',
			fontSize:'12pt',
        }
    },
	xAxis: {
        categories: [<?php echo $data2_nm?>],
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    series: [{
    		name: 'Semester 1',
        data: [<?php echo $data2_sm1?>]
    },{
    		name: 'Semester 2',
        data: [<?php echo $data2_sm2?>]
    }]
});

var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'grafik3',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
	title: {
        text: 'Skor IKM Global <?php echo $g3_tahun;?>',
		style: {
            fontWeight: 'normal',
			fontSize:'12pt',
        }
    },
	xAxis: {
        categories: [<?php echo $data3_nm?>],
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    series: [{
    		name: 'Semester 1',
        data: [<?php echo $data3_sm1?>]
    },{
    		name: 'Semester 2',
        data: [<?php echo $data3_sm2?>]
    }]
});
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'grafik4',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
	title: {
        text: 'Total Responden IKM <?php echo $g4_tahun;?>',
		style: {
            fontWeight: 'normal',
			fontSize:'12pt',
        }
    },
	xAxis: {
        categories: [<?php echo $data4_nm?>],
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    series: [{
    		name: 'Semester 1',
        data: [<?php echo $data4_sm1?>]
    },{
    		name: 'Semester 2',
        data: [<?php echo $data4_sm2?>]
    }]
});
</script>

<script src="<?php echo media_url() ?>assets/js/select2.full.js"></script>
<script>
$(".select2").select2();
</script>
<script>
$(document).ready(function(){
	$(".btncari").click(function(){
	  document.frm.submit();
	});
});
$(".select2").select2();
</script>