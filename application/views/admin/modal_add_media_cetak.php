 <!-- Modal -->
<div id="mediaCetakModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Media Cetak</h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <img src="<?php echo URL_IMG.'loading.svg'?>" class="ajaxLoading" title="Loading..." alt="Loading..." style="display:none;"> 
        </div>
        <form id="mediaCetakForm" action="<?php echo base_url()?>f-admin/mediacetak/add_media" method="post">
          <div class="form-group">
            <input type="hidden" id="hidden_data_id" name="id_media" class="form-control input-sm" placeholder="ID Media Cetak" required="">
          </div>
          <div class="form-group">
            <label class="control-label">Nama Media</label>
            <input type="text" name="nama_media" class="form-control input-sm" placeholder="Nama Media Cetak" required="">
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Hari</label>
                <select name="hari" class="form-control input-sm">
                  <?php for ($i=1; $i<16 ; $i++) { ?>
                    <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                  <?php } ?>
                </select>
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Harga</label>
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="number" name="harga" class="form-control input-sm" step="100" placeholder="Harga ">
                </div>
              </div>  
            </div>
            <div class="col-sm-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="show_warna_primer" value="1">Warna Primer
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="show_warna_sekunder" value="1">Warna Sekunder
                </label>
              </div>
            </div>
          </div>  
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">Length (Panjang)</label>
                <input type="number" name="length" class="form-control input-sm" placeholder="Length">
                </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">Width (Lebar)</label>
                <input type="number" name="width" class="form-control input-sm" placeholder="Width">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">Height (Tinggi)</label>
                <input type="number" name="height" class="form-control input-sm" placeholder="Height">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">Weight(gr)</label>
                <input type="number" name="weight" class="form-control input-sm" placeholder="Weight (gram)">
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label">Harga Shipping</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <input type="checkbox" name="show_shipping" value="1" title="Tambahkan biaya shipping">
                  </span>
                  <span class="input-group-addon">Rp</span>
                  <input type="number" name="harga_shipping" class="form-control input-sm" placeholder="Harga Shipping">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label">Berat Shipping(gr)</label>
                <input type="number" name="berat_shipping" class="form-control input-sm" placeholder="Berat Shipping (gram)">
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