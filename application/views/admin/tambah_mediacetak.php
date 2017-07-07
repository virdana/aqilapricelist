<!DOCTYPE html>
<html lang="en">

  <!--header start-->
  <?php require "head.php";?>
  <!--header end-->
  <body>

  <section id="container" >
      <!--header start-->
      <?php require "header.php";?>
      <!--header end-->

      <!--sidebar start-->
      <?php require "sidebar.php";?>
      <!--sidebar end-->
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Media Cetak</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Media Cetak</h4>
                      <form class="style-form" method="get">
                          <div class="form-group">
                              <label class="control-label">Nama Media</label>
                              <input type="text" name="nama_media" class="form-control input-sm" placeholder="Nama Media Cetak">
                          </div>
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label class="control-label">Hari</label>
                                <select name="hari-" class="form-control input-sm">
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
                                  <input type="number" name="harga-" class="form-control input-sm" step="100" placeholder="Harga ">
                                </div>
                              </div>  
                            </div>
                            <div class="col-sm-4">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="show_warna_primer-" value="1">Warna Primer
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="show_warna_sekunder-" value="1">Warna Sekunder
                                </label>
                              </div>
                            </div>
                          </div>  
                          <div class="row">
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label class="control-label">Weight (Berat)</label>
                                <input type="number" name="weight-" class="form-control input-sm" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label class="control-label">Length (Panjang)</label>
                                <input type="number" name="length-" class="form-control input-sm" placeholder="Length">
                                </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label class="control-label">Width (Lebar)</label>
                                <input type="number" name="width-" class="form-control input-sm" placeholder="Width">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label class="control-label">Height (Tinggi)</label>
                                <input type="number" name="height-" class="form-control input-sm" placeholder="Height">
                              </div>
                            </div>
                          </div>
                        

                          <div class="form-group">
                            <div class="text-right">
                              <button type="reset" class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
                              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                          </div>
                      </form>
                  </div>
          		</div>
          	</div>
		      </section><!-- /wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->

      <!--footer start-->
      <?php require "footer.php";?>
      <!--footer end-->
  </section>

  <!--footer start-->
      <?php require "foot.php";?>
  <!--footer end-->
  <!--script for this page-->
  <script>
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
  </script>

  </body>
</html>
