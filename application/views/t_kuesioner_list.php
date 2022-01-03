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
                        <th width=40%>Nama Izin</th>
                        <th width=20%>Tanggal Isi</th>
                        <th width=40% style="text-align: center;">Actions</th>
                    </tr>
                </thead>
				<tbody id="show_data">
				<?php
                  if (!empty($list)) {
                      foreach ($list as $row) {
                ?>
					<tr>
						<td><?php echo $row['nm_layanan']; ?></td>
						<td><?php echo konversi_tanggal("d M Y",$row['tgl_isi']); ?></td>
						<td>
						  <div align="center">
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Aksi
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item btn-sm" href="javascript:view(<?php echo "'".$row['id_layanan']."','".IndonesiaTgl($row['tgl_isi'])."'"; ?>)"><i class="fa fa-edit"></i> View</a>
								    <a class="dropdown-item btn-sm" href="javascript:edit(<?php echo "'".$row['id_layanan']."','".IndonesiaTgl($row['tgl_isi'])."'"; ?>)"><i class="fa fa-edit"></i> Ubah</a>
								    <a class="dropdown-item btn-sm item_delete"  data-id_layanan="<?php echo $row['id_layanan']; ?>" data-tgl_isi="<?php echo $row['tgl_isi']; ?>" data-nm="<?php echo $row['nm_layanan'].", tanggal pengisian ".konversi_tanggal("d M Y",$row['tgl_isi']) ?>"><i class="fa fa-trash-o"></i> Hapus</a>
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
				<input type=hidden name=id_layanan><input type=hidden name=tgl_isi>
			</form>
			</div>
        </div>
    </div>        
</div>
<!--MODAL DELETE-->
  <form id=del>
      <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus <?php echo $modul?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="nm_del"></div>
            <div class="modal-footer">
			  <input type="hidden" name="id_layanan" id="id_layanan">
			  <input type="hidden" name="tgl_isi" id="tgl_isi">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
      </form>
  <!--END MODAL DELETE-->
<script>
function edit(layanan,tgl_isi){
	document.frm.id_layanan.value=layanan
	document.frm.tgl_isi.value=tgl_isi
	document.frm.action="<?php echo site_url($modula.'/add')?>"
	document.frm.submit();
}
function view(layanan,tgl_isi){
	document.frm.id_layanan.value=layanan
	document.frm.tgl_isi.value=tgl_isi
	document.frm.action="<?php echo site_url($modula.'/view')?>"
	document.frm.submit();
}
$(document).ready(function(){
	var a=0;
      $('#show_data').on('click','.item_delete',function(){
          var id_layanan = $(this).data('id_layanan');
          var tgl_isi = $(this).data('tgl_isi');
          var nm = $(this).data('nm');
          $('#nm_del').html('<strong><?php echo $modul?> '+nm+' akan dihapus?</strong>');
          $('#Modal_Delete').modal('show');
          $('[name="id_layanan"]').val(id_layanan);
          $('[name="tgl_isi"]').val(tgl_isi);
      });
      $('#btn_delete').on('click',function(){
          var id_layanan = $('#id_layanan').val();
          var tgl_isi = $('#tgl_isi').val();
		  del(id_layanan,tgl_isi)
          //document.location.href="<?php echo site_url('m_kuesioner/del/')?>"+id_del;
      });
	  function del(layanan,tgl_isi){
		document.frm.id_layanan.value=layanan
		document.frm.tgl_isi.value=tgl_isi
		document.frm.action="<?php echo site_url($modula.'/del')?>"
		document.frm.submit();
	  }
});
</script>