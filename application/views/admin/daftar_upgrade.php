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
                <div class="content-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="<?php echo base_url()?>f-admin/upgrade/tambah" class="btn btn-success pull-right" title="Tambah Data" style="margin-right: 10px;"><i class="fa fa-plus"></i></a>
                      <h4><i class="fa fa-angle-right"></i> Daftar Upgrade</h4>
                    </div>
                  </div>
                  <hr>
                  <table class="table table-striped table-advance table-hover">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>Nama Upgrade</th>
                          <th>Nama Paket</th>
                          <th>Deskripsi</th>
                          <th>Hari</th>
                          <th>Harga</th>
                          <th></th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach($data_upgrade as $upgrade) { ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $upgrade->nama_upgrade;?></td>
                            <td><?php echo $upgrade->nama_paket;?></td>
                            <td><?php echo $upgrade->deskripsi_upgrade;?></td>
                            <td><?php echo $upgrade->hari;?></td>
                            <td><?php echo $upgrade->harga;?></td>
                            <td>
                                <button class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            </td>
                        </tr>
                        <?php $no++;
                        } ?>
                        
                      </tbody>
                  </table>      
                  <?php echo $pagination; ?>
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
