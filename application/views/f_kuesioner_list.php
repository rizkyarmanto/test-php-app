<?php
	$modul="Kuesioner";
	$modula="t_kuesioner";
?>
<div style="padding:10px">
    <div class="row">
        <div class="col-12">
			<div class="table-responsive">
            <table width="100%" class="table table-hover table-striped" id="example">
                <thead>
                    <tr>
                        <th width=40%>Layanan</th>
                        <th width=5%>Tahun</th>
                        <th width=15%>Bulan</th>
                        <th width=5%>Status</th>
                        <th width=40% style="text-align: center;">Actions</th>
                    </tr>
                </thead>
				<tbody id="show_data">
				<?php
                  if (!empty($list)) {
                      foreach ($list as $row) {
					  	$nm_kunci="Lock";
						$img_kunci="green.gif";
						$hrs_kunci="1";
					  	if($row['kunci']==1){
					  		$nm_kunci="Unlock";
							$img_kunci="red.gif";
							$hrs_kunci="0";
						}
                ?>
					<tr>
						<td><?php echo $row['nm_layanan']; ?></td>
						<td><?php echo $row['tahun']; ?></td>
						<td><?php echo namabulan($row['bulan']); ?></td>
						<td><img src="<?php echo media_url() ?>/image/<?php echo $img_kunci; ?>"></td>
						<td>
						  <div align="center">
							<div class="dropdown">
							  	<button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Aksi
							  	</button>
							  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item btn-sm" href="javascript:view(<?php echo "'".$row['id_layanan']."','".$row['tahun']."','".$row['bulan']."'"; ?>)"><i class="fa fa-edit"></i> View</a>
								    <a class="dropdown-item btn-sm" href="javascript:kunci(<?php echo "'".$row['id_kunci']."','".$hrs_kunci."'"; ?>)"><i class="fa fa-edit"></i> <?php echo $nm_kunci;?></a>
								</div>
							</div>	          
						  </div>
						</td>
					</tr>
				<?php
						}
					}
				?>
				</tbody>
            </table>
			<form name=frm method=post>
				<input type=hidden name=id_layanan><input type=hidden name=tahun><input type=hidden name=bulan>
				<input type=hidden name=id_kunci><input type=hidden name=sts_kunci>
			</form>
			</div>
        </div>
    </div>        
</div>
<script>
function view(layanan,tahun,bulan){
	document.frm.id_layanan.value=layanan
	document.frm.tahun.value=tahun
	document.frm.bulan.value=bulan
	document.frm.action="<?php echo site_url($modula.'/view_bulan')?>"
	document.frm.submit();
}
function kunci(id,sts){
	document.frm.id_kunci.value=id
	document.frm.sts_kunci.value=sts
	document.frm.action="<?php echo site_url($modula.'/kunci_bulan')?>"
	document.frm.submit();
}
</script>