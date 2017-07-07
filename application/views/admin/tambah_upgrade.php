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
          	<h3><i class="fa fa-angle-right"></i> Upgrade</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Upgrade</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Upgrade</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_upgrade" class="form-control" placeholder="Nama Upgrade">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Deskripsi Upgrade</label>
                              <div class="col-sm-10">
                                  <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Upgrade"></textarea>
                                  <span class="help-block small">Untuk deskripsi yang berbentuk list, pisahkan tiap item dengan tanda titik koma <code>&#59;</code></span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="number" name="harga" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12 text-right">
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
