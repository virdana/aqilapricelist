<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php include_once "head.php";?>
<body>

<div id="container">
	<h1>Pilih Tipe Ilustrasi</h1>

	<div id="row">
		<div class="col-sm-10">
			<table class="table">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Basic (30K)</th>
						<th>Standard (55K)</th>
						<th>Premium (100K)</th>
						<th>Design Only</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Deskripsi</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
						<td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</td>
						<td>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td>
						<td>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</td>
					</tr>
					<tr>
						<td>Color</td>
						<td>Monochrome</td>
						<td>Full Color</td>
						<td>Full Color</td>
						<td>Full Color</td>
					</tr>
					<tr>
						<td>Background (Stock)</td>
						<td><i class="fa fa-minus"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
					<tr>
						<td>High Quality Softfile</td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-minus"></i></td>
					</tr>
					<tr>
						<td>Kepala hingga pinggang</td>
						<td><i class="fa fa-minus"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-minus"></i></td>
					</tr>
					<tr>
						<td>Delivery Time</td>
						<td>
							<div class="radio">
								<label><input type="radio" name="delivery_basic" value="1">3 Hari</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="delivery_basic" value="2">1 Hari (+15K)</label>
							</div>
						</td>
						<td>
							<div class="radio">
								<label><input type="radio" name="delivery_standard" value="1">5 Hari</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="delivery_standard" value="2">1 Hari (+30K) <p class="small">(Max 3 kepala)</p></label>
							</div>
						</td>
						<td>
							<div class="radio">
								<label><input type="radio" name="delivery_premium" value="1">7 Hari</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="delivery_premium" value="2">2 Hari (+50K) <p class="small">(Max 2 kepala)</p></label>
							</div>
						</td>
						<td>
							<div class="radio">
								<label><input type="radio" name="delivery_design" value="1">1 Hari</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><div class="btn btn-default">Select Rp 30.000</div></td>
						<td><div class="btn btn-default">Select Rp 55.000</div></td>
						<td><div class="btn btn-default">Select Rp 100.000</div></td>
						<td><div class="btn btn-default">Select Rp 25.000</div></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include_once "footer_js.php";?>
</body>
</html>