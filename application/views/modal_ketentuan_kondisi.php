<div id="modalTerms" class="modal " role="dialog">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header bg-info">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Ketentuan &amp; Kondisi</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div id="textTerms">
						<?php if(empty($data_terms)) { ?>
							<p class="text-center">Tidak ada teks</p>
						<?php } else {
							echo $data_terms->isi;
						} ?>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<div class="checkbox">
							<label><input type="checkbox" id="checkTerms">Saya menyetujui ketentuan di atas</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnTerms" class="btn btn-info pull-right" onclick="submitPemesan();" disabled="true"><i class="fa fa-check"></i> Proses Pesanan</button>
			</div>
		</div>
	
	</div>
</div>