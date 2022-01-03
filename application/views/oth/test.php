			<form action="http://localhost/koperasi/index.php/anggota/save" method=post>
                  <div class="modal-body">
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">No Anggota</label>
                           <div class="col-md-5">
                             <input type="text" name="no_anggota" id="no_anggota" class="form-control" placeholder="No Anggota" value='8393993'>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Nama</label>
                           <div class="col-md-8">
                             <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="Nama Anggota">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Alamat</label>
                           <div class="col-md-8">
						  <textarea name=alamat cols=10 rows=2 class="form-control" placeholder="Alamat"></textarea>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Nomor HP</label>
                           <div class="col-md-5">
						  <input type="text" name="handphone1" id="handphone1" class="form-control" placeholder="Nomor HP">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Nomor HP 2</label>
                           <div class="col-md-5">
						  <input type="text" name="handphone2" id="handphone2" class="form-control" placeholder="Nomor HP 2">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Email</label>
                           <div class="col-md-6">
						  <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Telpon</label>
                           <div class="col-md-6">
						  <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">ID</label>
                           <div class="col-md-6">
						  <input type="text" name="id" id="id" value='1' class="form-control">
                           </div>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
            </form>
