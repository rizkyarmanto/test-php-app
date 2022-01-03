<?php
	$modul="Kuesioner";
	$modula="m_kuesioner";
?>
<div style="padding:10px">
    <div class="row">
        <div class="col-12">
			<div class="table-responsive">
            <table width="100%" class="table table-hover table-striped" id="example">
                <thead>
                    <tr>
                        <th width=15%>Kode Kuesioner</th>
                        <th width=35%>Kuesioner</th>
                        <th width=8%>Nilai Min</th>
                        <th width=8%>Nilai Max</th>
                        <th width=10%>Status</th>
                        <th width=24% style="text-align: center;">Actions</th>
                    </tr>
                </thead>
				<tbody id="show_data">
				<?php
                  if (!empty($list)) {
                      foreach ($list as $row) {
                ?>
					<tr>
						<td><?php echo $row['kd_kuesioner']; ?></td>
						<td><?php echo $row['kuesioner']; ?></td>
						<td><?php echo $row['nilai_min']; ?></td>
						<td><?php echo $row['nilai_max']; ?></td>
						<td><?php echo $row['nm_aktif']; ?></td>
						<td>
						  <div align="center">
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Aksi
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item btn-sm" href="<?php echo site_url('m_kuesioner/add/'.$row['id_mkuesioner']) ?>"><i class="fa fa-edit"></i> Ubah</a>
								    <a class="dropdown-item btn-sm item_delete"  data-id="<?php echo $row['id_mkuesioner'] ?>" data-nm="<?php echo $row['kuesioner'] ?>"><i class="fa fa-trash-o"></i> Hapus</a>
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
			  <input type="hidden" name="id_del" id="id_del">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
      </form>
  <!--END MODAL DELETE-->
  <script>
	$(document).ready(function(){
		var a=0;
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            var nm = $(this).data('nm');
            $('#nm_del').html('<strong><?php echo $modul?> '+nm+' akan dihapus?</strong>');
            $('#Modal_Delete').modal('show');
            $('[name="id_del"]').val(id);
        });
        $('#btn_delete').on('click',function(){
            var id_del = $('#id_del').val();
            document.location.href="<?php echo site_url('m_kuesioner/del/')?>"+id_del;
        });
	});
  </script>