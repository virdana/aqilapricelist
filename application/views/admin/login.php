<!DOCTYPE html>
<html lang="en">
  <!--header start-->
  <?php require "head.php";?>
  <!--header end-->

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo base_url();?>f-admin/login/do_login" method="post">
		        <h2 class="form-login-heading">sign in Fentroart</h2>
		        <div class="login-wrap">
		            <input type="text" name="fid" class="form-control" placeholder="username" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password">

		            <hr>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>

		            <br>
                    <?php echo $this->session->flashdata('alert');?>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL_JS?>jquery-3.1.1.min.js"></script>
    <script src="<?php echo URL_JS?>bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo URL_JS?>admin/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo URL_IMG;?>login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
