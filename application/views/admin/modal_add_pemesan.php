 <!-- Modal -->
<div id="pemesanModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Pemesan</h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <img src="<?php echo URL_IMG.'loading.svg'?>" class="ajaxLoading" title="Loading..." alt="Loading..." style="display:none;"> 
        </div>
        <form id="pemesanForm" action="<?php echo base_url()?>f-admin/pemesan/add_pemesan" method="post">
          <div class="form-group">
            <input type="hidden" id="hidden_data_id" name="id_pemesan" class="form-control input-sm" placeholder="ID Pemesan" required="">
          </div>
          <div class="form-group">
            <label class="control-label">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" class="form-control input-sm" placeholder="Nama Pemesan" required="">
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" name="email" class="form-control input-sm" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">No. HP</label>
                <input type="number" name="no_hp" class="form-control input-sm" placeholder="Nomor HP">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">No. Line</label>
                <input type="number" name="no_line" class="form-control input-sm" placeholder="Nomor Line">
              </div>
            </div>
          </div>

          <hr>
          <div class="form-group text-right">
            <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
            <button type="submit" class="btn btn-theme03"><i class="fa fa-check"></i> Simpan</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div> 