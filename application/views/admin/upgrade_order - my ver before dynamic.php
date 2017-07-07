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
          	<h3><i class="fa fa-angle-right"></i> Upgrade Order</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="form-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4><i class="fa fa-angle-right"></i> Upgrade Order</h4>
                    </div>
                  </div>
                  <hr>
                  <form action="<?php echo base_url()?>f-admin/upgrade/update" method="post">  
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="panel-title">
                              <input type="checkbox" name="check_additional" value="1" data-toggle="collapse" data-target="#collapse1"> Additional Figures
                            </label>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-7">                              
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_additional_basic">Basic</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="additional_hari_basic" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="additional_harga_basic" class="form-control input-sm" step="100" placeholder="Harga Basic">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_additional_standard">Standard</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="additional_hari_standard" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="additional_harga_standard" class="form-control input-sm" step="100" placeholder="Harga Standard">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_additional_premium">Premium</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="additional_hari_premium" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="additional_harga_premium" class="form-control input-sm" step="100" placeholder="Harga Premium">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                            </div>
                            <div class="col-sm-5">
                              <div class="form-group">
                                <textarea name="additional_deskripsi" class="form-control input-sm" rows="8" placeholder="Deskripsi Additional Figures"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <label class="panel-title">
                              <input type="checkbox" name="check_background" value="1" data-toggle="collapse" data-target="#collapse2"> Custom Background
                            </label>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_background_basic">Basic</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="background_hari_basic" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="background_harga_basic" class="form-control input-sm" step="100" placeholder="Harga Basic">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_background_standard">Standard</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="background_hari_standard" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="background_harga_standard" class="form-control input-sm" step="100" placeholder="Harga Standard">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_background_premium">Premium</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="background_hari_premium" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="background_harga_premium" class="form-control input-sm" step="100" placeholder="Harga Premium">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                              <div class="row">
                                <div class="col-sm-5">
                                  <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="check_background_design">Design Only</label></div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="form-inline">
                                    <div class="form-group">
                                      <select name="background_hari_design" class="form-control input-sm">
                                        <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                          <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" name="background_harga_design" class="form-control input-sm" step="100" placeholder="Harga Design Only">
                                      </div>
                                    </div>
                                  </div>   
                                </div>
                              </div> <!-- end row -->
                            </div>
                            <div class="col-sm-5">
                              <div class="form-group">
                                <textarea name="background_deskripsi" class="form-control input-sm" rows="8" placeholder="Deskripsi Custom Background"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <label class="panel-title">
                            <input type="checkbox" name="check_source" value="1" data-toggle="collapse" data-target="#collapse3"> Include Source File
                          </label>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-5">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="source_harga" class="form-control input-sm" step="100" placeholder="Harga Include Source">
                              </div>
                            </div>
                            <div class="col-sm-offset-1 col-sm-6">
                              <div class="form-group">
                                <textarea name="source_deskripsi" class="form-control input-sm" rows="8" placeholder="Deskripsi Include Source"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <label class="panel-title">
                            <input type="checkbox" name="check_license" value="1" data-toggle="collapse" data-target="#collapse4"> Free License
                          </label>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-5">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="license_harga" class="form-control input-sm" step="100" placeholder="Harga License">
                              </div>
                            </div>
                            <div class="col-sm-offset-1 col-sm-6">
                              <div class="form-group">
                                <textarea name="license_deskripsi" class="form-control input-sm" rows="6" placeholder="Deskripsi License"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <label class="panel-title">
                            <input type="checkbox" name="check_softfile" value="1" data-toggle="collapse" data-target="#collapse5"> Custom Softfile Size
                          </label>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-5">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="softfile_harga" class="form-control input-sm" step="100" placeholder="Harga Custom Softfile Size">
                              </div>
                            </div>
                            <div class="col-sm-offset-1 col-sm-6">
                              <div class="form-group">
                                <textarea name="softfile_deskripsi" class="form-control input-sm" rows="6" placeholder="Deskripsi Custom Softfile Size"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <label class="panel-title">
                            <input type="checkbox" name="check_png" value="1" data-toggle="collapse" data-target="#collapse6"> Add PNG/JPEG File
                          </label>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-sm-5">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="png_harga" class="form-control input-sm" step="100" placeholder="Harga Add PNG/JPEG File">
                              </div>
                            </div>
                            <div class="col-sm-offset-1 col-sm-6">
                              <div class="form-group">
                                <textarea name="png_deskripsi" class="form-control input-sm" rows="6" placeholder="Deskripsi Add PNG/JPEG File"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div> <!-- end panel group -->
                    <hr>
                    <div class="form-group text-right">
                      <button type="reset" name="" class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
                      <button type="submit" name="" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
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
