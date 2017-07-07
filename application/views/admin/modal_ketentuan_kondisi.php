 <!-- Modal -->
<div id="ketentuanKondisiModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Konfigurasi Ketentuan &amp; Kondisi (Terms &amp; Conditions)</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label class="control-label" for="pesan_terms">Pesan Ketentuan &amp; Kondisi</label>
              <textarea name="pesan_terms" id="ckeditor2" rows="10" title="Pesan tambahan kepada customer. Selain rincian order oleh customer, pesan tambahan ini akan disertakan" placeholder="Pesan tambahan (ex. No Rekening seller untuk tujuan transfer customer)"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
          <button type="button" class="btn btn-theme03" onclick="updateTerms();"><i class="fa fa-check"></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div> 