 <!-- Modal -->
<div id="detailPesananModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Pesanan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <h4>
              <b>ID Order:</b> <span id="id_pesanan"></span> (Paket <span id="nama_paket">-</span>) 
              <span class="pull-right">
                <b>Grand Total:</b> Rp <span id='grand_total' class="money"></span> (<span id="total_hari"></span> hari) 
              </span>
            </h4>
          </div>
          
          <!-- Detail Pemesan -->
          <div class="col-sm-5">
            <div id="detailPemesan">
              <h4>Pemesan</h4>
              <p><b>Nama:</b> <span id="pemesan_nama"></span></p>
              <p><b>Email:</b> <span id="pemesan_email"></span></p>
              <p><b>No. HP:</b> <span id="pemesan_noHp"></span></p>
              <p><b>No. Line:</b> <span id="pemesan_noLine"></span></p>
            </div>
          </div>
          <!-- Detail Penerima -->
          <div class="col-sm-7">
            <div id="detailPenerima">
              <h4>Penerima</h4>
              <p><b>Nama:</b> <span id="penerima_nama"></span></p>
              <p><b>No. Hp:</b> <span id="penerima_noHp"></span></p>
              <p><b>Alamat:</b> <span id="penerima_alamat"></span></p>
              <p><b>Kota:</b> <span id="penerima_namaKota"></span></p>
              <p><b>Provinsi:</b> <span id="penerima_namaProvinsi"></span></p>
              <p><b>Metode Pengiriman:</b> <span id="opsi_pengiriman"></span></p>
            </div>
          </div>
        </div>

        <hr>
        <div class="row">
          <!-- Detail Pesanan -->
          <div class="col-sm-5">
            <h4>Ekstra</h4>
            <p><b>Medium Body:</b> <span id="medium_body"></span></p>
            <p><b>Warna Dominan:</b> <span id="warna_dominan"></span></p>
            <p><b>Tambahan Tulisan:</b> <span id="tambahan_tulisan"></span></p>
            <p><b>Background Stock:</b> <span id="background_stock"></span></p>
            <p><b>Background Custom:</b> <span id="background_custom"></span></p>
            <p><b>Request Pose:</b> <span id="pose"></span></p>
            <p><b>Improve Look:</b> <span id="improve"></span></p>
            <p><b>Keterangan Tambahan:</b> <span id="keterangan_tambahan"></span></p>
          </div>
          <!-- List upgrade -->
          <div class="col-sm-3">
            <h4>Upgrade</h4>
            <div id="detailUpgrade"> </div>
          </div>
          <!-- List media -->
          <div class="col-sm-4">
            <h4>Media Cetak</h4>
            <div id="detailMedia"> </div>
          </div>
        </div>
        
        <hr>
        <div class="row">
          <!-- Daftar foto -->
          <div class="col-sm-12">
            <h4>Foto</h4>
            <div id="detailFoto" class="center-block text-center"> </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</div> 