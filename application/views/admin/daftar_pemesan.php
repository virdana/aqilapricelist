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
          	<h3><i class="fa fa-angle-right"></i> Pemesan</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="content-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="" data-toggle="modal" data-target="#pemesanModal" data-value="0" class="btn btn-theme02 pull-right" title="Tambah Data" style="margin-right: 10px;"><i class="fa fa-plus"></i></a>
                      <h4><i class="fa fa-angle-right"></i> Daftar Pemesan</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="col-sm-12">
                    <?php echo $this->session->flashdata('alert');?>
                  </div>

                  <table class="table table-striped table-advance table-hover">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>Nama Pemesan</th>
                          <th>Email</th>
                          <th>No. HP</th>
                          <th>No. Line</th>
                          <th>&nbsp;</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach($data_pemesan as $pemesan) { ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $pemesan->nama_pemesan;?></td>
                            <td><?php echo $pemesan->email;?></td>
                            <td><?php echo $pemesan->no_hp;?></td>
                            <td><?php echo $pemesan->no_line;?></td>
                            
                            <td>
                              <div class="btn-group">
                                <a href="#" id="updateBtn" data-toggle="modal" data-target="#pemesanModal" data-value="<?=$pemesan->id_pemesan?>" class="btn btn-primary btn-xs" title="Ubah <?=$pemesan->nama_pemesan?>"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url()?>f-admin/pemesan/delete_pemesan/<?=$pemesan->id_pemesan?>" class="btn btn-danger btn-xs" title="Hapus <?=$pemesan->nama_pemesan?>" onclick="confirmDelete(event);"><i class="fa fa-trash-o "></i></a>
                              </div>
                            </td>
                        </tr>
                        <?php $no++;
                        } ?>
                        
                      </tbody>
                  </table>      
                </div>
          		</div>
          	</div>
		      </section><!-- /wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->

      <!--modal start-->
      <?php require "modal_add_pemesan.php";?>
      <!--modal end-->

      <!--footer start-->
      <?php require "footer.php";?>
      <!--footer end-->
  </section>

  <!--footer start-->
      <?php require "foot.php";?>
  <!--footer end-->
  
  <!--script for modal Add/Update Pemesan-->
  <script>
    $('#pemesanModal').on('show.bs.modal', function (event) {
        var toggle = $(event.relatedTarget); // Button that triggered the modal
        var id = toggle.data('value'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('#hidden_data_id').val(id);

        //set form action (add/update) in modal based on button pressed
        if (id == 0) { //if user clicked "Add" button
          $('#pemesanForm').prop('action', "<?php echo base_url()?>f-admin/pemesan/add_pemesan");
          //Empty the form inputs
          $(':input','#pemesanForm')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        } else if (id > 0) { //if user clicked "Update" button
          $('#pemesanForm').prop('action', "<?php echo base_url()?>f-admin/pemesan/update_pemesan");
        }

        $('#pemesanForm').hide();
        $('.ajaxLoading').show();
        $.when(loadData(id)).done(function(response, status) {
            var data = JSON.parse(response);
            $("input[name='nama_pemesan']").val(data.nama_pemesan);
            $("input[name='email']").val(data.email);
            $("input[name='no_hp']").val(data.no_hp);
            $("input[name='no_line']").val(data.no_line);

            $('.ajaxLoading').hide();
            $('#pemesanForm').show();
        });
    });
    function loadData(id) {
        return $.ajax({
            url: "<?php echo base_url().'f-admin/pemesan/get_pemesan'?>",
            type: "POST",
            data: { id: id },
            cache: false,
            success: function(response) {
                var data = JSON.parse(response);
                return data;
            },
            error: function(response) {
                var data = JSON.parse(response);
                return data;
            }
        });
    } 
  </script>


  <?php include "js_delete.php"?>
  </body>
</html>
