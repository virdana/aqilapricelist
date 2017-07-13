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
                <div class="content-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- <a href="<?php echo base_url()?>f-admin/mediacetak/tambah" class="btn btn-success pull-right" title="Tambah Data" style="margin-right: 10px;"><i class="fa fa-plus"></i></a> -->
                      <a href="" data-toggle="modal" data-target="#mediaCetakModal" data-value="0" class="btn btn-theme02 pull-right" title="Tambah Data" style="margin-right: 10px;"><i class="fa fa-plus"></i> Tambah</a>
                      <a href="javascript:void(0);" onclick="loadWarna();" class="btn btn-theme03 pull-right" title="Daftar Warna Universal" style="margin-right: 10px;"><i class="fa fa-paint-brush"></i> Warna</a>
                      <h4><i class="fa fa-angle-right"></i> Daftar Media Cetak</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="col-sm-12">
                    <?php echo $this->session->flashdata('alert');?>
                  </div>
                  <form action="<?php echo base_url()?>f-admin/mediacetak/update_deskripsi" method="post">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="deskripsi" class="label-control">Deskripsi Media Cetak (Untuk User)</label>
                        <textarea name="deskripsi" class="form-control input-sm" rows="3" placeholder="Deskripsi Media Cetak"><?=!empty($data_desc->deskripsi) ? $data_desc->deskripsi : ''?></textarea>
                      </div>
                      <div class="pull-right">
                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-sm btn-info"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                  </form>

                  <table id="TableMain" class="table table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="no-sort">#</th>
                          <th>Nama Media</th>
                          <th>Berat (gr)</th>
                          <th>Hari</th>
                          <th>Harga (Rp)</th>
                          <th>Shipping</th>
                          <th>Warna Primer</th>
                          <th>Warna Sekunder</th>
                          <th class="no-sort">Aksi</th>
                      </tr>
                      </thead>
                      <tbody id='bodytable'> </tbody>
                  </table>      
                </div>
          		</div>
          	</div>
		      </section><!-- /wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->

      <!--modal start-->
      <?php require "modal_add_media_cetak.php";?>
      <?php require "modal_warna.php";?>
      <!--modal end-->

      <!--footer start-->
      <?php require "footer.php";?>
      <!--footer end-->
  </section>

  <!--footer start-->
      <?php require "foot.php";?>
  <!--footer end-->
  
  <!--script for datatable Media-->
  <script type="text/javascript">
    //Initialize datatables
    var firstLoad = true;
    var table = $("#TableMain").DataTable({
      "columnDefs": [ {
              "searchable": false,
              "orderable": false,
              "targets": "no-sort"
          } ],
          // "order": [[ 1, 'asc' ]]    
    });
    table.on( 'order.dt search.dt', function () {
          table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = "<span style='display:block' class='text-center'>"+(i+1)+"</span>";
          } );
    } ).draw();

    //load data for datatable
    var jsonList = <?php echo $list;?>;
    loadDataTables(jsonList);

    function loadDataTables(json){
      //clear table
      table.clear().draw();
      for(var i=0; i<json.length; i++) {
        var showWarnaPrimer = (json[i].show_warna_primer == 1) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-remove text-danger"></i>';
        var showWarnaSekunder = (json[i].show_warna_sekunder == 1) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-remove text-danger"></i>';
        var showShipping = (json[i].show_shipping == 1) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-remove text-danger"></i>';

        table.row.add( [
              "",
              json[i].nama_media,
              '<span class="text-center" style="display:block;">'+json[i].weight+'</span>',
              json[i].hari,
              '<span class="pull-right money">'+json[i].harga+'</span>',
              '<span class="text-center" style="display:block;">'+showShipping+'</span>',
              '<span class="text-center" style="display:block;">'+showWarnaPrimer+'</span>',
              '<span class="text-center" style="display:block;">'+showWarnaSekunder+'</span>',
              '<td class="text-center"><div class="btn-group" >'+
                  '<a href="javascript:void(0)" id="warnaBtn'+i+'" class="btn btn-theme03 btn-xs" data-toggle="modal" onclick="loadWarna('+json[i].id_media+',\''+ json[i].nama_media +'\');" title="Warna '+json[i].nama_media+'" ><i class="fa fa-paint-brush"></i></a>'+
                  '<a href="javascript:void(0)" id="updateBtn'+i+'" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#mediaCetakModal" data-value="'+json[i].id_media+'" title="Ubah '+json[i].nama_media+'" ><i class="fa fa-pencil"></i></a>'+
                  '<a href="<?php echo base_url();?>f-admin/mediacetak/delete_media/'+json[i].id_media+'" class="btn btn-danger btn-xs" title="Hapus '+json[i].nama_media+'" onclick="confirmDelete(event);"><i class="fa fa-trash-o "></i></a>'+
                 '</div>'+
              '</td>'
          ] ).draw( false );
      }
      maskInputMoney();
      if (!firstLoad) {
        $('.divpopover').attr("data-content","ok");
        $('.divpopover').popover();
      }
      firstLoad = false;  
    }
  </script>

  <!--script for modal Add/Update Media-->
  <script>
    $('#mediaCetakModal').on('show.bs.modal', function (event) {
        var toggle = $(event.relatedTarget); // Button that triggered the modal
        var id = toggle.data('value'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('#hidden_data_id').val(id);

        //set form action (add/update) in modal based on button pressed
        if (id == 0) { //if user clicked "Add" button
          $('#mediaCetakForm').prop('action', "<?php echo base_url()?>f-admin/mediacetak/add_media");
          //Empty the form inputs
          $(':input','#mediaCetakForm')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        } else if (id > 0) { //if user clicked "Update" button
          $('#mediaCetakForm').prop('action', "<?php echo base_url()?>f-admin/mediacetak/update_media");
        }

        $('#mediaCetakForm').hide();
        $('.ajaxLoading').show();
        $.when(loadData(id)).done(function(response, status) {
            var data = JSON.parse(response);
            $("input[name='nama_media']").val(data.nama_media);
            $("input[name='harga']").val(data.harga);
            $("input[name='weight']").val(data.weight);
            $("input[name='length']").val(data.length);
            $("input[name='width']").val(data.width);
            $("input[name='height']").val(data.height);
            $("input[name='berat_shipping']").val(data.berat_shipping);
            $("input[name='harga_shipping']").val(data.harga_shipping);
            if(data.hari > 0) {
              $("select[name='hari']").val(data.hari);
            } else {
              $("select[name='hari']").val('1');
            }
            if(data.tipe_warna > 0) {
              $("input[id='tipe_warna_1']").prop('checked', true);
            } else {
              $("input[id='tipe_warna_0']").prop('checked', true);
            }
            if(data.show_warna_primer > 0) {
              $("input[name='show_warna_primer']").prop('checked', true);
            } else {
              $("input[name='show_warna_primer']").prop('checked', false);
            }
            if(data.show_warna_sekunder > 0) {
              $("input[name='show_warna_sekunder']").prop('checked', true);
            } else {
              $("input[name='show_warna_sekunder']").prop('checked', false);
            }
            if(data.show_shipping > 0) {
              $("input[name='show_shipping']").prop('checked', true);
            } else {
              $("input[name='show_shipping']").prop('checked', false);
            }

            $('.ajaxLoading').hide();
            $('#mediaCetakForm').show();
        });
    });
    function loadData(id) {
        return $.ajax({
            url: "<?php echo base_url().'f-admin/mediacetak/get_media'?>",
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


  <?php include "js_delete.php";?>
  </body>
</html>
