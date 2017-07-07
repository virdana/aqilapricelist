<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Email Message</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f7eef0;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	table {
		margin: 10px;
		border: 1px solid #333;
		border-collapse: collapse;
	}
	table tr th, table tr td {
		display: table-cell;
		border: 1px solid #666;
		padding: 5px;
	}

	table.half-width {
		width: 45%;
		float: left;
	}
	table.no-border {
		border: transparent;
	}
	table.no-border tr th, table.no-border tr td{
		vertical-align: top;
		border: transparent;
		padding-right: : 5px;
		padding-top: 0px;
		padding-bottom: 0px;
	}

	@media screen and (max-width: 991px) {
		table.half-width {
			width: 95%;
			clear: both;
		}
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #bb3756;
		box-shadow: 0 0 8px #bb3756;
	}

	.bold {
		font-weight: bolder;
	}
	.text-center {
		text-align: center;
	}
	.text-left {
		text-align: left;
	}
	</style>
</head>
<body>

<div id="container">
	<h1 style="background-color: #bb3756; color: #fff;">Thanks for Your Order!</h1>

	<div id="body">
		<p>Berikut adalah ilustrasi yang anda pesan:</p>
		<code>
		<table class="no-border"> 
			<tr>
				<td class="bold">Nomor Order</td>
				<td><?php echo $list->id_pesanan;?></td>
			</tr>
			<tr>
				<td class="bold">Paket Ilustrasi</td>
				<td><?php echo $list->nama_paket;?></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="bold">Medium Body</td>
				<td><?php echo ($list->medium_body == 1) ? "Ya" : "Tidak";?></td>
			</tr>
			<tr>
				<td class="bold">Warna Dominan</td>
				<td><?php echo $list->warna_dominan;?></td>
			</tr>
			<tr>
				<td class="bold">Tambahan Tulisan</td>
				<td><?php echo $list->tambahan_tulisan;?></td>
			</tr>
			<?php if(!empty($list->background_stock)) { ?>
			<tr>
				<td class="bold">Background Stock</td>
				<td><?php echo $list->background_stock;?></td>
			</tr>
			<?php } ?>
			<?php if(!empty($list->background_custom)) { ?>
			<tr>
				<td class="bold">Background Custom</td>
				<td><?php echo $list->background_custom;?></td>
			</tr>
			<?php } ?>
			<?php 
			  $pose = "Terserah Fentroart"; 
		      $improve = "Terserah Fentroart";
		      if($list->pose == 1) 
		        { $pose = $list->text_pose; }
		      if($list->improve == 1) 
		        { $improve = $list->text_improve; }
		      else if ($list->improve == 3) 
		        { $improve = "Persiskan Foto"; }
			?>
			<tr>
				<td class="bold">Request Pose</td>
				<td><?php echo $pose;?></td>
			</tr>
			<tr>
				<td class="bold">Improve Look</td>
				<td><?php echo $improve;?></td>
			</tr>
			<tr>
				<td class="bold">Keterangan Tambahan</td>
				<td><?php echo $list->keterangan;?></td>
			</tr>
		</table>

		<div style="display: block">
			<table class="half-width">
				<caption class="bold text-left">Pemesan</caption>
				<tr>
					<td class="bold">Nama Pemesan</td>
					<td><?php echo $data_pemesan->nama_pemesan;?></td>
				</tr>
				<tr>
					<td class="bold">Email</td>
					<td><?php echo $data_pemesan->email;?></td>
				</tr>
				<tr>
					<td class="bold">No. HP</td>
					<td><?php echo $data_pemesan->no_hp;?></td>
				</tr>
				<tr>
					<td class="bold">No. Line</td>
					<td><?php echo $data_pemesan->no_line;?></td>
				</tr>
			</table>

			<?php if(!empty($data_penerima)) { ?>
			<table class="half-width">
				<caption class="bold text-left">Penerima</caption>
				<tr>
					<td class="bold">Nama Penerima</td>
					<td><?php echo $data_penerima->nama_penerima;?></td>
				</tr>
				<tr>
					<td class="bold">No. HP</td>
					<td><?php echo $data_penerima->no_hp;?></td>
				</tr>
				<tr>
					<td class="bold">Alamat</td>
					<td><?php echo $data_penerima->alamat;?></td>
				</tr>
				<tr>
					<td class="bold">Kota</td>
					<td><?php echo $data_penerima->nama_kota;?></td>
				</tr>
				<tr>
					<td class="bold">Provinsi</td>
					<td><?php echo $data_penerima->nama_provinsi;?></td>
				</tr>
			</table>
		</div>
		<?php } ?>
		<div style="clear: both;"></div>

		<div style="display: block">
			<?php if(!empty($data_pesanan_upgrade)) { ?>
			<table class="half-width">
				<caption class="bold text-left">Upgrade</caption>
				<tr>
					<th>#</th>
					<th>Nama Upgrade</th>
					<th>Jumlah</th>
				</tr>
				<?php $i = 1;?>
				<?php foreach ($data_pesanan_upgrade as $upgrade) { ?>
				<tr>
					<td class="text-center"><?php echo $i;?></td>
					<td><?php echo $upgrade->nama_upgrade;?></td>
					<td class="text-center"><?php echo $upgrade->jumlah;?></td>
				</tr>
				<?php $i++; } ?>
			</table>
			<?php } ?>

			<?php if(!empty($data_pesanan_media)) { ?>
			<table class="half-width">
				<caption class="bold text-left">Media Cetak</caption>
				<tr>
					<th rowspan="2">#</th>
					<th rowspan="2">Nama Media Cetak</th>
					<th rowspan="2">Jumlah</th>
					<th colspan="2">Warna</th>					
				</tr>
				<tr>
					<th>Primer</th>
					<th>Sekunder</th>
				</tr>
				<?php $i = 1;?>
				<?php foreach ($data_pesanan_media as $media) { ?>
				<tr>
					<td class="text-center"><?php echo $i;?></td>
					<td><?php echo $media->nama_media;?></td>
					<td class="text-center"><?php echo $media->jumlah;?></td>
					<td class="text-center"><?php echo $media->nama_warna_primer ? $media->nama_warna_primer : '-';?></td>
					<td class="text-center"><?php echo $media->nama_warna_sekunder ? $media->nama_warna_sekunder : '-';?></td>
				</tr>
				<?php $i++; } ?>
			</table>
			<?php } ?>
		</div>
		<div style="clear: both;"></div>
		</code>

		<table class="no-border">
			<tr>
				<td class="bold">Total Harga: </td>
				<td>Rp <?php echo number_format($list->grandtotal, 0, ",", "."); ?>-</td>
			</tr>
			<tr>
				<td class="bold">Lama Pengerjaan: </td>
				<td><?php echo $list->total_hari; ?> hari</td>
			</tr>
		</table>
		<div style="clear: both;"></div>

		<?php echo !empty($data_email) ? $data_email->isi : ""; ?>
	</div>
</div>

</body>
</html>