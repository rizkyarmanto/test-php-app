
<!DOCTYPE html>
<html><head>
  <title>Report Table</title>
  <style type="text/css">
  	@page{
	  margin: 1em 0.5em 1em 0.5em;
	}
  	@font-face { font-family: 'Roboto Regular'; font-weight: normal; src: url(\'<?php echo media_url() ?>fonts/Roboto-Regular.ttf\') format(\'truetype\'); } 
    .short{
      width: 50px;
    }
    .normal{
      width: 150px;
    }
 
    .tbl{
      border:1px solid #e3e3e3;
      border-collapse: collapse;
      font-family: 'Roboto Regular';
    }
 	div{
      font-family: 'Helvetica';
	  font-size:8pt;
	  text-align:center;
	}
    .tbl td{
      border: 1px solid #e3e3e3;
      padding: 2px;
      font-family: 'Helvetica';
	  font-size:6pt
    }
    .tbl th {
      border: 1px solid #e3e3e3;
      padding: 2px;
      font-family: 'Helvetica';
	  font-size:6pt
    }
	@page {
        margin: 0cm 1cm 0cm 1cm;
    }
	body {
        margin-top: 1cm;
        margin-bottom: 1.2cm;
    }
	footer {
        position: fixed; 
        bottom: 0cm; 
        height: 1cm;
      	font-family: 'Helvetica';
	  	font-size:6pt
    }
	.font_tbl{
        font-family: 'helvetica';
	  	font-size:7pt
	}
  </style>
</head><body>
<footer>IKM DPM-PTSP Kota Bekasi <?php echo konversi_tanggal('j M Y H:i:s')?></footer>
<div><?php echo $judul_laporan?></div><br>
		<?php 
		$nil=array();
		?>
           <table class="tbl table-bordered" width=100%>
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
           </table>
		   <table >
		   	<tr><td height=10></td></tr>
		   	<tr>
				<td>
					<font class="font_tbl">Keterangan Kode Kuesioner :</font><br>
		            <table cellpadding=5 class="tbl table-bordered">
	                    <tr>
	                        <th align=center>Kode</th>
	                        <th>Keterangan</th>
						</tr>
						<?php
		                  if (!empty($mkuis)) {
		                      foreach ($mkuis as $row) {
							  	echo "<tr><td align=center>".$row["kd_kuesioner"]."</td><td>".$row["kuesioner"]."</td></tr>";
							  }
						  }
						?>
					</table>
				</td>
			</tr>
		   </table>
</body></html>