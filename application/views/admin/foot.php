<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL_JS?>jquery-3.1.1.min.js"></script>
    <script src="<?php echo URL_JS?>bootstrap.min.js"></script>
    <script src="<?php echo URL_JS?>admin/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo URL_JS?>admin/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo URL_JS?>admin/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo URL_JS?>admin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo URL_JS?>admin/jquery.nicescroll.js" type="text/javascript"></script>

    <!--Datatables-->
    <!-- <script src="<?php echo URL_ASSET?>datatables/js/dataTables.bootstrap.min.js"></script> -->
    <script src="<?php echo URL_ASSET?>datatables/js/jquery.dataTables.js"></script>

    <!--custom switch-->
    <script src="<?php echo URL_JS?>admin/bootstrap-switch.js"></script>

    <!--ckeditor-->
    <script src="<?php echo URL_JS?>../ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        if($('#ckeditor1').length != 0) {
            CKEDITOR.replace( 'ckeditor1' );
        }
        if($('#ckeditor2').length != 0) {
            CKEDITOR.replace( 'ckeditor2' );
        }
    </script>

    <!-- JS script for masking input -->
    <!-- JQuery Mask -->
    <script type="text/javascript" src="<?php echo URL_JS?>admin/jquery.mask.min.js"></script>
    <script type="text/javascript">
    function maskInputMoney(){
        console.log("Money Mask!");
        $('.money').mask('#.##0', {reverse: true});
      }
      function unmaskInputMoney(){
        console.log("Money UnMask!");
        $('.money').unmask();
      }
    </script>
    
    <!--common script for all pages-->
    <script src="<?php echo URL_JS?>admin/common-scripts.js"></script>
