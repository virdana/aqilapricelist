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
                  <?php echo $this->session->flashdata('alert');?>
                  <form action="<?php echo base_url()?>f-admin/upgrade/update" method="post">  
                    <div class="panel-group" id="accordion">

                      <?php foreach ($data_upgrade as $upgr) { 
                      if($upgr->id_upgrade == 1) { //JIKA ITEMNYA ADDITIONAL PAGES?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="panel-title" title="Tampikan item <?=$upgr->nama_upgrade;?>">
                              <input type="checkbox" name="check_upgr-<?=$upgr->id_upgrade;?>" value="1" onChange="collapsePanel(this);" data-target="#collapse_<?=$upgr->id_upgrade;?>" <?php echo($upgr->is_checked)?'checked':''?>> 
                              <?=$upgr->nama_upgrade;?>
                            </label>
                            <div class="pull-right">
                              <a href="<?php echo base_url()?>f-admin/upgrade/delete_upgrade/<?=$upgr->id_upgrade?>" class="btn btn-xs btn-round btn-default" title="Hapus item <?=$upgr->nama_upgrade;?>" onclick="confirmDelete(event);"><i class="fa fa-remove"></i></a>
                            </div>
                        </div>
                        <div id="collapse_<?=$upgr->id_upgrade;?>" class="panel-collapse collapse <?php echo($upgr->is_checked)?'in':''?>">
                          <div class="panel-body">
                            <?php if(!empty($upgr->keterangan)) { ?>
                            <div class="col-sm-12">
                              <div class="alert alert-info">
                                <small class="text-info"><strong>Keterangan:</strong> <?=$upgr->keterangan;?></small>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              </div>
                            </div>
                            <?php } ?>
                            <div class="col-sm-7">                              
                              <?php if (!empty($upgr->multi_value)) { ?>
                                <?php foreach ($data_det_upgrade as $det_upgr) { ?>
                                  <?php if ($upgr->id_upgrade == $det_upgr->upgrade_id) { ?>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <div class="checkbox"><label title="Tampilkan item untuk paket <?=$det_upgr->nama_paket;?>"><input type="checkbox" name="check_det-<?=$upgr->id_upgrade;?>-<?=$det_upgr->id_detail;?>" value="1" <?php echo($det_upgr->is_checked)?'checked':''?>><?=$det_upgr->nama_paket;?> <?=$det_upgr->versi ? 'B' : 'A';?></label></div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-inline">
                                        <div class="form-group">
                                          <select name="det-hari-<?=$upgr->id_upgrade;?>-<?=$det_upgr->id_detail;?>" class="form-control input-sm">
                                            <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                              <option value="<?php echo $i?>" <?php echo($i==$det_upgr->hari)?'selected':''?>><?php echo $i?> Hari</option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="det-harga-<?=$upgr->id_upgrade?>-<?=$det_upgr->id_detail;?>" class="form-control input-sm" step="100" placeholder="Harga <?=$det_upgr->nama_paket;?>" title="Harga <?=$det_upgr->nama_paket;?>" value="<?php echo($det_upgr->harga)?$det_upgr->harga:''?>">
                                          </div>
                                        </div>
                                      </div>   
                                    </div>
                                  </div> <!-- end row -->
                                  <?php } ?>
                                <?php } ?>
                              <?php } 
                              else { ?>
                                <div class="input-group">
                                  <span class="input-group-addon">Rp</span>
                                  <input type="number" name="upgr-harga-<?=$upgr->id_upgrade?>" class="form-control input-sm" step="100" placeholder="Harga <?=$upgr->nama_upgrade;?>" title="Harga <?=$upgr->nama_upgrade;?>" value="<?php echo($upgr->harga)?$upgr->harga:''?>">
                                </div>
                              <?php } ?>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-group">
                                <textarea name="upgr-deskripsi-<?=$upgr->id_upgrade;?>" class="form-control input-sm" rows="8" placeholder="Deskripsi <?=$upgr->nama_upgrade;?>" title="Deskripsi <?=$upgr->nama_upgrade;?>"><?php echo($upgr->deskripsi)?$upgr->deskripsi:''?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php } else { // SELAIN ITEM ADDITIONAL PAGE?S ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="panel-title" title="Tampikan item <?=$upgr->nama_upgrade;?>">
                              <input type="checkbox" name="check_upgr-<?=$upgr->id_upgrade;?>" value="1" onChange="collapsePanel(this);" data-target="#collapse_<?=$upgr->id_upgrade;?>" <?php echo($upgr->is_checked)?'checked':''?>> 
                              <?=$upgr->nama_upgrade;?>
                            </label>
                            <div class="pull-right">
                              <a href="<?php echo base_url()?>f-admin/upgrade/delete_upgrade/<?=$upgr->id_upgrade?>" class="btn btn-xs btn-round btn-default" title="Hapus item <?=$upgr->nama_upgrade;?>" onclick="confirmDelete(event);"><i class="fa fa-remove"></i></a>
                            </div>
                        </div>
                        <div id="collapse_<?=$upgr->id_upgrade;?>" class="panel-collapse collapse <?php echo($upgr->is_checked)?'in':''?>">
                          <div class="panel-body">
                            <?php if(!empty($upgr->keterangan)) { ?>
                            <div class="col-sm-12">
                              <div class="alert alert-info">
                                <small class="text-info"><strong>Keterangan:</strong> <?=$upgr->keterangan;?></small>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              </div>
                            </div>
                            <?php } ?>
                            <div class="col-sm-7">                              
                              <?php if (!empty($upgr->multi_value)) { ?>
                                <?php foreach ($data_det_upgrade as $det_upgr) { ?>
                                  <?php if ($upgr->id_upgrade == $det_upgr->upgrade_id) { ?>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <div class="checkbox"><label title="Tampilkan item untuk paket <?=$det_upgr->nama_paket;?>"><input type="checkbox" name="check_det-<?=$upgr->id_upgrade;?>-<?=$det_upgr->id_detail;?>" value="1" <?php echo($det_upgr->is_checked)?'checked':''?>><?=$det_upgr->nama_paket;?></label></div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-inline">
                                        <div class="form-group">
                                          <select name="det-hari-<?=$upgr->id_upgrade;?>-<?=$det_upgr->id_detail;?>" class="form-control input-sm">
                                            <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                              <option value="<?php echo $i?>" <?php echo($i==$det_upgr->hari)?'selected':''?>><?php echo $i?> Hari</option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="det-harga-<?=$upgr->id_upgrade?>-<?=$det_upgr->id_detail;?>" class="form-control input-sm" step="100" placeholder="Harga <?=$det_upgr->nama_paket;?>" title="Harga <?=$det_upgr->nama_paket;?>" value="<?php echo($det_upgr->harga)?$det_upgr->harga:''?>">
                                          </div>
                                        </div>
                                      </div>   
                                    </div>
                                  </div> <!-- end row -->
                                  <?php } ?>
                                <?php } ?>
                              <?php } 
                              else { ?>
                                <div class="input-group">
                                  <span class="input-group-addon">Rp</span>
                                  <input type="number" name="upgr-harga-<?=$upgr->id_upgrade?>" class="form-control input-sm" step="100" placeholder="Harga <?=$upgr->nama_upgrade;?>" title="Harga <?=$upgr->nama_upgrade;?>" value="<?php echo($upgr->harga)?$upgr->harga:''?>">
                                </div>
                              <?php } ?>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-group">
                                <textarea name="upgr-deskripsi-<?=$upgr->id_upgrade;?>" class="form-control input-sm" rows="8" placeholder="Deskripsi <?=$upgr->nama_upgrade;?>" title="Deskripsi <?=$upgr->nama_upgrade;?>"><?php echo($upgr->deskripsi)?$upgr->deskripsi:''?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php 
                        }
                      } ?>

                      <div class="panel">
                        <div class="btn btn-block btn-default" data-toggle="modal" data-target="#tambahUpgradeModal"> <i class="fa fa-plus"></i> Tambah Item Upgrade </div>
                      </div>
                    </div> <!-- end panel group -->

                    <hr>
                    <div class="form-group text-right">
                      <button type="reset" name="" class="btn btn-default"><i class="fa fa-undo"></i> Reset</button>
                      <button type="submit" name="" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                    </div>
                  </form>
                  
                  <!-- Modal -->
                  <div id="tambahUpgradeModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <form action="<?php echo base_url()?>f-admin/upgrade/add_upgrade" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Item Upgrade</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="nama_upgrade" class="label-control">Nama Upgrade </label>
                                <input type="text" name="nama_upgrade" class="form-control input-sm" placeholder="Nama Item Upgrade">
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="keterangan" class="label-control">Keterangan (Untuk admin) </label>
                                    <textarea name="keterangan" class="form-control input-sm" rows="5" placeholder="Keterangan Item Upgrade"></textarea>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="deskripsi" class="label-control">Deskripsi (Untuk user) </label>
                                    <textarea name="deskripsi" class="form-control input-sm" rows="5" placeholder="Deskripsi Item Upgrade"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="label-control">Tipe Item</label>
                                <input type="hidden" name="multi_value" id="multi_value" class="form-control input-sm" value="0">
                                <ul class="nav nav-pills">
                                  <li class="dropdown active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span id="dropdown_title">Pilih tipe item</span>
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a data-toggle="tab" href="#tab_0" data-value="0">Satu harga untuk semua paket</a></li>
                                      <li><a data-toggle="tab" href="#tab_1" data-value="1">Harga berbeda untuk tiap paket</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="tab-content">
                                <div id="tab_0" class="tab-pane fade">
                                  <div class="form-group">
                                    <label for="harga" class="label-control">Harga</label>
                                    <div class="input-group">
                                      <span class="input-group-addon">Rp</span>
                                      <input type="number" name="harga" class="form-control input-sm" step="100" placeholder="Harga untuk semua paket">
                                    </div>
                                  </div>
                                </div>
                                <div id="tab_1" class="tab-pane fade">
                                  <hr>
                                  <?php foreach ($data_paket as $paket) { ?>
                                  <div class="row">
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="is_checked-<?=$paket->id_paket;?>" value="1"><?=$paket->nama_paket;?></label></div>
                                      </div>
                                    </div>
                                    <div class="col-sm-7">
                                      <div class="form-inline">
                                        <div class="form-group">
                                          <select name="hari-<?=$paket->id_paket;?>" class="form-control input-sm">
                                            <?php for ($i=0.25; $i<1.25 ; $i=$i+0.25) { ?>
                                              <option value="<?php echo $i?>"><?php echo $i?> Hari</option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" name="harga-<?=$paket->id_paket;?>" class="form-control input-sm" step="100" placeholder="Harga <?=$paket->nama_paket;?>">
                                          </div>
                                        </div>
                                      </div>   
                                    </div>
                                  </div> <!-- end row -->
                                  <?php } ?>

                                </div>
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
                            <button type="submit" class="btn btn-theme03"><i class="fa fa-check"></i> Add</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> 


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
      // $(function(){
      //     $('select.styled').customSelect();
      // });
  </script>

  <script type="text/javascript">
    //Activate the first tab
    $('#tambahUpgradeModal').on('shown.bs.modal', function(event) {
      console.log('SHOW!');
      $("#tambahUpgradeModal ul.dropdown-menu li a:first").click();
    });

    //Script untuk mengganti teks Dropdown Nav Pills yang terpilih (lihat Modal Add Upgrade)
    $("#tambahUpgradeModal ul.dropdown-menu li a").on("click", function() {
      $("#dropdown_title").text($(this).text());
      $("#multi_value").val($(this).data("value"));
    }); 

    $('.nav-pills a').on('shown.bs.tab', function(event){
      var href = event.target.hash;
      $("#tambahUpgradeModal .tab-content :input").prop("disabled", true);
      $(href + " :input").prop("disabled", false);
    });

    //Script untuk hide/show Panel Collapse dengan centang Checkbox
    function collapsePanel(e) {
      var target = $(e).data('target');
      if($(e).is(':checked')) {
        $(target).collapse("show");
      } else {
        $(target).collapse("hide");
      }
    };

  </script>
  <?php include "js_delete.php";?>
  </body>
</html>
