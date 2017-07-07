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
                  <div class="row">
                    <div class="col-sm-12">
                      <h4><i class="fa fa-angle-right"></i> Media Cetak</h4>
                    </div>
                  </div>
                  <hr>
                  <form action="<?php echo base_url()?>f-admin/mediacetak/update" method="post">
                    <div class="form-group">
                      <label for="deskripsi_media" class="label-control">Deskripsi Media Cetak</label>
                      <textarea name="deskripsi_media" class="form-control input-sm" rows="3" placeholder="Deskripsi Media Cetak"></textarea>
                    </div>

                    <?php foreach ($data_media as $media) { ?>

                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label><input type="checkbox" name="check-nama_media-<?=$media->id_media?>"> <?php echo $media->nama_media?></label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-9">
                        <div class="row">
                          <div class="col-sm-2">
                            <div class="form-group">
                              <select name="hari-<?=$media->id_media?>" class="form-control input-sm">
                                <?php for ($i=1; $i<16 ; $i++) { ?>
                                  <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="harga-<?=$media->id_media?>" class="form-control input-sm" step="100" placeholder="Harga <?php echo $media->nama_media?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <input type="number" name="berat-<?=$media->id_media?>" class="form-control input-sm" placeholder="Berat <?php echo $media->nama_media?>">
                              </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <input type="number" name="length-<?=$media->id_media?>" class="form-control input-sm" placeholder="Length <?php echo $media->nama_media?>">
                              </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <input type="number" name="height-<?=$media->id_media?>" class="form-control input-sm" placeholder="Height <?php echo $media->nama_media?>">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <input type="number" name="width-<?=$media->id_media?>" class="form-control input-sm" placeholder="Width <?php echo $media->nama_media?>">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="show_warna_primer-<?=$media->id_media?>" value="1">Warna Primer
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="show_warna_sekunder-<?=$media->id_media?>" value="1">Warna Sekunder
                                </label>
                              </div>
                              <!-- <select name="warna_primer-<?=$media->id_media?>" class="form-control input-sm" title="Warna Primer">
                                  <option value="hitam">Hitam</option>
                                  <option value="putih">Putih</option>
                                  <option value="abu-abu">Abu-abu</option>
                              </select> -->
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <!-- <select name="warna_sekunder-<?=$media->id_media?>" class="form-control input-sm" title="Warna Sekunder">
                                  <option value="hitam">Hitam</option>
                                  <option value="putih">Putih</option>
                                  <option value="abu-abu">Abu-abu</option>
                              </select> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php } ?>
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
