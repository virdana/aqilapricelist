<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fentroart - Art and Design Lounge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Let's Party Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo URL_CSS;?>bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo URL_CSS;?>style.css" type="text/css" rel="stylesheet" media="all">   
<link href="<?php echo URL_CSS;?>font-awesome.min.css" rel="stylesheet">		<!-- font-awesome icons -->    
<link rel="stylesheet" href="<?php echo URL_CSS;?>lightbox.css"> 
<link rel="stylesheet" href="<?php echo URL_CSS;?>flexslider.css" type="text/css" media="screen" /> 
<!-- Krajee File Input -->
<link href="<?php echo URL_CSS?>fileinput.min.css" rel="stylesheet">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="<?php echo URL_JS;?>jquery-3.1.1.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="https://fonts.googleapis.com/css?family=Trochut:400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
<style type="text/css">
		label.error {
			color: crimson;
		}
		.price-type:hover {
			background-color: #f4f4f4;
		}
		.price-title {
			font-weight: bold;
		}
		.price-image {
			padding: 15px;
		}
		.price-desc {
			min-height: 240px;
		}
		@media screen and (max-width: 480px) {
			*, th {
				font-size: 98% !important; 
			}
			.label {
				font-size: 70% !important; 
			}
			.section-title, .add-upgrade {
				font-size: 100% !important; 
			}
			.price-type {
				margin-bottom: 10px;
				border-radius: 10px;
			}
			.price-type:nth-child(1) {
				background-color: #f4f4f4;
			}
			.price-type:nth-child(2) {
				background-color: #f6fbfe;
			}
			.price-type:nth-child(3) {
				background-color: #fff9e0;
			}
			.price-type:nth-child(4) {
				background-color: #fff5f7;
			}
			.price-desc {
				min-height: 1px;
			}
		}
		.price-info {
			padding: 10px;
			border-top: 1px solid #ddd;
		}
		a.add-upgrade {
			font-size: 25px;
			font-weight: bolder;
			vertical-align: middle;
		}
		ul.check-summary {
			list-style:none;
		    padding: 0;
		}
		/*ul.check-summary li{
			line-height:1.3em;
		    margin: .25em 0;
		    padding: 0 0 0 20px;
		    background:url(<?=URL_IMG."check.png"?>) no-repeat left top;
		    background-size: contain; 
		}*/
		.thumb {
		    height: 80px;
		    border: 1px solid #000;
		    margin: 10px 5px 0 0;
		}
		.nav-pills > li > a:focus, .nav-pills > li > a:hover {
			color: #9c1434;
		}
		.nav-pills > li > a {
			color: #333;
			border-radius:0px;
			margin-right: 20px; 
			margin-bottom: 10px;
		}
		.nav>li>a:focus, .nav > li > a:hover {
		    text-decoration: none;
    		background-color: #e8f3fc;
    		color: #333; 
		}
		.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
	    color: #fff;
			/*background-color: #e2456a;*/
			background-color: #337ab7;
		}
		.nav-pills > li > a:after {
			transition: 0.5s all;
		    -webkit-transition: 0.5s all;
		    -moz-transition: 0.5s all;
		    -o-transition: 0.5s all;
		    -ms-transition: 0.5s all;
		   	border-top: 20px inset transparent;
		   	border-bottom: 20px inset transparent;
			border-left: 20px solid #fff;
			position: absolute;
			content: "";
			top: 0;
			right: -20px;
		}
		.nav-pills > li > a:hover::after, .nav-pills > li > a:focus::after {
	   	border-top: 20px inset transparent;
	   	border-bottom: 20px inset transparent;
			/*border-left: 20px solid #f9dfe5;*/
			border-left: 20px solid #e8f3fc;
			position: absolute;
			content: "";
			top: 0;
			right: -20px;
		}
		.nav-pills > li.disabled > a:hover::after, .nav-pills > li.disabled > a:focus::after {
		 	border-top: 20px inset transparent;
		   	border-bottom: 20px inset transparent;
			border-left: 20px solid transparent;
			position: absolute;
			content: "";
			top: 0;
			right: -20px;   
		}
		.nav-pills > li.active > a::after {
		   	border-top: 20px inset transparent;
		   	border-bottom: 20px inset transparent;
			/*border-left: 20px solid #e2456a;*/
			border-left: 20px solid #337ab7;
			position: absolute;
			content: "";
			top: 0;
			right: -20px;
		}
		.w3stitle{
			margin-top: 30px;
			margin-bottom: 40px;
		}
		h3.w3stitle span{
			color: #333;
		}
		div.section-header { 
			display: block;
		    margin-bottom: 20px;
		}
		span.section-title {
			font-family: 'Trochut', cursive;
		    font-size: 2em;
		    font-weight: 700;
			/*background-color: #eaeaea;*/
			color: #333;
			padding: 10px;
		}
		.resp-tabs-container{
			/*border-radius:15px;*/
			background-color: #f4f4f4;
		}
		.contact-grid {
			background-color: white;
		}
		.contact-grid.agileits {
			/*border-radius:15px;*/
			margin-bottom: 15px;
			background-color: #f4f4f4;
		}
		.agileits-login {
			/*border-radius:15px;*/
			padding-bottom: 40px;
			color: #333;
		}
		.agileits-login label {
			color: #333;
		}
		#isiFormPemesan {
			margin-bottom: 15px;
		}
		#formPemesan .form-group {
			margin-bottom: 5px;
		}
		#tableUpgrade tr{
			padding-top: 5px;
			padding-bottom: 5px;
		}
		#tableMedia tr{
			padding-top: 5px;
			padding-bottom: 5px;
		}
		caption {
			color: #333;
			font-weight: bolder;
		}
		#message {
		    position: fixed;
		    top: 20%;
		    left: 0;
		    width: 100%;
		    padding: 0 20%;
		    z-index: 9999;
		}
		button[name="set_btn"] {
			margin: 20px;
		}
		div#infoTotal {
			padding: 15px;
    		background-color: #fff;
    		color: #333;
    		/*border-radius: 10px;*/
		}
		.btn-md {
			font-size: 16px;
		}
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> 
	<!-- banner -->
	<div id="home" class="w3ls-banner jarallax"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
		</div>	
		<!-- //header -->

		<div id="message">
			<?php echo $this->session->flashdata('alert');?>
			<?php //echo($_SESSION['alert']);?>
		</div>

	</div>	
	<!-- //banner --> 
	
	<!-- TESTER -->
	<?php 
		/*echo "<pre> SESSION: ";
		print_r($_SESSION); 
		echo "</pre>";*/
		/*echo "<pre> PAKET: ";
		(isset($_SESSION['pesanan']['kode_paket'])) ? print_r(${$_SESSION['pesanan']['kode_paket']}) : "Belum Dipilih"; 
		echo "</pre>" */
	 ?>

	<div id="startOrder" style="margin-top: 40px; margin-bottom: 5px;">
		<ul class="nav nav-pills text-center">
		  <li class="col-sm-2 col-xs-12 active"><a href="#pilihPaket" data-toggle="pill">Pilih Paket</a></li>
		  <li class="col-sm-2 col-xs-12"><a href="#pilihUpgrade" data-toggle="pill">Pilih Upgrade</a></li>
		  <?php if(isset($_SESSION['pesanan']['id_paket']) && $_SESSION['pesanan']['id_paket'] == 4) { ?>
		  <?php } else { ?>
		  	<li class="col-sm-2 col-xs-12"><a href="#pilihMedia" data-toggle="pill">Pilih Media</a></li>
		  <?php } ?>
		  <li class="col-sm-2 col-xs-12"><a href="#isiFormPemesan" data-toggle="pill">Isi Form Pemesan</a></li>
		</ul>
	</div>
	<hr>
	<!-- blog -->
	<div class="container-fluid">
	<div class="row">
	<div id="colStartOrderTabs" class="col-sm-6">
	<div id="startOrderTabs" class="tab-content">

	<div id="pilihPaket" class="tab-pane fade in active">
		<div class="container-fluid">
			<h3 class="w3stitle"><span>Pilih Tipe Ilustrasi</span></h3>     
			<div class="contact-row agileits-w3layouts">  
				<div class="col-md-12 contact-w3lsleft">
					<div class="contact-grid agileits" style="padding-left: 5px;padding-right: 20px; background-color: white;">
						<form action="<?php echo base_url()?>home/set_pesanan" method="post">
							<div class="row">
								<div class="col-md-3 price-type" style="padding:10px;">
										<div class="col-md-12">
											<!-- <h2>Basic</h2> -->
										</div>
										<div class="col-md-12 text-center price-image">
											<img src="http://localhost/github/aqilapricelist/assets/images/basic.jpg" height="220">
										</div>
										<div class="col-md-12 price-info price-desc">
											<p class="price-title">Deskripsi</p>
											<p><?php echo isset($basic->deskripsi)?$basic->deskripsi:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Color</p>
											<p class="text-center"><?php echo isset($basic->color)?$basic->color:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">High Quality Softfile</p>
											<p class="text-center"><i class="fa <?php echo $basic->softfile?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Background (Stock)</p>
											<p class="text-center"><i class="fa <?php echo $basic->background?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Kepala Hingga Pinggang</p>
											<div class="text-center">
												<?php if($basic->check_medium) { ?>
	                        <div class="checkbox">
	                            <label> <input type="checkbox" name="check_medium_basic" id="check_medium_basic" data-value="<?php echo $basic->medium?$basic->medium:0?>" >Rp <?php echo isset($basic->medium) ? number_format($basic->medium,0,',','.'):'-'; ?> </label>
	                        </div>
	                      <?php } else { ?>
	                        <i class="fa fa-minus"></i>
	                      <?php } ?>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Delivery Time</p>
											<div class="center-block">
												<div style="margin: auto; width: fit-content">
													<div class="radio">
		                        <label><input type="radio" name="delivery_basic" value="a" checked="true"><?php echo $basic->delivery_a?$basic->delivery_a:'-'?> Hari</label>
		                      </div>
		                      <div class="radio">
		                        <label><input type="radio" name="delivery_basic" id="delivery_basic" value="b" data-value="<?php echo $basic->delivery_harga?$basic->delivery_harga:0?>">
		                        <?php echo $basic->delivery_b?$basic->delivery_b:'-'?> Hari <?php echo isset($basic->delivery_harga)?
		                        "(+Rp ".number_format($basic->delivery_harga,0,',','.').")":''?> </label>
		                      </div>
												</div>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<div class="text-center">
												<button type="submit" name="set_btn" value="<?=$basic->kode_paket.'-'.$basic->id_paket?>" class="btn btn-default">Select Rp <span id="price_basic" class="money"><?php echo $basic->harga?></span></button>
											</div>
										</div>
								</div>
								<div class="col-md-3 price-type" style="padding:10px;">
										<div class="col-md-12">
											<!-- <h2>Standard</h2> -->
										</div>
										<div class="col-md-12 text-center price-image">
											<img src="http://localhost/github/aqilapricelist/assets/images/standard.jpg" height="220">
										</div>
										<div class="col-md-12 price-info price-desc">
											<p class="price-title">Deskripsi</p>
											<p><?php echo isset($standard->deskripsi)?$standard->deskripsi:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Color</p>
											<p class="text-center"><?php echo isset($standard->color)?$standard->color:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">High Quality Softfile</p>
											<p class="text-center"><i class="fa <?php echo $standard->softfile?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Background (Stock)</p>
											<p class="text-center"><i class="fa <?php echo $standard->background?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Kepala Hingga Pinggang</p>
											<div class="text-center">
												<?php if($standard->check_medium) { ?>
	                        <div class="checkbox">
	                            <label> <input type="checkbox" name="check_medium_standard" id="check_medium_standard" data-value="<?php echo $standard->medium?$standard->medium:0?>">Rp <?php echo isset($standard->medium) ? number_format($standard->medium,0,',','.'):'-'; ?> </label>
	                        </div>
	                      <?php } else { ?>
	                        <i class="fa fa-minus"></i>
	                      <?php } ?>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Delivery Time</p>
											<div class="center-block">
												<div style="margin: auto; width: fit-content">
													<div class="radio">
		                        <label><input type="radio" name="delivery_standard" value="a" checked="true">
		                        <?php echo $standard->delivery_a?$standard->delivery_a:'-'?> Hari</label>
		                      </div>
		                      <div class="radio">
		                        <label><input type="radio" name="delivery_standard" id="delivery_standard" value="b" data-value="<?php echo $standard->delivery_harga?$standard->delivery_harga:0?>">
		                        <?php echo $standard->delivery_b?$standard->delivery_b:'-'?> Hari <?php echo isset($standard->delivery_harga)?
		                        "(+Rp ".number_format($standard->delivery_harga,0,',','.').")":''?>
		                        </label>
		                      </div>
												</div>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<div class="text-center">
												<button type="submit" name="set_btn" value="<?=$standard->kode_paket.'-'.$standard->id_paket?>" class="btn btn-info">Select Rp <span id="price_standard" class="money"> <?php echo $standard->harga?></span></button>
											</div>
										</div>
								</div>
								<div class="col-md-3 price-type" style="padding:10px;">
										<div class="col-md-12">
											<!-- <h2>Premium</h2> -->
										</div>
										<div class="col-md-12 text-center price-image">
											<img src="http://localhost/github/aqilapricelist/assets/images/premium.jpg" height="220">
										</div>
										<div class="col-md-12 price-info price-desc">
											<p class="price-title">Deskripsi</p>
											<p><?php echo isset($premium->deskripsi)?$premium->deskripsi:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Color</p>
											<p class="text-center"><?php echo isset($premium->color)?$premium->color:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">High Quality Softfile</p>
											<p class="text-center"><i class="fa <?php echo $premium->softfile?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Background (Stock)</p>
											<p class="text-center"><i class="fa <?php echo $premium->background?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Kepala Hingga Pinggang</p>
											<div class="text-center">
												<?php if($premium->check_medium) { ?>
	                        <div class="checkbox">
	                            <label> <input type="checkbox" name="check_medium_premium" id="check_medium_premium" data-value="<?php echo $premium->medium?$premium->medium:0?>" >Rp <?php echo isset($premium->medium) ? number_format($premium->medium,0,',','.'):'-'; ?> </label>
	                        </div>
	                      <?php } else { ?>
	                        <i class="fa fa-minus"></i>
	                      <?php } ?>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Delivery Time</p>
											<div class="center-block">
												<div style="margin: auto; width: fit-content">
													<div class="radio">
		                        <label><input type="radio" name="delivery_premium" value="a" checked="true">
		                        <?php echo $premium->delivery_a?$premium->delivery_a:'-'?> Hari</label>
		                      </div>
		                      <div class="radio">
		                        <label><input type="radio" name="delivery_premium" id="delivery_premium" value="b" data-value="<?php echo $premium->delivery_harga?$premium->delivery_harga:0?>">
		                        <?php echo $premium->delivery_b?$premium->delivery_b:'-'?> Hari <?php echo isset($premium->delivery_harga)?
		                        "(+Rp ".number_format($premium->delivery_harga,0,',','.').")":''?>
		                        </label>
		                      </div>
												</div>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<div class="text-center">
												<button type="submit" name="set_btn" value="<?=$premium->kode_paket.'-'.$premium->id_paket?>" class="btn btn-warning">Select Rp <span id="price_premium" class="money"><?php echo $premium->harga?></span></button>
											</div>
										</div>
								</div>
								<div class="col-md-3 price-type" style="padding:10px;">
										<div class="col-md-12">
											<!-- <h2>Design Only</h2> -->
										</div>
										<div class="col-md-12 text-center price-image">
											<img src="http://localhost/github/aqilapricelist/assets/images/design.jpg" height="220">
										</div>
										<div class="col-md-12 price-info price-desc">
											<p class="price-title">Deskripsi</p>
											<p><?php echo isset($design->deskripsi)?$design->deskripsi:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Color</p>
											<p class="text-center"><?php echo isset($design->color)?$design->color:'-'?></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">High Quality Softfile</p>
											<p class="text-center"><i class="fa <?php echo $design->softfile?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Background (Stock)</p>
											<p class="text-center"><i class="fa <?php echo $design->background?'fa-check':'fa-minus'?>"></i></p>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Kepala Hingga Pinggang</p>
											<div class="text-center">
												<?php if($basic->check_medium) { ?>
	                        <div class="checkbox">
	                            <label> <input type="checkbox" name="check_medium_basic" id="check_medium_basic" data-value="<?php echo $basic->medium?$basic->medium:0?>" >Rp <?php echo isset($basic->medium) ? number_format($basic->medium,0,',','.'):'-'; ?> </label>
	                        </div>
	                      <?php } else { ?>
	                        <i class="fa fa-minus"></i>
	                      <?php } ?>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<p class="price-title">Delivery Time</p>
											<div class="center-block">
												<div style="margin: auto; width: fit-content">
													<div class="radio">
		                        <label><input type="radio" name="delivery_design" value="a" checked="true">
		                        <?php echo $design->delivery_a?$design->delivery_a:'-'?> Hari</label>
		                      </div>
		                      <?php if(!empty($design->delivery_b)) { ?>
		                      <div class="radio">
		                        <label><input type="radio" name="delivery_design" id="delivery_design" value="b" data-value="<?php echo $design->delivery_harga?$design->delivery_harga:0?>">
		                        <?php echo $design->delivery_b?$design->delivery_b:'-'?> Hari <?php echo isset($design->delivery_harga)?
		                        "(+Rp ".number_format($design->delivery_harga,0,',','.').")":''?>
		                        </label>
		                      </div>
		                      <?php } ?>
		                      <div class="radio" style="visibility: hidden">
		                      	<label><input type="radio" checked="false">
		                        <?php echo $design->delivery_a?$design->delivery_a:'-'?> Hari</label>
		                      </div>
												</div>
											</div>
										</div>
										<div class="col-md-12 price-info">
											<div class="text-center">
												<button type="submit" name="set_btn" value="<?=$design->kode_paket.'-'.$design->id_paket?>" class="btn btn-danger">Select Rp <span id="price_design" class="money"><?php echo $design->harga?></span></button>
											</div>
										</div>
								</div>
								
							</div>
						</form>
					</div> 
				</div> 
			</div>
		</div>
	</div> <!-- /pilihPaket -->

	<div id="pilihUpgrade" class="tab-pane fade">
		<!-- <h3 class="w3stitle">Upgrade<span>  Your Order</span></h3> -->
		<div class="contact-row agileits-w3layouts">  
			<div class="contact-w3lsleft">
				<div class="contact-grid agileits">
					<div class="section-header">
						<span class="section-title">Upgrade Your Order</span>
					</div>
					<table class="table-upgrade table table-hover">
						<?php foreach ($data_upgrade as $upgrade) { ?>
							<tr id="upgrade-<?=$upgrade->id_upgrade?>">
								<td><?=$upgrade->nama_upgrade?> <p class="upgrade-desc small"><?=$upgrade->deskripsi?></p></td>
								<td class="text-right"><div class="label label-default" title="<?='Rp '.number_format($upgrade->harga, 0, ",", ".")?>">Rp <?=shorten_number($upgrade->harga)?></div></td>
								<td class="text-center"><a href="#" class="add-upgrade fa fa-plus-circle" title="Tambahkan <?=$upgrade->nama_upgrade?>" data-value="<?=$upgrade->id_upgrade?>" onclick="selectUpgrade(event, this);"></a></td>
							</tr>
						<?php } ?>
					</table>
					<div class="row">
						<div class="col-sm-12">
							<div id="upgradeNavBtn" class="pull-right">
								<a href="#" onclick="prevStartOrder(event);" class="btn btn-default btn-md" title="Kembali ke pilihan Paket" style="margin:5px"><i class="fa fa-arrow-left"></i> Kembali</a>
								<a href="#" onclick="nextStartOrder(event);" class="btn btn-info btn-md" title="Lanjut ke pilihan Media Cetak" style="margin:5px">Lanjutkan <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /pilihUpgrade -->

	<div id="pilihMedia" class="tab-pane fade">
		<!-- <h3 class="w3stitle">Choose<span>  Media</span></h3> -->
		<div class="contact-row agileits-w3layouts">  
			<div class="contact-w3lsleft">
				<div class="contact-grid agileits">
					<div class="section-header">
						<span class="section-title">Choose Media</span>
					</div>
					<div class="panel">
						<div class="panel-body">
							<?=$data_desc->deskripsi;?>
						</div>
					</div>
					<table class="table-mediacetak table table-hover">
						<tr style="background-color: #807E81; color:#fff;">
							<th>Pilihan Media Cetak</th>
							<th class="text-center">Day</th>
							<th class="text-center">Warna Primer / Sekunder</th>
							<th colspan="2" class="text-center">Price</th>
						</tr>
						<?php foreach ($data_media as $media) { ?>
						<tr id="media-<?=$media->id_media?>">
							<td><?=$media->nama_media?></td>
							<td class="text-center"><?=$media->hari?></td>
							<td>
								<div class="form-inline text-center">
									
									<div class="form-group">
									<?php if($media->show_warna_primer) { ?>
										<select name="warna_primer-<?=$media->id_media?>" class="form-control input-sm" title="Warna Primer">
										<?php foreach ($warna_primer as $primer) { 
											if($media->tipe_warna == 1) {
												if($primer->media_id == $media->id_media) { ?>
												<option value="<?=$primer->id_warna?>"><?=$primer->warna?></option>
											<?php }
											} else if ($media->tipe_warna == 0) {
												if($primer->media_id == 0) { ?>
												<option value="<?=$primer->id_warna?>"><?=$primer->warna?></option>
											<?php }
											} 
										} ?>
										</select>
									<?php } ?>
									</div>
									
									<div class="form-group">
									<?php if($media->show_warna_sekunder) { ?>
										<select name="warna_sekunder-<?=$media->id_media?>" class="form-control input-sm" title="Warna Sekunder">
										<?php foreach ($warna_sekunder as $sekunder) { 
											if($media->tipe_warna == 1) {
												if($sekunder->media_id == $media->id_media) { ?>
												<option value="<?=$sekunder->id_warna?>"><?=$sekunder->warna?></option>
											<?php }
											} else if ($media->tipe_warna == 0) {
												if($sekunder->media_id == 0) { ?>
												<option value="<?=$sekunder->id_warna?>"><?=$sekunder->warna?></option>
											<?php }
											} 
										} ?>
										</select>
									<?php } ?>
									</div>
								</div>
							</td>
							<td class="text-right"><span class="label label-default" title="<?='Rp '.number_format($media->harga, 0, ",", ".")?>">Rp <?=shorten_number($media->harga)?></span></td>
							<td class="text-center"><a href="#" class="add-upgrade fa fa-plus-circle" title="Tambahkan <?=$media->nama_media?>" data-value="<?=$media->id_media?>" data-harga="<?=$media->harga?>" onclick="selectMedia(event);"></a></td>
						</tr>
						<?php } ?>
					</table>
					<div class="row">
						<div class="col-sm-12">
							<div id="mediaNavBtn" class="pull-right">
								<a href="#" onclick="prevStartOrder(event);" class="btn btn-default btn-md" title="Kembali ke pilihan Upgrade" style="margin:5px"><i class="fa fa-arrow-left"></i> Kembali</a>
								<a href="#" onclick="nextStartOrder(event);" class="btn btn-info btn-md" title="Lanjut ke Form Pemesan" style="margin:5px">Lanjutkan <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /pilihMedia -->

	<div id="isiFormPemesan" class="tab-pane fade">
		<!-- <h3 class="w3stitle"><span>  Summary</span></h3> -->
		<div class="payment-online-form-left">
			<form id="formPemesan" action="<?php echo base_url()?>home/set_pemesan" method="post" enctype="multipart/form-data"> 
				<div class="section-header">
					<span class="section-title" style="margin-top: 0px;">Isi <b>Format Order</b></span>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nama_pemesan">Nama Pemesan</label>
							<input name="nama_pemesan" class="text-box-dark" placeholder="Nama Pemesan" type="text" required="true">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input name="email" class="text-box-dark" placeholder="Email" type="email" required="true">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="no_hp">No. Hp/Whatsapp</label>
							<input name="no_hp" class="text-box-dark" placeholder="[Isi keduanya jika berbeda]" type="text" required="">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="no_line">ID Line/Nama Line</label>
							<input name="no_line" class="text-box-dark" placeholder="Contoh: budi123/Budi Pramono" type="text" required="">
						</div>
					</div> 
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="warna_dominan">Warna Dominan Desain</label>
							<input name="warna_dominan" class="text-box-dark" placeholder="[Nuansa warna gambar]" type="text" required="">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="tambahan_tulisan">Tambahan Tulisan</label>
							<input name="tambahan_tulisan" class="text-box-dark" placeholder="[Contoh: Happy Birthday]" type="text" required="">
						</div>
					</div> 
				</div> 
				<div class="clearfix"></div>
				<!-- Background Stock & Custom tidak muncul di Basic -->
				<!-- Background Custom akan menggantikan Background Stock jika item Upgrade Background Stock dipilih -->
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="background_stock">Background (Stock)</label>
							<input name="background_stock" class="text-box-dark" placeholder="[Tulis kode yang tertera di caption]" type="text" required="">
							<p class="small text-right">Option on: <a href="http://instagram.com/fentroart.design">instagram.com/fentroart.design</a></p>
						</div>
					</div>
				</div>
				<?php if(isset($scope_paket->background) && $scope_paket->background) { ?>
				<div class="row" style="display: none;">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="background_custom">Background Custom</label>
							<textarea name="background_custom" class="text-area-dark" rows="3" placeholder=""></textarea>
						</div>
					</div>
				</div> 
				<?php } ?>
				<!-- Request pose hanya muncul jika Medium Body dicentang -->
				<?php if(isset($_SESSION['pesanan']['check_medium']) && $_SESSION['pesanan']['check_medium']) { ?>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Request Pose</label>
							<div class="radio">
								<label>
									<input type="radio" name="pose" id="radiopose1" value="1" checked="true">By Request
								</label>
								<label>
									<input type="radio" name="pose" id="radiopose2" value="2">Terserah FENTROART
								</label>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group">
							<textarea name="text_pose" id="textpose" class="text-area-dark" rows="5" placeholder="Jelaskan model pose yang anda inginkan. Lampirkan gambar/foto yang dimaksud di bagian 'Attach foto' di bawah jika anda mempunyai contoh foto/gambar pose yang dimaksud"></textarea>
						</div>
					</div> 
				</div> 
				<?php } ?>
				<!-- Improve look hanya muncul pada paket premium -->
				<?php if(isset($_SESSION['pesanan']['kode_paket']) && $_SESSION['pesanan']['kode_paket'] == 'premium') { ?>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Improve Look</label>
							<div class="radio">
								<label>
									<input type="radio" name="improve" id="radioimprove1" value="1" checked="true">By Request
								</label>
								<label>
									<input type="radio" name="improve" id="radioimprove2" value="2">Terserah FENTROART
								</label>
								<label>
									<input type="radio" name="improve" id="radioimprove3" value="3">Persiskan Foto
								</label>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group">
							<textarea name="text_improve" id="textimprove" class="text-area-dark" rows="5" placeholder="Jelaskan model pakaian/jilbab/dll yang ingin di-improve diluar tampilan foto yang anda berikan"></textarea>
						</div>
					</div> 
				</div> 
				<?php } ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="keterangan">Keterangan Tambahan</label>
							<textarea name="keterangan" class="text-area-dark" rows="3" placeholder="Jelaskan hal-hal yang ingin anda sampaikan diluar format yang belum kita cantumkan"></textarea>
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="foto"><i class="text-danger">*</i>Upload Foto</label>
							<!-- image-preview-filename input [CUT FROM HERE]-->
              <input type="file" name="file_foto[]" id="fileFoto" class="form-control" accept="image/png, image/jpeg" multiple /> <!-- rename it -->
						</div>
            <!-- image preview -->
						<!-- <output id="image-list"></output> -->
						<small class="help-block text-left">Usahakan foto HD, tidak blur, tidak low-light/overlight </small>
					</div>
				</div>
				
				<div class="clearfix"> </div>
				<hr>
				<div id="formPenerima" style="display: none;">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nama_penerima">Nama Penerima</label>
								<input name="nama_penerima" class="text-box-dark" placeholder="Nama Penerima" type="text" required="true" disabled="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="no_hp_penerima">No. HP Penerima</label>
								<input name="no_hp_penerima" class="text-box-dark" placeholder="Nomor HP Penerima" type="number" required="true" disabled="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="alamat_penerima">Alamat Penerima</label>
								<textarea name="alamat_penerima" class="text-area-dark" rows="3" placeholder="Alamat Penerima" disabled=""></textarea>
							</div>
						</div>

						<!-- Asalnya opsi pengiriman ada di sini -->
						
					</div> 
				</div>
				
				<ul class="payment-sendbtns">
					<li><a href="<?php echo base_url();?>home/batalkan_pesanan" class="btn btn-default" style="margin:3px;"><i class="glyphicon glyphicon-trash"></i> Batalkan Pesanan</a></li>
					<!-- <li><button type="submit" id="submitFormatOrder" class="btn btn-info"><i class="glyphicon glyphicon-send"></i> Submit Format Order</button></li> -->
					<li><button type="button" id="submitFormatOrder" class="btn btn-info" data-toggle="modal" data-target="#modalTerms"  style="margin:3px;"><i class="glyphicon glyphicon-send"></i> Submit Format Order</button></li>
				</ul>
				<div class="clearfix"> </div>
			</form>
		</div>
				
	</div> <!-- /isiFormPemesan -->

	</div> <!-- /Tab Content -->
	</div> <!-- /col-sm-6 -->
	<div id="colSummarySection" class="col-sm-5">
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item hidden" aria-controls="tab_item-0"><span>Pesanan</span></li>
					<!-- <li class="resp-tab-item" aria-controls="tab_item-1"><span>Pesanan</span></li>  -->
				</ul>	 
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="agileits-login">
							<form name="setUpgradeMedia" id="setUpgradeMedia" action="<?php echo base_url();?>home/set_upgrade_media" method="post">

							<div id="formPengiriman" class="row" style="display: none;">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="label-control"> Opsi Pengiriman</label>
											<select class="form-control input-sm" name="opsi_pengiriman" id="opsiPengiriman" disabled="" onchange="showHideJne(this.value);">
										    	<option value="1">Ambil di lokasi</option>
										    	<option value="2">Kirim area kota Malang</option>
										    	<option value="3">Via JNE</option>
									    	</select>
										</div>
									</div>
									<div class="col-sm-4 paket-jne">
										<div class="form-group">
											<label for="provinsi" class="label-control">Provinsi</label>
											<input type="text" name="nama_provinsi" id="nama_provinsi" class="form-control" title="Nama Provinsi" style="display:none;">
											<select name="provinsi" id="provinsi" class="form-control input-sm" placeholder="Provinsi" disabled="true">
												<option value="" selected="" disabled="">Pilih Provinsi</option>
												<?php get_province();?>
											</select>
										</div>
									</div>
									<div class="col-sm-4 paket-jne">
										<div class="form-group">
											<label for="kota" class="label-control">Kota</label>
											<input type="text" name="nama_kota" id="nama_kota" class="form-control" title="Nama Kota" style="display:none;">
											<select name="kota" id="kota" class="form-control input-sm" placeholder="Kota" disabled="true">
												<option value="" selected="" disabled="">Pilih Kota</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4 paket-jne">
										<div class="form-group">
											<label for="kecamatan" class="label-control">Kecamatan</label>
											<input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control" title="Nama Kecamatan" style="display:none;">
											<select name="kecamatan" id="kecamatan" class="form-control input-sm" placeholder="Kecamatan" disabled="true">
												<option value="" selected="" disabled="">Pilih Kecamatan</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12 paket-jne">
										<div class="form-group">
											<label class="label-control"> Paket Kurir</label>
											<select class="form-control input-sm" name="pilihan_paket" id="pilihanPaket" disabled="true">
										    	<option value="reg">Reguler</option>
										    	<option value="yes">YES (Yakin Esok Sampai)</option>
									    	</select>
									    	<small id="pilihan_paket_alert" style="display: none;">*Tidak tersedia paket YES untuk kota ini</small>
										</div>
									</div>
								 </div>
								 
							<div class="section-header">
								<span class="section-title" style="margin-top: 0px; margin-bottom: 10px;">Summary</span>
							</div>
								<table id="tableScope" class="table">
									<tbody>
									<?php $sum_paket = isset($_SESSION['pesanan']['kode_paket']) ? ${$_SESSION['pesanan']['kode_paket']} : "" ?>
									<?php if (isset($sum_paket->kode_paket)) { ?>
										<tr id="paketPesanan">
											<td colspan="3" style="vertical-align: middle;">
												<div>
													<img src="<?=URL_IMG.$sum_paket->kode_paket?>.jpg" width="85">
													<h3 style="display: inline-block; margin-left: 15px;"><?=ucfirst($sum_paket->kode_paket);?></h3>
												</div>
											</td>
										</tr>
										<tr id="descPesanan">
											<td>
												<b>Hard improve illustration</b>
												<ul class="check-summary">
													<li class="check"><i class="fa fa-check text-success"></i> Ilustrasi 1 Kepala</li>
													<li class="check"><i class="fa fa-check text-success"></i> Warna <?=$sum_paket->color?></li>
													<?php if($sum_paket->softfile) { ?>
													<li class="check"><i class="fa fa-check text-success"></i> High Quality Softfile</li>
													<?php } ?>
													<?php if($sum_paket->background) { ?>
													<li class="check"><i class="fa fa-check text-success"></i> Background Design</li>
													<?php } ?>
												</ul>
											</td>
											<td>&nbsp;</td>
											<?php $medium = ($_SESSION['pesanan']['check_medium']) ? $sum_paket->medium : 0?>
											<?php $delivery = ($_SESSION['pesanan']['delivery'] == 'b') ? $sum_paket->delivery_harga : 0?>
											<?php $delivery_hari = ($_SESSION['pesanan']['delivery'] == 'b') ? $sum_paket->delivery_b : $sum_paket->delivery_a?>
											<?php $harga_paket = $sum_paket->harga + $medium + $delivery;?>
											<?php $hari_paket = $delivery_hari;?>
											<td><h4 class="text-right">
												Rp <?=number_format($harga_paket, 0, ',', '.')?>
												</h4>
												<input type="number" name="harga_paket" value="<?=$harga_paket?>" title="harga paket" style="display:none;">
												<input type="number" name="hari_paket" value="<?=$hari_paket?>" title="hari paket" style="display:none;">
											</td>
										</tr>
									<?php } else { ?>
										<h3 class="text-center">Anda belum memilih paket</h3>
									<?php } ?>
									</tbody>
								</table>
								
								<table id="tableUpgrade" class="table">
								<caption>Upgrade</caption>
									<tbody>
										<tr class="text-center" style="background-color: #807E81; color:#fff;">
											<th class="text-center" style="width:50%;">Nama Item</th>
											<th class="text-center" style="width:20%;">Jumlah</th>
											<th class="text-center" style="width:30%;">Harga</th>
										</tr>
										<tr id="noItemUpgrade" class="media-item text-center">
											<td colspan="4">Belum ada item yang dipilih</td>
										</tr>
									</tbody>
								</table>

								<table id="tableMedia" class="table">
								<caption>Media Cetak</caption>
									<tbody>
										<tr id="header" style="background-color: #807E81; color:#fff;">
											<th class="text-center" style="width:40%; vertical-align: middle;">Nama Item</th>
											<th class="text-center" style="width:10%; vertical-align: middle;">Jumlah</th>
											<th class="text-center" style="width:20%; vertical-align: middle;">Warna Primer/Sekunder</th>
											<th class="text-center" style="width:30%; vertical-align: middle;">Harga</th>
										</tr>
										<tr id="noItemMedia" class="media-item text-center">
											<td colspan="4">Belum ada item yang dipilih</td>
										</tr>
									</tbody>
								</table>
							</form>
								
							<div class="row">
								<form id="formOngkir" action="<?php echo base_url();?>home/get_cost" method="post">
									<!-- asal paket kurir di baris ini -->
									<div id="infoTotal" class="col-sm-12">
										<div class="row">
											<div class="col-xs-6">Subtotal:</div>
											<div class="col-xs-6 text-right"><h4>Rp <span id="hargaSubTotal" class="money">0</span> </h4>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">Ongkos Kirim:</div>
											<div class="col-xs-6 text-right"><h4>Rp <span  id="hargaOngkir" class="money">0</span> </h4>
											</div>
										</div>
										<div class="row">	
											<div class="col-xs-6">Biaya Shipping:</div>
											<div class="col-xs-6 text-right"><h4>Rp <span id="hargaShipping" class="money">0</span> </h4>
											</div>
										</div>

										<hr style="display:block; height:1px; border:0; margin: 1em 0; padding: 0; border-top: 1px solid #333;">
										
										<div class="row">
											<div class="col-xs-6"><b>Harga Total:</b></div>
											<div class="col-xs-6 text-right"><h4>Rp <span id="hargaTotal" class="money">0</span> </h4>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6"><b>Waktu Pengerjaan:</b></div>
											<div class="col-xs-6 text-right"><h4> <span id="hariTotal">0</span> hari </h4>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6"><b>Estimated Delivery Time</b></div>
											<div class="col-xs-6 text-right"><h4> <span id="etd">0</span> hari </h4>
											</div>
										</div>
									</div>
									<div class="col-sm-12 text-center" style="margin-bottom: 15px;">
										<img src="<?php echo URL_IMG.'loading.svg'?>" class="ajaxLoading" title="Loading..." alt="Loading..." style="display:none; height:30px; width:30px;"> 
										<div class="form-inline">
											<input type="number" name="json_media" class="form-control input-sm" value="" title="json_media" style="display:none;">
											<input type="number" name="total_media_weight" class="form-control input-sm" value="0" title="total_media_weight" style="display:none;">
											<input type="number" name="total_shipping" class="form-control input-sm" value="0" title="total harga shipping" style="display:none;">
											<input type="text" name="total_hari" class="form-control input-sm" value="0" title="total hari" style="display:none;">
											<input type="text" name="total_ongkir" class="form-control input-sm" value="0" title="total Ongkir" style="display:none;">
											<input type="text" name="total_subtotal" class="form-control input-sm" value="0" title="total subTotal" style="display:none;">
											<input type="text" name="total_harga" class="form-control input-sm" value="0" title="total harga" style="display:none;">
										</div>
									</div>
									<!-- <div class="col-xs-4 text-right">
										<div class="form-group hidden">
											<button type="submit" class="btn btn-default btn-sm">Cek Ongkir</button>
										</div> 
									</div> -->
								</form>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center">
									<div id="summaryNavBtn" class="">
										<a href="#" onclick="prevStartOrder(event);" class="btn btn-default btn-md" title="Kembali ke pilihan Upgrade" style="margin:5px"><i class="fa fa-arrow-left"></i> Kembali</a>
										<a href="#" onclick="nextStartOrder(event);" class="btn btn-info btn-md" title="Lanjut ke Form Pemesan" style="margin:5px">Lanjutkan <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div> 
					</div>
					
				</div>	
			</div>
			<div class="clearfix"> </div>
		</div>   
	
	</div> <!-- /col-sm-6 -->	
	</div> <!-- /row -->
	</div>
	<!-- //blog --> 	
	
	<?php include "modal_ketentuan_kondisi.php";?>

	<!-- copy rights start here -->
	<div class="copyw3-agile" style="margin-top: 100px;">
		<div class="container"> 
			<div class="w3social-icons footer-w3icons"> 
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
					<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<p>© 2016 Let's Party. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> 
			<!-- <br>Customized by <a href="http://illiyin.co/" target="_blank" style="color:#2fbdba;">Illiyin Studio</a> --> </p>
		</div>
	</div>
	<!-- //copy right end here --> 

	<!-- modal Summary-->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
	</div>
	<!-- //modal -->  		 
	
	<!-- ResponsiveTabs js -->
	<script src="<?php echo URL_JS?>easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs js --> 

	<!-- Jquery validate js -->
	<script src="<?php echo URL_JS?>jquery.validate.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		/*$.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
		} );*/

		/*$(document).ready(function () {
			$( "#signupForm" ).validate( {
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
		});*/
	</script>
	<!-- //Jquery validate js --> 
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL_JS?>bootstrap.min.js"></script>
    
    <?php if (isset($_SESSION['pesanan']['id_paket'])) { ?>
    	<script type="text/javascript"> 
				$(document).ready(function(){
		    		$("#startOrder ul li.active").next().find("a").click(); 
		    		
		    		$('#colStartOrderTabs').attr('class', 'col-sm-7');
		    		$('#colSummarySection').fadeIn();

		    		//disable Pilih Paket Tab (First tab)
		    		$("#startOrder ul li:first-child").addClass('disabled').find('a').attr('disabled', 'true').removeAttr('data-toggle');
		    		//disable Isi Form Pesanan tab (Last tab)
		    		$("#startOrder ul li:last-child").addClass('disabled').find('a').attr('disabled', 'true').removeAttr('data-toggle');
		    		
		    		var tabFormPemesan = $("#startOrder ul li"); 
		    		var linkFormPemesan = $("#startOrder ul li").find("a"); 
						var html = $('#summaryNavBtn').html();
		    		linkFormPemesan.on('shown.bs.tab', function() {
		    			var htmlKonfirmasi = ''
		    				+'<a href="<?php echo base_url();?>home/batalkan_pesanan" class="btn btn-default btn-md" title="Batalkan Pesanan" style="margin:5px"><i class="fa fa-remove"></i> Tidak, batalkan pesanan</a>'
							+'<a href="#" onclick="nextStartOrder(event);" class="btn btn-info btn-md" title="Lanjut ke Form Pesanan" style="margin:5px"><i class="fa fa-check"></i> Ya, Isi form pemesan</a>';

		    			var nextTab = $(this).parent('li').next().find('a') || 'end';
		    			if(nextTab.attr('href') == '#isiFormPemesan') {
		    				$('#upgradeNavBtn').hide();
		    				$('#mediaNavBtn').hide();
		    				$('#summaryNavBtn').hide().html(htmlKonfirmasi).fadeIn();
		    			}
		    			else if(nextTab.length == 0) { //End of tab (Tab Form Pesanan)
		    				for(i=0; i<(tabFormPemesan.length-1); i++) {
		    					// console.log(tabFormPemesan[i]);
		    					$(tabFormPemesan[i]).addClass('disabled');
		    					$(tabFormPemesan[i]).find('a').attr('disabled', 'true').removeAttr('data-toggle');
		    				}
		    				$('#opsiPengiriman').attr('disabled', 'true').addClass('disabled');
		    				$('#pilihanPaket').attr('disabled', 'true').addClass('disabled');
		    				$('#provinsi').attr('disabled', 'true').addClass('disabled');
		    				$('#kota').attr('disabled', 'true').addClass('disabled');

		    				$('#upgradeNavBtn').hide();
		    				$('#mediaNavBtn').hide();
		    				$('#summaryNavBtn').fadeOut();
		    				$('#colSummarySection').fadeOut();
		    				$('#colStartOrderTabs').attr('class', 'col-md-offset-3 col-md-6');
		    			}
						else {
		    				$('#upgradeNavBtn').show();
		    				$('#mediaNavBtn').show();
		    				$('#summaryNavBtn').hide().html(html).fadeIn();
		    			}
		    			// console.log($(linkFormPemesan[i]).attr('href'));
		    			calculateSubTotal();
		    			calculateTotalHari();
		    			calculateHargaTotal();
		    		});
		    	});	
				</script>
    <?php } else { ?>
    	<script type="text/javascript">
			$('#colStartOrderTabs').attr('class', 'col-sm-12');
			$('#colSummarySection').hide();

	    	var tabList = $("#startOrder ul").find("li:not(.active)");
	    	tabList.each(function(index, value) {
	    		var text = $(value).find('a').html();
	    		$(value).addClass("disabled");
	    		$(value).html("<a href='javascript:void(0)'>"+text+"</a>");
	    		// $value.append("<span>"+text+"</span>");
	    		// $(value).find("a").attr('href', 'Javacript:void(0)').removeData('toggle');
	    		// $(value).find("a").removeAttr('data-toggle');
	    	});
    	</script>
    <?php } ?>

    <!-- Krajee file input -->
    <script type="text/javascript" src="<?php echo URL_JS?>fileinput.min.js"></script>
    <script type="text/javascript">
    	$("#fileFoto").fileinput( {
    		'showUpload':false, 
    		'previewFileType':'any',
    		'allowedFileTypes':'image',
    		'maxFileSize':524288, //512MB
    	} );
    </script>
    

    <!-- JS script for masking input -->
    <!-- JQuery Mask -->
    <script type="text/javascript" src="<?php echo URL_JS?>jquery.mask.min.js"></script>
    <script type="text/javascript">
    function maskInputMoney(){
	    $('.money').mask('#.##0', {reverse: true});
	  }
	  function unmaskInputMoney(){
	    $('.money').unmask();
	  }
    </script>

    <script type="text/javascript">
	    function nextStartOrder(e) {
	    	e.preventDefault();
	    	//checking if opsi pengiriman via jne is selected, the check provinsi & kota selection
    		// var nextTab = $(this).parent('li').next().find('a') || 'end';
    		var nextTab = $("#startOrder ul li.active").nextAll() || 'end';
	    	var opsiPengiriman = $('#opsiPengiriman :selected').val();
	    	var provinsi = $('#provinsi :selected').val();
	    	var kota = $('#kota :selected').val();
	    	var kecamatan = $('#kecamatan :selected').val();
	    	var pilihanPaket = $('#pilihanPaket :selected').val();
	    	if(nextTab.length == 1) { //end of tab
	    		var userConfirm = false;
	    		//jika pilihan tipe ilustrasinya adalah design only maka:
	    		<?php if(isset($_SESSION['pesanan']['id_paket']) && $_SESSION['pesanan']['id_paket'] == 4) { ?>
	    			userConfirm = confirm('Apakah anda yakin dengan pesanan anda? \n(Klik ya untuk melanjutkan ke form pemesan)');
    			<?php } else { ?>
    				if($('#formPengiriman').is(':visible')) {
	    				userConfirm = confirm('Lanjutkan pemesanan dengan opsi pengiriman \"'+ $('#opsiPengiriman :selected').text() +'\"?');
    				} else {
	    				userConfirm = confirm('Lanjutkan pemesanan dengan opsi pengiriman via email? \n(anda belum memilih media cetak)');
    				}

    			<?php } ?>
	    		if(userConfirm) {
	    			//enable last tab and add data-toggle
	    			$("#startOrder ul li:last-child").removeClass('disabled').find('a').attr('disabled', 'false').attr('data-toggle', 'pill');
	    			if(opsiPengiriman == 3) { //via JNE
			    		if(provinsi && kota && kecamatan && pilihanPaket) {
			    			$("#startOrder ul li.active").next().find("a").click();
			    		}
			    		else {
			    			alert('Anda belum memilih Provinsi/Kota/Kecamatan tujuan pengiriman!');
			    		}
			    	}
			    	else {
			    		$("#startOrder ul li.active").next().find("a").click();
			    		//scroll to top after click lanjutkan button
			    		$('html, body').animate({scrollTop: 0}, 'fast');
			    	}
	    		}
	    	}
	    	else {
	    		$("#startOrder ul li.active").next().find("a").click();
	    	}
	    };
	    function prevStartOrder(e) {
	    	e.preventDefault();
	    	$("#startOrder ul li.active").prev().find("a").click();
	    };

	    $(document).ready(function(){
	    	//GET CITY BY PROVINCE
			$("#provinsi").change(function(){
				$.post("<?php echo base_url(); ?>home/get_city_by_province/"+$('#provinsi').val(),function(obj){
					var namaProvinsi = $('#provinsi :selected').html();
					$('#nama_provinsi').val(namaProvinsi);
					$('#kota').html(obj);
					var namaKota = $('#kota :selected').html();
					$('#nama_kota').val(namaKota);
					// console.log("namaProvinsi" + namaProvinsi);
					// console.log("namaKota" + namaKota);
				});
			});
	    	//GET SUBDISTRICT BY CITY
			$("#kota").change(function(){
				$.post("<?php echo base_url(); ?>home/get_subdistrict_by_city/"+$('#kota').val(),function(obj){
					var namaKota = $('#kota :selected').html();
					$('#nama_kota').val(namaKota);
					$('#kecamatan').html(obj);
					//trigger select first kecamatan option
					$('#kecamatan option:first').trigger('change');
					var namaKecamatan = $('#kecamatan :selected').html();
					$('#nama_kecamatan').val(namaKecamatan);
				});
			});
			$("#kecamatan").change(function(){
				var namaKecamatan = $('#kecamatan :selected').html();
				$('#nama_kecamatan').val(namaKecamatan);
				$("#formOngkir").submit();
				// console.log("namaKota" + namaKota);
			});
			$("#pilihanPaket").on("change", function(e) {
				$("#formOngkir").submit();
			});
			
			//masking money format
    		maskInputMoney();
		});
	</script>

	<!-- Request Pose textarea placeholder change on radio select -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('#radiopose1').on('click change', function(){
			$('#textpose')[0].placeholder = "Jelaskan model pose yang anda inginkan. Lampirkan gambar/foto yang dimaksud di bagian 'Attach foto' di bawah jika anda mempunyai contoh foto/gambar pose yang dimaksud";
			$('#textpose').val("Jelaskan model pose yang anda inginkan. Lampirkan gambar/foto yang dimaksud di bagian 'Attach foto' di bawah jika anda mempunyai contoh foto/gambar pose yang dimaksud");
			$('#textpose').prop("readonly", false);
		});
		$('#radiopose2').on('click change', function(){
			$('#textpose')[0].placeholder = "Pose akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART";
			$('#textpose').val("Pose akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART");
			$('#textpose').prop("readonly", true);
		});
		$('#radioimprove1').on('click change', function(){
			$('#textimprove')[0].placeholder = "Jelaskan model pakaian/jilbab/dll yang ingin di-improve diluar tampilan foto yang anda berikan";
			$('#textimprove').val("Jelaskan model pakaian/jilbab/dll yang ingin di-improve diluar tampilan foto yang anda berikan");
			$('#textimprove').prop("readonly", false);
		});
		$('#radioimprove2').on('click change', function(){
			$('#textimprove')[0].placeholder = "Penampilan akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART";
			$('#textimprove').val("Penampilan akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART");
			$('#textimprove').prop("readonly", true);
		});
		$('#radioimprove3').on('click change', function(){
			$('#textimprove')[0].placeholder = "Penampilan outfit (pakaian) akan dipersiskan dengan foto yang akan diilustrasikan";
			$('#textimprove').val("Penampilan outfit (pakaian) akan dipersiskan dengan foto yang akan diilustrasikan");
			$('#textimprove').prop("readonly", false);
		});
	});
	</script>
	
	<!-- Change price button value on radio select -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('#check_medium_basic, input[name=delivery_basic]').on('change', function() {
			calculatePrice('basic');
		});
		$('#check_medium_standard, input[name=delivery_standard]').on('change', function() {
			calculatePrice('standard');
		});
		$('#check_medium_premium, input[name=delivery_premium]').on('change', function() {
			calculatePrice('premium');
		});

		function calculatePrice(paket) {
			unmaskInputMoney();
			var a=0; var b=0; var price=0;
			if(paket == 'premium') {
				price = <?php echo $premium->harga?$premium->harga:0?>;
				if ($("#check_medium_premium").is(':checked')) {
					val_a = parseInt($("#check_medium_premium").data('value')) || 0;
				} else { val_a = 0; }
				val_b = parseInt($("input[name=delivery_premium]:checked").data('value')) || 0;
				$("#price_premium").html(parseInt(val_a + val_b + price));
			}
			else if(paket == 'standard') {
				price = <?php echo $standard->harga?$standard->harga:0?>;
				if ($("#check_medium_standard").is(':checked')) {
					val_a = parseInt($("#check_medium_standard").data('value')) || 0;
				} else { val_a = 0; }
				val_b = parseInt($("input[name=delivery_standard]:checked").data('value')) || 0;
				$("#price_standard").html(parseInt(val_a + val_b + price));
			}
			else if(paket == 'basic') {
				price = <?php echo $basic->harga?$basic->harga:0?>;
				if ($("#check_medium_basic").is(':checked')) {
					val_a = parseInt($("#check_medium_basic").data('value')) || 0;
				} else { val_a = 0; }
				val_b = parseInt($("input[name=delivery_basic]:checked").data('value')) || 0;
				$("#price_basic").html(parseInt(val_a + val_b + price));
			}
			maskInputMoney();
		}
	});
	</script>

	<script type="text/javascript">
		function getDataAjax(tipe, id) { //tipe = 'upgrade' atau 'media'
			unmaskInputMoney();
			var paket = <?=isset($_SESSION['pesanan']['id_paket']) ? $_SESSION['pesanan']['id_paket'] : 0;?>;
				return $.ajax({
			        url: "<?php echo base_url()?>" + "home/get_" + tipe,
			        type: "POST",
			        data: { id: id, paket:paket },
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
			maskInputMoney();
		};

		function showCustomBackground() {
			$("input[name='background_stock']").closest("div.row").hide();
			$("input[name='background_stock']").prop("disabled", true);
			$("textarea[name='background_custom']").closest("div.row").show();
			$("input[name='background_custom']").prop("disabled", false);
		}
		function hideCustomBackground() {
			$("textarea[name='background_custom']").closest("div.row").hide();
			$("input[name='background_custom']").prop("disabled", true);
			$("input[name='background_stock']").closest("div.row").show();
			$("input[name='background_stock']").prop("disabled", false);
		}
		function showHideJne(val) {
			var harga = parseFloat(0);
			$(".paket-jne").hide();
			$('.paket-jne select').prop('disabled', true);
			if(val == 1) { //ambil di lokasi
				$("#hargaOngkir").html(harga);
            	$("input[name='total_ongkir']").val(harga);
			}
			//Set harga ongkir untuk daerah malang Rp 15.000
			else if(val == 2) { //pengiriman daerah malang
            	harga = parseFloat(15000);
				$("#hargaOngkir").html(harga);
				$("#etd").html("< 1");
            	$("input[name='total_ongkir']").val(harga);
            }
			else if(val == 3) { //pengiriman via JNE
				$(".paket-jne").show();
				$('.paket-jne select').prop('disabled', false);
				//reset provinsi option
				$("#kota").trigger('click');
			}
			calculateMediaShipping();
			calculateHargaTotal();
            unmaskInputMoney();
            maskInputMoney();
		}
		function showHideFormPenerima() {
			var opsiPengiriman = $('#opsiPengiriman').val();
			// console.log( $("#tableMedia tbody tr").siblings(".media-item").length );
			if ($("#tableMedia tbody tr").siblings(".media-item").length > 0) { // then it has siblings } else { // it doesn't }
				$("#formPengiriman").show();
				$("#formPenerima").show();
				$(".paket-jne").hide();
				showHideJne(opsiPengiriman);
				// $("#formPenerima :input").prop("disabled", false); //included select
				// $("select[name='pilihan_paket']").prop("disabled", false);
				$("input[name='nama_penerima']").prop("disabled", false);
				$("input[name='no_hp_penerima']").prop("disabled", false);
				$("textarea[name='alamat_penerima']").prop("disabled", false);
				$("select[name='opsi_pengiriman']").prop("disabled", false);
			} else {
				// alert('formpenerima hide');
				showHideJne(opsiPengiriman);
				$("#formPengiriman").hide();
				$("#formPenerima").hide();
				$("#formPenerima :input").prop("disabled", true); //included select
				$("select[name='pilihan_paket']").prop("disabled", true);
			}
		}
		function selectUpgrade(event, elem) {
			// $(elem).off('click');
			// console.log(elem);
			event.preventDefault();
			var item = $(event.target);
			var id_upgrade = $(item).data("value");
			//hide the selected table row
			$("#upgrade-" + id_upgrade).hide();
			$("#infoTotal").hide();
			$(".ajaxLoading").show();
			$.when(getDataAjax('upgrade', id_upgrade)).done(function(response, status) {
	            
	            var data = JSON.parse(response);
	            var harga = parseInt(data.harga);
	            var hari = parseFloat(data.hari) || 0;
	            var nama = data.nama_upgrade;
	            // $('.ajaxLoading').hide();
	            // $('#formWarna form').show();
	            var markup2 = '-';
	            if(id_upgrade == 1) {
	            	markup2 = "<input name='upgrade-jumlah-"+id_upgrade+"' type='number' class='form-control input-sm' min='1' value='1' data-value='"+id_upgrade+"' oninput='calculateUpgrade(this, "+harga+", "+hari+")' title='jumlah'>";
	            }
				var markup = "<tr class='upgrade-item'>"
					+"<td>"
						+"<a href='#' class='add-upgrade fa fa-minus-circle' title='Hapus item' data-value='" +id_upgrade+ "' onclick='removeUpgrade(event);' style='float:left; margin-right:5px;'></a> " 
						+"<span style='width:100%; height:auto; padding:1%;'>"+nama+"</span>"
						+ "</td> "
					+ "<td class='text-center'>"
					+ "<span>"+markup2+"</span>" 
					+ "<input name='upgrade-harga-"+id_upgrade+"' type='text' class='input-sm' size='4' value='" + harga + "' title='harga' style='display:none;'>"
					+ "<input name='upgrade-hari-"+id_upgrade+"' type='text' class='input-sm' size='4' value='" + hari + "' title='hari' style='display:none;'>"
					+ "</td>"
					+"<td class='text-right'>Rp <span id='hargaUpgrade-"+id_upgrade+"' class='money'>" +harga+ "</td></tr>";
	            $("#tableUpgrade tbody").append(markup);

	            //menampilkan input background custom pada form order jika item Upgrade Custom background dicentang
	            if(id_upgrade == 2) {
	            	showCustomBackground();
	            }
	            calculateSubTotal();
	            calculateTotalHari();
	            calculateHargaTotal();
	            checkSelectedUpgrade();
				$(".ajaxLoading").hide();
	            $("#infoTotal").show();
	        });
		};

		function selectMedia(event) {
			event.preventDefault();
			var item = $(event.target);
			var id_media = $(item).data("value");
			var harga = $(item).data("harga");
			// var warna_primer = $(item).closest("tr").find("select[name^='warna_primer'] :selected").html();
			// var warna_sekunder = $(item).closest("tr").find("select[name^='warna_sekunder'] :selected").html();

			$("#media-" +id_media).hide();
			$("#infoTotal").hide();
			$(".ajaxLoading").show();
			$.when(getDataAjax('media', id_media)).done(function(response, status) {
	            
	            var data = JSON.parse(response);
	            var harga = parseInt(data.harga);
	            var weight = parseInt(data.weight);
	            var length = parseInt(data.length);
	            var height = parseInt(data.height);
	            var width = parseInt(data.width);
	            var hari = parseInt(data.hari);
	            var shipping = parseInt(data.harga_shipping);
	            var beratShipping = parseInt(data.berat_shipping);
	            var nama = data.nama_media;
	            var warnaPrimer = $("select[name='warna_primer-"+id_media+"']").val() || 0;
	            var warnaSekunder = $("select[name='warna_sekunder-"+id_media+"']").val() || 0;
	            var namaWarnaPrimer = $("select[name='warna_primer-"+id_media+"'] :selected").html() || '-';
	            var namaWarnaSekunder = $("select[name='warna_sekunder-"+id_media+"'] :selected").html() || '-';
	            var markup2 = <?php echo "'";  foreach ($warna_primer as $primer2) { echo '  <option value="'. $primer2->id_warna.'">' . $primer2->warna . '</option> '; } echo "'"; ?> ; 
				var markup = "<tr class='media-item'>"
					+"<td>"
						+"<a href='#' class='add-upgrade fa fa-minus-circle' title='Hapus item' data-value='"+ id_media +"' onclick='removeMedia(event);' style='float:left; margin-right:5px;'></a> "
						+ "<span style='width:100%; height:auto; padding:1%;'>" +nama+"</span>" 
						+"</td>"
					+"<td>"
						+"<input name='media-jumlah-"+id_media+"' type='number' class='form-control input-sm' min='1' value='1' data-value='"+id_media+"' oninput='calculateMedia(this, "+harga+", "+weight+", "+length+", "+height+", "+width+", "+shipping+", "+beratShipping+")'>"
					+"</td>"
					+"<td class='text-center'>"
						+"<input name='media-harga-"+id_media+"' type='text' class='input-sm' size='4' value='" + harga + "' title='harga' style='display:none;'>"
						+"<input name='media-weight-"+id_media+"' data-id='"+id_media+"' type='text' class='input-sm' size='4' value='" + weight + "' title='weight' style='display:none;'>"
						+"<input name='media-length-"+id_media+"' data-id='"+id_media+"' type='text' class='input-sm' size='4' value='" + length + "' title='length' style='display:none;'>"
						+"<input name='media-height-"+id_media+"' data-id='"+id_media+"' type='text' class='input-sm' size='4' value='" + height + "' title='height' style='display:none;'>"
						+"<input name='media-width-"+id_media+"' data-id='"+id_media+"' type='text' class='input-sm' size='4' value='" + width + "' title='width' style='display:none;'>"
						+"<input name='media-hari-"+id_media+"' type='text' class='input-sm' size='4' value='" + hari + "' title='hari' style='display:none;'>"
						+"<input name='media-harga_shipping-"+id_media+"' type='text' class='input-sm' size='4' value='" + shipping + "' title='shipping' style='display:none;'>"
						+"<input name='media-berat_shipping-"+id_media+"' type='text' class='input-sm' size='4' value='" + beratShipping + "' title='berat shipping' style='display:none;'>"
						+"<input name='media-warna_primer-"+id_media+"' type='text' class='input-sm' size='4' value='" + warnaPrimer + "' title='warna_primer' style='display:none;'>"
						+"<input name='media-warna_sekunder-"+id_media+"' type='text' class='input-sm' size='4' value='" + warnaSekunder + "' title='warna sekunder' style='display:none;'>"
						+"<span>"+namaWarnaPrimer+" / "+namaWarnaSekunder+"</span>"
					+"</td>"
					// +"<td><select class='form-control input-sm'> "+ markup2 +"</select></td>"
					+"<td class='text-right'>Rp <span id='hargaMedia-"+id_media+"' class='money'>" +harga+ "</td></tr>";
	            $("#tableMedia tbody").append(markup);
	            showHideFormPenerima();
	            calculateSubTotal();
            	calculateMediaWeight();
            	calculateMediaShipping();
            	calculateTotalHari();
            	calculateHargaTotal();
	            checkSelectedMedia();
				$(".ajaxLoading").hide();
            	$("#infoTotal").show();
	        });
		};
		function removeUpgrade(event) {
			event.preventDefault();
			var item = $(event.target);
			var id_upgrade = $(item).data("value");

			$(item).closest("tr").remove();
			$("#upgrade-" + id_upgrade).fadeIn();

			if(id_upgrade == 2) {
            	hideCustomBackground();
            }
            calculateSubTotal();
            calculateHargaTotal();
			checkSelectedUpgrade();
		};
		function removeMedia(event) {
			event.preventDefault();
			var item = $(event.target);
			var id_media = $(item).data("value");

			$(item).closest("tr").remove();
			$("#media-" + id_media).fadeIn();
			showHideFormPenerima();
			calculateSubTotal();
			calculateMediaWeight();
			calculateMediaShipping();
			calculateTotalHari();
	        checkSelectedMedia();
			// $("#formOngkir").submit(); //to recheck ongkir price
			calculateHargaTotal();
		};
		function checkSelectedUpgrade() {
			var selectedUpgrade = $("#tableUpgrade").find("td");
			if(selectedUpgrade.length < 1) {
				var markup = "<tr id='noItemUpgrade' class='media-item text-center'>"
					+"<td colspan='3'>Belum ada item yang dipilih</td></tr>";
	            $("#tableUpgrade tbody").append(markup);
			}
			else {
				$("#tableUpgrade tbody").find("#noItemUpgrade").remove();
			}
		}
		function checkSelectedMedia() {
			var selectedMedia = $("#tableMedia").find("td");
			if(selectedMedia.length < 1) {
				var markup = "<tr id='noItemMedia' class='media-item text-center'>"
					+"<td colspan='4'>Belum ada item yang dipilih</td></tr>";
	            $("#tableMedia tbody").append(markup);
			}
			else {
				$("#tableMedia tbody").find("#noItemMedia").remove();
			}
		}
		function calculateUpgrade(e, harga, hari) {
			unmaskInputMoney();
			var jumlah = $(e).val();
			var id = $(e).data("value");
			$("#hargaUpgrade-"+id).html(jumlah * harga);
			$("input[name='upgrade-harga-"+id+"']").val(jumlah * harga);
			$("input[name='upgrade-hari-"+id+"']").val(jumlah * hari);
			calculateSubTotal();
			calculateTotalHari();
			calculateHargaTotal();
			maskInputMoney();
		};
		function calculateMedia(e, harga, weight, length, height, width, shipping, beratShipping) {
			unmaskInputMoney();
			var jumlah = $(e).val();
			var id = $(e).data("value");
			$("#hargaMedia-"+id).html(jumlah * harga);
			$("input[name='media-harga-"+id+"']").val(jumlah * harga);
			$("input[name='media-weight-"+id+"']").val(jumlah * weight);
			$("input[name='media-length-"+id+"']").val(jumlah * length);
			$("input[name='media-height-"+id+"']").val(jumlah * height);
			$("input[name='media-width-"+id+"']").val(jumlah * width);
			$("input[name='media-harga_shipping-"+id+"']").val(jumlah * shipping);
			$("input[name='media-berat_shipping-"+id+"']").val(jumlah * beratShipping);
			calculateSubTotal();
			calculateMediaWeight();
			calculateMediaShipping();
			calculateTotalHari();
			$("#formOngkir").submit(); //to recheck ongkir price
			calculateHargaTotal();
			maskInputMoney();
		};
		function calculateMediaWeight() {
			var totalWeight = 0;
			var groupId = '';
			var jsonMedia = [];
			$("#tableMedia tbody input[name*='media-weight-']").each(function() {
				groupId = $(this).data('id');
				totalWeight += Number($(this).val()	);
				arrayMedia = {
						id_media: $(this).data('id'),
						weight: Number( $(this).val() ),
						length: Number( $("input[name*='media-length-"+groupId+"']").val() ),
						height: Number( $("input[name*='media-height-"+groupId+"']").val() ),
						width: Number( $("input[name*='media-width-"+groupId+"']").val() )
					};
				jsonMedia.push(arrayMedia);
				// console.log($(this).val());
			});
			// alert(JSON.stringify(jsonMedia));
			console.log("totalWeight " + totalWeight);
			$("input[name='total_media_weight']").val(totalWeight);
			$("input[name='json_media']").val(jsonMedia);
		};
		function calculateMediaShipping() {
			unmaskInputMoney();
			var totalShipping = 0;
			var opsiPengiriman = $('#opsiPengiriman :selected').val();
			if(opsiPengiriman == 3) { //tambahkan shipping jika kirim Via JNE
				$("#tableMedia tbody input[name*='media-harga_shipping-']").each(function() {
					totalShipping += Number($(this).val());
					// console.log($(this).val());
				});
			}
			console.log("totalShipping " + totalShipping);
			$("input[name='total_shipping']").val(totalShipping);
			$("#hargaShipping").html(totalShipping);
			maskInputMoney();
		};
		function calculateTotalHari() {
			var totalHari = 0;
			var hariMediaArray = [0];
			totalHari += parseFloat($("input[name='hari_paket']").val()) || 0;

			$("#tableUpgrade tbody input[name*='upgrade-hari-']").each(function() {
				totalHari += parseFloat($(this).val());
				// console.log($(this).val());
			});
			$("#tableMedia tbody input[name*='media-hari-']").each(function() {
				hariMediaArray.push(parseFloat($(this).val()));
				// totalHari += parseFloat($(this).val());
				// console.log($(this).val());
			});
			
			//find max value from media hari
			hariMediaMax = Math.max.apply(null, hariMediaArray);
			totalHari += hariMediaMax;

			console.log("hariTotal " + totalHari);
			$("input[name='total_hari']").val(totalHari);
			$("#hariTotal").html(totalHari);
		};
		function calculateSubTotal() {
			unmaskInputMoney();
			var subTotal = 0;
			subTotal += parseFloat($("input[name='harga_paket']").val()) || 0;
			$("#tableUpgrade tbody input[name*='upgrade-harga-']").each(function() {
				subTotal += parseFloat($(this).val());
				// console.log($(this).val());
			});
			$("#tableMedia tbody input[name*='media-harga-']").each(function() {
				subTotal += parseFloat($(this).val());
				// console.log($(this).val());
			});
			console.log("hargaSubTotal " + subTotal);
			// $("input[name='total_hari']").val(subTotal);
			$("#hargaSubTotal").html(subTotal);
			$("input[name='total_subtotal']").val(subTotal);
			maskInputMoney();
		};
		function calculateHargaTotal() {
			unmaskInputMoney();
			var hargaTotal = 0;
			var subtotal = parseFloat($("input[name='total_subtotal']").val()) || 0;
			var shipping = parseFloat($("input[name='total_shipping']").val()) || 0;

			var ongkir = parseFloat($("input[name='total_ongkir']").val()) || 0;
			//jika tidak ada media yand terpilih (form penerima akan muncul kalau ada media yang dipilih)
			console.log('ongkirsebelumif: '+ongkir);
			if($("#formPengiriman").is(":hidden")) {
				ongkir = 0;
				$("#hargaOngkir").html(ongkir);
				$("input[name='total_ongkir']").val(ongkir);
				console.log('FORMPENGIRIMAN HIDDEN');
			}
			console.log('ongkirsesudah: '+ongkir);

			hargaTotal += parseFloat(subtotal + shipping + ongkir) || 0;
			console.log("hargaTotal " + hargaTotal);
			// $("input[name='total_hari']").val(hargaTotal);
			if(!isNaN(ongkir)) {
				$("#hargaTotal").html(hargaTotal);
				$("input[name='total_harga']").val(hargaTotal);
			} else {
				$("#hargaTotal").html(ongkir);
				$("input[name='total_harga']").val(0);
			}
			maskInputMoney();
		};
	</script>

	<script type="text/javascript">
		/*function setPemesan() { 
			var form = $("#formPemesan");
			return $.ajax({
		        url: "<?php echo base_url()?>" + "home/set_pemesan",
		        type: "POST",
		        data: form.serialize(),
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
		};*/
		function setUpgradeMedia() { 
			unmaskInputMoney();
			var id_paket = $("#pilihanPaket :selected").val();
			var nama_paket = $("#pilihanPaket :selected").html();
			var subtotal = $("input[name='total_subtotal']").val() || 0;
			var total_harga = $("input[name='total_harga']").val() || 0;
			var total_hari = $("input[name='total_hari']").val() || 0;
			var form = $("#setUpgradeMedia");
			return $.ajax({
		        url: "<?php echo base_url();?>" + "home/set_upgrade_media",
		        type: "POST",
		        data: form.serialize() 
		        		+ "&id_paket="+id_paket 
		        		+ "&nama_paket="+nama_paket
		        		+ "&subtotal="+subtotal
		        		+ "&total_harga="+total_harga
		        		+ "&total_hari="+total_hari,
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
			maskInputMoney();
		};
		function cekOngkir() { 
			unmaskInputMoney();
			var form = $("#formOngkir");
			var kota = $("#kota :selected").val() || 0;
			var kecamatan = $("#kecamatan :selected").val() || 0;
			var id_paket = $("#pilihanPaket :selected").val();
			console.log('----------------');
			console.log('Kota: '+kota);
			console.log('Kecamatan: '+kecamatan);
			console.log('----------------');
			return $.ajax({
		        url: "<?php echo base_url();?>" + "home/get_cost",
		        type: "POST",
		        data: form.serialize() + "&kota="+kota + "&kecamatan="+kecamatan + "&pilihan_paket="+id_paket,
		        cache: false,
		        success: function(response) {
		            return response;
		        },
		        error: function(response, errorMessage) {
		        	console.log(errorMessage);
		            return response;
		        }
		    });	
			maskInputMoney();
		};

		$('#checkTerms').on('click', function(e) {
			$('#btnTerms').attr('disabled', !this.checked);
		});
		function submitPemesan() {
	  	if(!$('#formPemesan').valid()) {
		  		$('#modalTerms').modal('hide');
		  		$('#checkTerms').prop('checked', false);
		  	}

			var checkTerms = $('#checkTerms').prop('checked');
			if(checkTerms == true) {
				$("#formPemesan").submit();
			}
		}
		$(document).ready(function(){
			$("#formPemesan").validate({
		  submitHandler: function(form) {
		    $.when(setUpgradeMedia()).done(function(response, status) {
		            var data = JSON.parse(response);
		            console.log(data);
		            // $('.ajaxLoading').hide();
		            // $('#formWarna form').show();
		            // runSetUpgradeMedia();
		            $("#formPemesan").unbind();
		            runSetPemesan(form);
	        	});
		    // form.submit();
		  }
		 });
			/*$("#formPemesan").on("submit", function(e) {
				e.preventDefault();				
				$.when(setUpgradeMedia()).done(function(response, status) {
		            var data = JSON.parse(response);
		            console.log(data);
		            // $('.ajaxLoading').hide();
		            // $('#formWarna form').show();
		            // runSetUpgradeMedia();
		            $("#formPemesan").unbind();
		            runSetPemesan();
	        	});
			});*/
			
			function runSetPemesan(form) {
				var arrFormPemesan = [];
				arrFormPemesan['opsiPengiriman'] = $("#opsiPengiriman").val() || '';
				arrFormPemesan['provinsi'] = $("#provinsi").val() || '';
				arrFormPemesan['nama_provinsi'] = $('#provinsi :selected').html() || '';
				arrFormPemesan['kota'] = $("#kota").val() || '';
				arrFormPemesan['nama_kota'] = $('#kota :selected').html() || '';
				arrFormPemesan['kecamatan'] = $("#kecamatan").val() || '';
				arrFormPemesan['nama_kecamatan'] = $('#kecamatan :selected').html() || '';
				arrFormPemesan['pilihanPaket'] = $("#pilihanPaket").val() || '';

				var html = '<input type="hidden" name="opsi_pengiriman" value="'+ arrFormPemesan['opsiPengiriman'] +'">'
							+ '<input type="hidden" name="provinsi" value="'+ arrFormPemesan['provinsi'] +'">'
							+ '<input type="hidden" name="nama_provinsi" value="'+ arrFormPemesan['nama_provinsi'] +'">'
							+ '<input type="hidden" name="kota" value="'+ arrFormPemesan['kota'] +'">'
							+ '<input type="hidden" name="nama_kota" value="'+ arrFormPemesan['nama_kota'] +'">'
							+ '<input type="hidden" name="kecamatan" value="'+ arrFormPemesan['kecamatan'] +'">'
							+ '<input type="hidden" name="nama_kecamatan" value="'+ arrFormPemesan['nama_kecamatan'] +'">'
							+ '<input type="hidden" name="pilihanPaket" value="'+ arrFormPemesan['pilihanPaket'] +'">';

				$(form).append(html);

				// console.log(html);
				// console.log($("#formPemesan").serialize());
				$(form).submit();
			};
			
			$("#formOngkir").on("submit", function(e) {
				e.preventDefault();
				$("#infoTotal").hide();
				$("#submitFormatOrder").prop("disabled", true).addClass("disabled");
				$(".ajaxLoading").show();
				$.when(cekOngkir()).done(function(response, status) {
		            var data = JSON.parse(response);
		            var harga = data.harga_reg;
		            var etd = data.etd_reg;
		            console.log("Selected: "+$("#pilihanPaket :selected").val());

		            if($("#pilihanPaket :selected").val() == 'yes') {
		            	console.log("MASUK");
		            	if(data.harga_yes != 0) {
		            		harga = data.harga_yes;
		            		etd = data.etd_yes;
		            		$("#pilihanPaket option[value='yes']").prop('disabled', false).removeClass("hidden");
            				$("#pilihan_paket_alert").hide();
		            	}
		            	else {
		            		$("#pilihanPaket option[value='reg']").prop('selected', true);
		            		$("#pilihanPaket option[value='yes']").prop('disabled', true).addClass("hidden");
            				$("#pilihan_paket_alert").show();
		            	}
		            } else {
		            	$("#pilihanPaket option[value='yes']").prop('disabled', false).removeClass("hidden");
	            		$("#pilihan_paket_alert").hide();
		            }

		            $("#hargaOngkir").html(harga);
		            $("#etd").html(etd);
		            $("input[name='total_ongkir']").val(harga);
		            calculateHargaTotal();
					$("#submitFormatOrder").prop("disabled", false).removeClass("disabled");
					$(".ajaxLoading").hide();
		            $("#infoTotal").show();
	        	});
			});

			//run notifikasi transfer
			function runAlertModal() {
				$('#modalAlert').modal('show');
			}
			<?php echo isset($_SESSION['alert']) ? "runAlertModal();" : ''?>
		});
	</script>
</body>
</html>