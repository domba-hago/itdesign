<div class="content-white">
	<div class="container">
				<div class="row">
					<div class="content-feature-grids-3">
						<h3>Pemesanan Desain</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="content-white">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids-2">
						<form action="<?php echo base_url('core/pesan'); ?>" method="post">
							<div class="form-group">
								<label>Nama Anda</label>
								<input type="text" name="nama" class="form-control" required="required">
							</div>
							<input type="hidden" name="id_design" value="<?php echo $this->uri->segment(2); ?>">
							<table class="table table-stripped">
								<thead>
									<td>#</td>
									<td>Nama Item</td>
									<td>Kategori</td>
									<td>Jumlah</td>
									<td class="text-right">Harga</td>
								</thead>
								<tbody>
									<?php
										foreach ($detail as $row)
										{
											printf("<tr><td>1</td><td>%s</td><td>%s</td><td>%d</td><td class='text-right'>%s</td></tr>", $row->nama, $row->kategori, 1, $this->itdesign->formatNumber($row->harga));
											printf("");
										}
									?>
								</tbody>
							</table>
							<input type="submit" name="submit" class="btn btn-primary" value="Pesan Sekarang">
						</form>
					</div>
				</div>
			</div>
		</div>
		