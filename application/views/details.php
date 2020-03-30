<div class="content-white">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids-2">
					<?php foreach($detail as $row) { ?>
						<div class="row txt-center">
							<?php
								printf("<div class='col-md-3'><div class='panel panel-default'>");
								printf("<img src='%s/%s' alt='Images'>", base_url('assets/design'), $row->gambar);
								printf("</div>");
								if ($row->status == 1)
									printf("<a href='%s' class='btn btn-success' title='Pesan Desain'><i class='fa fa-cart-plus'></i> Pesan Desain</a>", base_url('pesan/' . $row->id_design));
								else
									printf("<p class='status alert alert-danger'>Tidak Tersedia</p>");

								printf("</div>");
							?>
							<div class="col-md-9 txt-lt">
								<h2><?php echo $row->nama; ?></h2>
								<dl class="dl-horizontal">
			                        <dt>Desain Oleh</dt><dd><?php echo $row->pembuat; ?></dd>
			                        <dt>Dibuat</dt><dd><?php echo $row->tanggal; ?></dd>
			                        <dt>Mobile</dt><dd><?php echo $row->mobile; ?></dd>
			                        <dt>Email</dt><dd><?php echo $row->email; ?></dd>
			                        <dt>Harga</dt><dd><?php echo $this->itdesign->formatNumber($row->harga); ?></dd>
			                    </dl>
			                    <br>
			                    <h2>Deskripsi Desain</h2>
			                    <p class="txt-justify"><?php echo $row->deskripsi; ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		