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
          	<h3><i class="fa fa-angle-right"></i> Pesanan</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <div class="content-panel">
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="javascript:void(0);" onclick="showTerms();" class="btn btn-theme03 pull-right" title="Konfigurasi Terms & Conditions untuk customer" style="margin-right: 10px;"><i class="fa fa-exclamation-circle"></i> Ketentuan &amp; Kondisi</a>
                      <a href="javascript:void(0);" onclick="showEmail();" class="btn btn-theme02 pull-right" title="Konfigurasi Email pesanan untuk customer" style="margin-right: 10px;"><i class="fa fa-envelope"></i> Konfigurasi Email</a>
                      <h4><i class="fa fa-angle-right"></i> Daftar Pesanan</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="col-sm-12">
                    <?php echo $this->session->flashdata('alert');?>
                  </div>

                  <table id="TableMainServer" class="table table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="no-sort">#</th>
                          <th>Tanggal Order</th>
                          <th>Paket</th>
                          <th>Nama Pemesan</th>
                          <th>Email</th>
                          <th>Total Hari</th>
                          <th>Grand Total (Rp)</th>
                          <th>Status</th>
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
      <?php require "modal_detail_pesanan.php";?>
      <?php require "modal_email_pesanan.php";?>
      <?php require "modal_ketentuan_kondisi.php";?>
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
    var initDataTable = $('#TableMainServer').DataTable({
      "bProcessing": true,
      "bServerSide": true,
      "order": [[1, 'DESC']],
      "ajax":{
            url :"<?php echo base_url()?>f-admin/pesanan/get_datatable",
            type: "post",  // type of method  , by default would be get
            error: function(){  // error handling code
              // $("#employee_grid_processing").css("display","none");
            }
          },
      "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
      }],
      "drawCallback": function( settings ) {
        maskInputMoney();
      }
    });
  </script>

  <!--script for modal Add/Update Pesanan-->
  <script>
    var jsonList = <?php echo $list?>;
    var jsonListPemesan = <?php echo $data_pemesan?>;
    var jsonListPenerima = <?php echo $data_penerima?>;
    var jsonListMedia = <?php echo $data_pesanan_media?>;
    var jsonListUpgrade = <?php echo $data_pesanan_upgrade?>;
    var jsonListEmail = <?php echo $data_email?>;
    var jsonListTerms = <?php echo $data_terms?>;

    function showTerms() {
      var getTerms = jsonListTerms;
      var textareaId = $("textarea[name='pesan_terms']").prop("id");
      console.log(getTerms[0].isi);
      CKEDITOR.instances[textareaId].setData(getTerms[0].isi);

      $("#ketentuanKondisiModal").modal("show");
    }
    function showEmail() {
      var getEmail = jsonListEmail;
      var textareaId = $("textarea[name='pesan_email']").prop("id");
      CKEDITOR.instances[textareaId].setData(getEmail[0].isi);

      $("#emailPesananModal").modal("show");
    }
    function showDetail(id) { //id_pesanan
      var getPesanan = jsonList.filter(function(index) { return index.id_pesanan == id });
      console.log("pemesan_id: "+getPesanan[0].pemesan_id);
      var getPemesan = jsonListPemesan.filter(function(index) { return index.id_pemesan == getPesanan[0].pemesan_id });
      var getPenerima = jsonListPenerima.filter(function(index) { return index.id_penerima == getPesanan[0].penerima_id });
      var getUpgrade = jsonListUpgrade.filter(function(index) { return index.pesanan_id == id });
      var getMedia = jsonListMedia.filter(function(index) { return index.pesanan_id == id });

      console.log (id);
      console.log (getPesanan);
      console.log (getPemesan);
      console.log (getPenerima);
      console.log (getUpgrade);
      console.log (getMedia);

      $("#id_pesanan").html(getPesanan[0].id_pesanan) ;
      $("#nama_paket").html(getPesanan[0].nama_paket) ;
      $("#grand_total").html(getPesanan[0].grandtotal) ;
      $("#total_hari").html(getPesanan[0].total_hari) ;
      
      $("#pemesan_nama").html(getPemesan[0].nama_pemesan) ;
      $("#pemesan_email").html(getPemesan[0].email);
      $("#pemesan_noHp").html(getPemesan[0].no_hp);
      $("#pemesan_noLine").html(getPemesan[0].no_line);

      if(getPenerima.length > 0) {
        $("#penerima_nama").html(getPenerima[0].nama_penerima) ;
        $("#penerima_noHp").html(getPenerima[0].no_hp);
        $("#penerima_alamat").html(getPenerima[0].alamat);
        $("#penerima_namaKota").html(getPenerima[0].nama_kota);
        $("#penerima_namaProvinsi").html(getPenerima[0].nama_provinsi);
        $("#detailPenerima").show();
      } else {
        $("#detailPenerima").hide();
      }

      var medium_body = (getPesanan[0].medium_body == 1) ? '<b class="text-success">Ya</b>' : '<b class="text-danger">Tidak</b>';
      $("#medium_body").html(medium_body) ;
      $("#warna_dominan").html(getPesanan[0].warna_dominan) ;
      $("#tambahan_tulisan").html(getPesanan[0].tambahan_tulisan) ;
      if(getPesanan[0].background_stock) {
        $("#background_stock").html(getPesanan[0].background_stock) ;
        $("#background_stock").parent("p").show();
      } else { 
        $("#background_stock").parent("p").hide(); }
      if(getPesanan[0].background_custom) {
        $("#background_custom").html(getPesanan[0].background_custom) ;
        $("#background_custom").parent("p").show();
      } else { 
        $("#background_custom").parent("p").hide(); }
      var pose = "Terserah Fentroart"; 
      var improve = "Terserah Fentroart";
      if(getPesanan[0].pose == 1) 
        { pose = getPesanan[0].text_pose; }
      if(getPesanan[0].improve == 1) 
        { improve = getPesanan[0].text_improve; }
      else if (getPesanan[0].improve == 3) 
        { improve = "Persiskan Foto"; }
      $("#pose").html(pose) ;
      $("#improve").html(improve) ;
      $("#keterangan_tambahan").html(getPesanan[0].keterangan) ;

      $("#detailUpgrade").html("");
      $.each(getUpgrade, function(index, value) {
        var jumlah = '';
        if(parseInt(value.jumlah) > 1) { jumlah = ' ('+ value.jumlah +' buah)'; }
        var html = [
            '<p>', 
              (parseInt(index)+1), '. ', value.nama_upgrade , jumlah,
            '</p>'
        ].join("\n");
        $("#detailUpgrade").append(html);
      });

      $("#detailMedia").html("");
      $.each(getMedia, function(index, value) {
        var jumlah = ' ('+ value.jumlah +' buah)';
        var warna_primer = value.nama_warna_primer || '-';
        var warna_sekunder = value.nama_warna_sekunder || '-';
        var html = [
            '<p>', 
              (parseInt(index)+1), '. ', value.nama_media , jumlah,
              '<br> <span style="margin-left:16px;">Warna Primer: </span>', warna_primer,
              '<br> <span style="margin-left:16px;">Warna Sekunder: </span>', warna_sekunder,
            '</p>'
        ].join("\n");
        $("#detailMedia").append(html);
      });

      $("#detailFoto").html("");
      var foto = JSON.parse(getPesanan[0].foto);
      $.each(foto, function(index, value) {
        var url = '<?php echo URL_ASSET;?>' + 'uploads/photos/' + value;
        var html = [
            '<a href="'+ url +'" target="_blank" style="position:relative; width:100%;">', 
              '<img src="'+ url +'" class="img-rounded" style="max-width:120px; max-height:120px;">',
            '</a>'
        ].join("\n");
        $("#detailFoto").append(html);
      });

      unmaskInputMoney();
      maskInputMoney();
      $("#detailPesananModal").modal("show");
    }

    function updateStatus(id) {
      var id_pesanan = parseInt(id);
      var status = $("#status_"+id+" :selected").val() || 0;
      // alert("id: "+id_pesanan+" - status: "+status);
      $.ajax({
        url: "<?php echo base_url().'f-admin/pesanan/update_pesanan'?>",
        type: "POST",
        //id & status
        data: { id_pesanan: id, status: status },
        cache: false,
        success: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        },
        error: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        }
      });
    }

    function updateEmail() {
      var textareaId = $("textarea[name='pesan_email']").prop("id");
      var isi = CKEDITOR.instances[textareaId].getData();
      $.ajax({
        url: "<?php echo base_url().'f-admin/pesanan/update_email'?>",
        type: "POST",
        //isi pesan
        data: { isi: isi },
        cache: false,
        success: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        },
        error: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        }
      });
    }

    function updateTerms() {
      var textareaId = $("textarea[name='pesan_terms']").prop("id");
      var isi = CKEDITOR.instances[textareaId].getData();
      $.ajax({
        url: "<?php echo base_url().'f-admin/pesanan/update_terms'?>",
        type: "POST",
        //isi pesan
        data: { isi: isi },
        cache: false,
        success: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        },
        error: function(response) {
            var data = JSON.parse(response);
            window.location.replace("<?php echo base_url().'f-admin/pesanan'?>");
            //return data;
        }
      });
    }

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
