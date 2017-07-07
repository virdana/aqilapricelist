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
          	<h3><i class="fa fa-angle-right"></i> Scope &amp; Pricing</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="content-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4><i class="fa fa-angle-right"></i> Pengaturan Scope &amp; Pricing</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="col-sm-12">
                    <?php echo $this->session->flashdata('alert');?>
                  </div>
                  <table class="table table-striped table-advance table-hover">
                    <form action="<?php base_url();?>scope/update" method="post">
                      <thead>
                        <tr>
                          <th>&nbsp;</th>
                          <th class="text-center">
                            <h4>Basic</h4>
                          </th>
                          <th class="text-center">
                            <h4>Standard</h4>
                          </th>
                          <th class="text-center">
                            <h4>Premium</h4>
                          </th>
                          <th class="text-center">
                            <h4>Design Only</h4>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Description</td>
                          <td>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="harga_basic" id="input_harga_basic" class="form-control input-sm input-sm" placeholder="Harga Basic" title="Harga Default untuk Basic" step="100" value="<?php echo ($basic->harga?$basic->harga:'')?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea name="deskripsi_basic" class="form-control input-sm" placeholder="Deskripsi Basic" title="Deskripsi untuk Basic" rows="5"><?php echo ($basic->deskripsi?$basic->deskripsi:'')?></textarea>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="harga_standard" id="input_harga_standard" class="form-control input-sm" placeholder="Harga Standard" title="Harga Default untuk Standard" step="100" value="<?php echo ($standard->harga?$standard->harga:'')?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea name="deskripsi_standard" class="form-control input-sm" placeholder="Deskripsi Standard" title="Deskripsi untuk Standard" rows="5"><?php echo ($standard->deskripsi?$standard->deskripsi:'')?></textarea>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="harga_premium" id="input_harga_premium" class="form-control input-sm" placeholder="Harga Premium" title="Harga Default untuk Premium" step="100" value="<?php echo ($premium->harga?$premium->harga:'')?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea name="deskripsi_premium" class="form-control input-sm" placeholder="Deskripsi Premium" title="Deskripsi untuk Premium" rows="5"><?php echo ($premium->deskripsi?$premium->deskripsi:'')?></textarea>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" name="harga_design" id="input_harga_design" class="form-control input-sm" placeholder="Harga Design Only" title="Harga Default untuk Design Only" step="100" value="<?php echo ($design->harga?$design->harga:'')?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea name="deskripsi_design" class="form-control input-sm" placeholder="Deskripsi Design Only" title="Deskripsi untuk Design Only" rows="5"><?php echo ($design->deskripsi?$design->deskripsi:'')?></textarea>
                            </div>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td class="text-left">Color</td>
                          <td>
                            <div class="form-group">
                              <input type="text" name="color_basic" class="form-control input-sm" placeholder="Color Basic" title="Tipe Warna untuk Basic" value="<?php echo ($basic->color?$basic->color:'')?>">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" name="color_standard" class="form-control input-sm" placeholder="Color Standard" title="Tipe Warna untuk Standard" value="<?php echo ($standard->color?$standard->color:'')?>">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" name="color_premium" class="form-control input-sm" placeholder="Color Premium" title="Tipe Warna untuk Premium" value="<?php echo ($premium->color?$premium->color:'')?>">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <input type="text" name="color_design" class="form-control input-sm" placeholder="Color Design Only" title="Tipe Warna untuk Design Only" value="<?php echo ($design->color?$design->color:'')?>">
                            </div>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td class="text-left">High Quality Softfile <small class="help-block">1 file format JPEG/PNG</small></td>
                          <td>
                            <input type="checkbox" name="softfile_basic" id="softfile_basic" value="1" style="height:20px; width:20px;" <?php echo ($basic->softfile)?'checked':''?> />
                          </td>
                          <td>
                            <input type="checkbox" name="softfile_standard" value="1" style="height:20px; width:20px;" <?php echo ($standard->softfile)?'checked':''?> />
                          </td>
                          <td>
                            <input type="checkbox" name="softfile_premium" value="1" style="height:20px; width:20px;" <?php echo ($premium->softfile)?'checked':''?>/>
                          </td>
                          <td>
                            <input type="checkbox" name="softfile_design" value="1" style="height:20px; width:20px;" <?php echo ($design->softfile)?'checked':''?>/>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td class="text-left">Background (Stock) <small class="help-block">Latar belakang gambar. Opsional</small></td>
                          <td>
                            <input type="checkbox" name="background_basic" value="1" style="height:20px; width:20px;" <?php echo ($basic->background)?'checked':''?>/>
                          </td>
                          <td>
                            <input type="checkbox" name="background_standard" value="1" style="height:20px; width:20px;" <?php echo ($standard->background)?'checked':''?>/>
                          </td>
                          <td>
                            <input type="checkbox" name="background_premium" value="1" style="height:20px; width:20px;" <?php echo ($premium->background)?'checked':''?>/>
                          </td>
                          <td>
                            <input type="checkbox" name="background_design" value="1" style="height:20px; width:20px;" <?php echo ($design->background)?'checked':''?>/>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td class="text-left">Medium Body <small class="help-block">Kepala hingga pinggang. Bisa request pose</small></td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">
                                <input type="checkbox" name="check_medium_basic" id="check_medium_basic" value="1" <?php echo ($basic->check_medium)?'checked':''?>>
                              </span>
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="medium_basic" id="input_medium_basic" class="form-control input-sm" placeholder="Harga Medium Body Basic" title="Harga Medium Body Basic" step="100" value="<?php echo ($basic->medium)?$basic->medium:''?>" <?php echo ($basic->check_medium)?'':'disabled'?>>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">
                                <input type="checkbox" name="check_medium_standard" id="check_medium_standard" value="1" <?php echo ($standard->check_medium)?'checked':''?>>
                              </span>
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="medium_standard" id="input_medium_standard" class="form-control input-sm" placeholder="Harga Medium Body Standard" title="Harga Medium Body Standard" step="100" value="<?php echo ($standard->medium)?$standard->medium:''?>" <?php echo ($standard->check_medium)?'':'disabled'?>>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">
                                <input type="checkbox" name="check_medium_premium" id="check_medium_premium" value="1" <?php echo ($premium->check_medium)?'checked':''?>>
                              </span>
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="medium_premium" id="input_medium_premium" class="form-control input-sm" placeholder="Harga Medium Body Premium" title="Harga Medium Body Premium" step="100" value="<?php echo ($premium->medium)?$premium->medium:''?>" <?php echo ($premium->check_medium)?'':'disabled'?>>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">
                                <input type="checkbox" name="check_medium_design" id="check_medium_design" value="1" <?php echo ($design->check_medium)?'checked':''?>>
                              </span>
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="medium_design" id="input_medium_design" class="form-control input-sm" placeholder="Harga Medium Body Design Only" title="Harga Medium Body Design Only" step="100" value="<?php echo ($design->medium)?$design->medium:''?>" <?php echo ($design->check_medium)?'':'disabled'?>>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Delivery Time</td>
                          <td>
                            <div class="form-group">
                              <select name="delivery_a_basic" class="form-control input-sm" title="Pilihan Delivery Time Normal">
                                <option value="false" selected="" disabled="">Hari</option>
                                <option value="0">None</option>
                                <?php for ($i=1; $i <16 ; $i++) { ?>
                                <option value="<?php echo $i?>" <?php echo ($i==$basic->delivery_a)?'selected':''?>><?php echo $i?> hari</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="row"> 
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <select name="delivery_b_basic" class="form-control input-sm" title="Pilihan Delivery Time Custom">
                                    <option value="false" selected="" disabled="">Hari</option>
                                    <option value="0">None</option>
                                    <?php for ($i=1; $i <16 ; $i++) { ?>
                                    <option value="<?php echo $i?>" <?php echo ($i==$basic->delivery_b)?'selected':''?>><?php echo $i?> hari</option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="form-group">
                                  <div class="input-group" title="Biaya Tambahan Custom">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="number" name="delivery_harga_basic" id="input_delivery_basic" class="form-control input-sm" placeholder="Biaya Tambahan" step="100" value="<?php echo ($basic->delivery_harga)?$basic->delivery_harga:''?>">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <select name="delivery_a_standard" class="form-control input-sm" title="Pilihan Delivery Time Normal">
                                <option value="false" selected="" disabled="">Hari</option>
                                <option value="0">None</option>
                                <?php for ($i=1; $i <16 ; $i++) { ?>
                                <option value="<?php echo $i?>" <?php echo ($i==$standard->delivery_a)?'selected':''?>><?php echo $i?> hari</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="row"> 
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <select name="delivery_b_standard" class="form-control input-sm" title="Pilihan Delivery Time Custom">
                                    <option value="false" selected="" disabled="">Hari</option>
                                    <option value="0">None</option>
                                    <?php for ($i=1; $i <16 ; $i++) { ?>
                                    <option value="<?php echo $i?>" <?php echo ($i==$standard->delivery_b)?'selected':''?>><?php echo $i?> hari</option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="form-group">
                                  <div class="input-group" title="Tambahan Biaya Custom">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="number" name="delivery_harga_standard" id="input_delivery_standard" class="form-control input-sm" placeholder="Biaya Tambahan" step="100" value="<?php echo ($standard->delivery_harga)?$standard->delivery_harga:''?>">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <select name="delivery_a_premium" class="form-control input-sm" title="Pilihan Delivery Time Normal">
                                <option value="false" selected="" disabled="">Hari</option>
                                <option value="0">None</option>
                                <?php for ($i=1; $i <16 ; $i++) { ?>
                                <option value="<?php echo $i?>" <?php echo ($i==$premium->delivery_a)?'selected':''?>><?php echo $i?> hari</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="row"> 
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <select name="delivery_b_premium" class="form-control input-sm" title="Pilihan Delivery Time Custom">
                                    <option value="false" selected="" disabled="">Hari</option>
                                    <option value="0">None</option>
                                    <?php for ($i=1; $i <16 ; $i++) { ?>
                                    <option value="<?php echo $i?>" <?php echo ($i==$premium->delivery_b)?'selected':''?>><?php echo $i?> hari</option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="form-group">
                                  <div class="input-group" title="Tambahan Biaya Custom">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="number" name="delivery_harga_premium" id="input_delivery_premium" class="form-control input-sm" placeholder="Biaya Tambahan" step="100" value="<?php echo ($premium->delivery_harga)?$premium->delivery_harga:''?>">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <select name="delivery_a_design" class="form-control input-sm" title="Pilihan Delivery Time Normal">
                                <option value="false" selected="" disabled="">Hari</option>
                                <option value="0">None</option>
                                <?php for ($i=1; $i <16 ; $i++) { ?>
                                <option value="<?php echo $i?>" <?php echo ($i==$design->delivery_a)?'selected':''?>><?php echo $i?> hari</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="row"> 
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <select name="delivery_b_design" class="form-control input-sm" title="Pilihan Delivery Time Custom">
                                    <option value="false" selected="" disabled="">Hari</option>
                                    <option value="0">None</option>
                                    <?php for ($i=1; $i <16 ; $i++) { ?>
                                    <option value="<?php echo $i?>" <?php echo ($i==$design->delivery_b)?'selected':''?>><?php echo $i?> hari</option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="form-group">
                                  <div class="input-group" title="Tambahan Biaya Custom">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="number" name="delivery_harga_design" id="input_delivery_design" class="form-control input-sm" placeholder="Biaya Tambahan" step="100" value="<?php echo ($design->delivery_harga)?$design->delivery_harga:''?>">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td class="text-left">Total Price</td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="price_basic" id="input_price_basic" class="form-control input-sm" placeholder="Total Price Basic" title="Total Price Basic" step="100" value="<?php echo ($basic->price)?$basic->price:''?>"readonly="">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="price_standard" id="input_price_standard" class="form-control input-sm" placeholder="Total Price Standard" title="Total Price Standard" step="100" value="<?php echo ($standard->price)?$standard->price:''?>"readonly="">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="price_premium" id="input_price_premium" class="form-control input-sm" placeholder="Total Price Premium" title="Total Price Premium" step="100" value="<?php echo ($premium->price)?$premium->price:''?>"readonly="">
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="number" name="price_design" id="input_price_design" class="form-control input-sm" placeholder="Total Price Design Only" title="Total Price Design Only" step="100" value="<?php echo ($design->price)?$design->price:''?>"readonly="">
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="5" class="text-right">
                            <button type="reset" class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                          </td>
                        </tr>
                      </form>
                  </table>      
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

  <script type="text/javascript">
    //Script untuk enable/disable medium body input by checkbox
    $("#check_medium_basic").on("change", function() { 
      $("#input_medium_basic").attr('disabled', !this.checked);
      calculatePrice('basic'); 
    });
    $("#check_medium_standard").on("change", function() {
      $("#input_medium_standard").attr('disabled', !this.checked); 
      calculatePrice('standard'); 
    });
    $("#check_medium_premium").on("change", function() {
      $("#input_medium_premium").attr('disabled', !this.checked);
      calculatePrice('premium'); 
    });
    $("#check_medium_design").on("change", function() {
      $("#input_medium_design").attr('disabled', !this.checked);
      calculatePrice('design'); 
    });
    
    //Script untuk menghitung total price basic, standard, dan premium
    $("#input_harga_basic, #input_medium_basic, #input_delivery_basic").on("keyup", function() {
        calculatePrice('basic');
    });
    $("#input_harga_standard, #input_medium_standard, #input_delivery_standard").on("keyup", function() {
        calculatePrice('standard');
    });
    $("#input_harga_premium, #input_medium_premium, #input_delivery_premium").on("keyup", function() {
        calculatePrice('premium');
    });
    $("#input_harga_design, #input_medium_design, #input_delivery_design").on("keyup", function() {
        calculatePrice('design');
    });

    function calculatePrice(paket) {
      var a=0; var b=0; var c=0;
      if(paket == 'design') {
        val_a = parseInt($("#input_harga_design").val()) || 0;
        val_c = parseInt($("#input_delivery_design").val()) || 0;
        if ($("#check_medium_design").is(':checked')) {
          val_b = parseInt($("#input_medium_design").val()) || 0;
        } 
        else { 
          val_b = 0;
        }
        $("#input_price_design").val(parseInt(val_a + val_b + val_c));
      }
      if(paket == 'premium') {
        val_a = parseInt($("#input_harga_premium").val()) || 0;
        val_c = parseInt($("#input_delivery_premium").val()) || 0;
        if ($("#check_medium_premium").is(':checked')) {
          val_b = parseInt($("#input_medium_premium").val()) || 0;
        } 
        else { 
          val_b = 0;
        }
        $("#input_price_premium").val(parseInt(val_a + val_b + val_c));
      }
      else if(paket == 'standard') {
        val_a = parseInt($("#input_harga_standard").val()) || 0;
        val_c = parseInt($("#input_delivery_standard").val()) || 0;
        if ($("#check_medium_standard").is(':checked')) {
          val_b = parseInt($("#input_medium_standard").val()) || 0;
        } 
        else { 
          val_b = 0;
        }
        $("#input_price_standard").val(parseInt(val_a + val_b + val_c));
      }
      else if(paket == 'basic') {
        val_a = parseInt($("#input_harga_basic").val()) || 0;
        val_c = parseInt($("#input_delivery_basic").val()) || 0;
        if ($("#check_medium_basic").is(':checked')) {
          val_b = parseInt($("#input_medium_basic").val()) || 0;
          console.log('checked: '+val_b);
        } 
        else { 
          val_b = -0;
          console.log('notchecked: '+val_b);
        }
          console.log('jadinya: '+ val_a +' '+ val_b +' '+ val_c);
        $("#input_price_basic").val(parseInt(val_a + val_b + val_c));
      }
    }
  </script>

  </body>
</html>
