 <!-- Modal -->
<div id="warnaModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="warnaModalHeader" class="modal-title">Daftar Warna Universal</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <div class="btn btn-success btn-block btn-sm" onclick="addWarna();"><i class="fa fa-plus"></i> Tambah Warna</div>
            </div>
          </div> 
        </div>
        <div id="formWarna" class="row collapse">
          <div class="form-group text-center">
            <img src="<?php echo URL_IMG.'loading.svg'?>" class="ajaxLoading" title="Loading..." alt="Loading..." style="display:none; height:30px; width:30px;"> 
          </div>
          <form action="<?php echo base_url()?>f-admin/warna/add_warna" method="post">
            <div class="col-xs-12">
              <div class="form-group">
                <input type="hidden" id="hiddenIdMedia" name="media_id" class="form-control input-sm" placeholder="id_media">
                <input type="hidden" id="hiddenIdWarna" name="id_warna" class="form-control input-sm" placeholder="id_warna">
              </div>
            </div> 
            <div class="col-xs-4">
              <div class="form-group">
                <input type="text" name="warna" class="form-control input-sm" placeholder="Nama Warna" title="Nama Warna">
              </div>
            </div>
            <div class="col-xs-3">
              <div class="form-group">
                <input type="text" name="hex" class="form-control input-sm" placeholder="Hex (ex. #FFFFFF)" title="Kode Hex Warna (contoh: #FF0000)">
              </div>
            </div>
            <div class="col-xs-3">
              <div class="form-group">
                <select name="kategori" class="form-control input-sm" title="Kategori Warna Media (Primer/Sekunder)">
                  <option value="0">Primer</option>
                  <option value="1">Sekunder</option>
                </select>
              </div>
            </div>
            <div class="col-xs-2">
              <button class="btn btn-sm btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>

        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#warna_primer">Primer</a></li>
          <li><a data-toggle="tab" href="#warna_sekunder">Sekunder</a></li>
        </ul>

        <div class="tab-content">
          <div id="warna_primer" class="tab-pane fade in active">
            <h5>Warna Primer</h5>
            <table id="tableWarnaPrimer" class="table table-striped table-condensed">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Warna</th>
                  <th class="text-center">Hex</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_primer as $primer) { ?>
                <tr>
                  <td><?=$i;?></td>
                  <td><?=$primer->warna;?></td>
                  <td class="text-center">
                    <span style="height:12px; width:12px; background-color:<?=$primer->hex;?>; display:inline-block; vertical-align:middle;"></span> <?=$primer->hex;?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <a href="#" onClick="editWarna(this);" data-value="<?=$primer->id_warna?>" class="btn btn-primary btn-xs edit-warna-btn" title="Ubah warna <?=$primer->warna?>"><i class="fa fa-pencil"></i></a>
                      <a href="<?=base_url()?>f-admin/warna/delete_warna/<?=$primer->id_warna?>" class="btn btn-danger btn-xs" title="Hapus warna <?=$primer->warna?>" onclick="confirmDelete(event);"><i class="fa fa-trash-o "></i></a>
                    </div>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>

          <div id="warna_sekunder" class="tab-pane fade">
            <h5>Warna Sekunder</h5>
            <table id="tableWarnaSekunder" class="table table-striped table-condensed">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Warna</th>
                  <th class="text-center">Hex</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_sekunder as $sekunder) { ?>
                <tr>
                  <td><?=$i;?></td>
                  <td><?=$sekunder->warna;?></td>
                  <td class="text-center">
                    <span style="height:12px; width:12px; background-color:<?=$sekunder->hex;?>; display:inline-block; vertical-align:middle;"></span> <?=$sekunder->hex;?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <a href="#" onClick="editWarna(this);" data-value="<?=$sekunder->id_warna?>" class="btn btn-primary btn-xs edit-warna-btn" title="Ubah warna <?=$sekunder->warna?>"><i class="fa fa-pencil"></i></a>
                      <a href="<?=base_url()?>f-admin/warna/delete_warna/<?=$sekunder->id_warna?>" class="btn btn-danger btn-xs" title="Hapus warna <?=$sekunder->warna?>" onclick="confirmDelete(event);"><i class="fa fa-trash-o "></i></a>
                    </div>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
          
        </div>

      </div>
    </div>
  </div>
</div> 

<script type="text/javascript">
  function loadWarna(id_media='', nama_media='') {
    $('#hiddenIdMedia').val(id_media);

    if(id_media == '') {
      id_media = 0;
      $('#warnaModalHeader').html('Daftar Warna Universal'); 
    }
    else {
      $('#warnaModalHeader').html('Daftar Warna ' + nama_media); 
    }

    $.when(getWarnaByMedia(id_media)).done(function(response, status) {
      var data = response; 
      var primer = data.primer;
      var sekunder = data.sekunder;
      var htmlPrimer = '<tr><td colspan="3" class="text-center">Tidak ada data</td></tr>'; 
      var htmlSekunder = '<tr><td colspan="3" class="text-center">Tidak ada data</td></tr>'; 

      // load data warna into tabel warna primer
      if(primer.length > 0) {
        htmlPrimer = '';
        $.each(primer, function(i) {
          htmlPrimer += '<tr>'
            + '<td>'+ (i+1) +'</td>'
            + '<td>'+ primer[i].warna +'</td>'
            + '<td class="text-center">'
              + '<span style="height:12px; width:12px; background-color:'+ primer[i].hex +'; display:inline-block; vertical-align:middle;"></span>' +primer[i].hex
            + '</td>'
            + '<td>'
              + '<div class="btn-group">'
                + '<a href="#" onClick="editWarna(this);" data-value="'+ primer[i].id_warna +'" class="btn btn-primary btn-xs edit-warna-btn" title="Ubah warna '+ primer[i].warna +'"><i class="fa fa-pencil"></i></a>'
                + '<a href="<?=base_url()?>f-admin/warna/delete_warna/'+ primer[i].id_warna +'" class="btn btn-danger btn-xs" title="Hapus warna '+ primer[i].warna +'" onclick="confirmDelete(event);"><i class="fa fa-trash-o"></i></a>'
              + '</div>'
            + '</td>'
          + '</tr>';
        });
      }

      // load data warna into tabel warna sekunder
      if(sekunder.length > 0) {
        htmlSekunder = '';
        $.each(sekunder, function(i) {
          htmlSekunder += '<tr>'
            + '<td>'+ (i+1) +'</td>'
            + '<td>'+ sekunder[i].warna +'</td>'
            + '<td class="text-center">'
              + '<span style="height:12px; width:12px; background-color:'+ sekunder[i].hex +'; display:inline-block; vertical-align:middle;"></span>' +sekunder[i].hex
            + '</td>'
            + '<td>'
              + '<div class="btn-group">'
                + '<a href="#" onClick="editWarna(this);" data-value="'+ sekunder[i].id_warna +'" class="btn btn-primary btn-xs edit-warna-btn" title="Ubah warna '+ sekunder[i].warna +'"><i class="fa fa-pencil"></i></a>'
                + '<a href="<?=base_url()?>f-admin/warna/delete_warna/'+ sekunder[i].id_warna +'" class="btn btn-danger btn-xs" title="Hapus warna '+ sekunder[i].warna +'" onclick="confirmDelete(event);"><i class="fa fa-trash-o"></i></a>'
              + '</div>'
            + '</td>'
          + '</tr>';
        });
      }

      $('#tableWarnaPrimer tbody').html(htmlPrimer);
      $('#tableWarnaSekunder tbody').html(htmlSekunder);
      $('#warnaModal').modal('show');
    });
  }

  //AJAX script to add/update data warna
   function addWarna(){
    //set form action (add/update) in modal based on button pressed
    $('#formWarna form').prop('action', "<?php echo base_url()?>f-admin/warna/add_warna");
    //Empty the form inputs
    $(':input','#formWarna')
      .not(':button, :submit, :reset, :hidden')
      .val('')
      .removeAttr('checked')
      .removeAttr('selected');
    //Check if the form collapse is opened
    if($("#formWarna").attr("aria-expanded") == "true") {
     $("#formWarna").collapse("hide");
    } else {
     $("#formWarna").collapse("show");
    }
  };
  function editWarna(event) {
        var id = $(event).data('value'); // Extract info from data-* attributes
        $('#formWarna form').prop('action', "<?php echo base_url()?>f-admin/warna/update_warna");
        $('#formWarna').find('#hiddenIdWarna').val(id);

        $('#formWarna form').hide();
        $('.ajaxLoading').show();
        $.when(getWarnaById(id)).done(function(response, status) {
            var data = JSON.parse(response);
            $("input[name='warna']").val(data.warna);
            $("input[name='hex']").val(data.hex);
            if(data.kategori > 0) {
              $("select[name='kategori']").val(data.kategori);
            } else {
              $("select[name='kategori']").val('0');
            }

            $('.ajaxLoading').hide();
            $('#formWarna form').show();
        });
        //Check if the form collapse is opened
        if($("#formWarna").attr("aria-expanded") != "true") {
           $("#formWarna").collapse("show");
        }
    };
  function getWarnaById(id='0') {
    return $.ajax({
        url: "<?php echo base_url().'f-admin/warna/get_warna_by_id'?>",
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
  function getWarnaByMedia(id_media='0') {
    // jika id_media == 0 maka yang di-load adalah warna universal
    return $.ajax({
        url: "<?php echo base_url().'f-admin/warna/get_warna_by_media'?>",
        type: "POST",
        dataType: "json",
        data: { id_media: id_media },
        cache: false,
        success: function(response) {
            // var data = JSON.parse(response);
            return response;
        },
        error: function(response) {
            // var data = JSON.parse(response);
            return response;
        }
    });
  } 
  </script>

  <?php include_once "js_delete.php";?>
</script>