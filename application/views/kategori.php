<div class="content-white">
	<div class="container">
				<div class="row">
					<div class="content-feature-grids-3">
						<?php
							foreach ($kategori as $row)
								printf("<h3>%s</h3>", $row->kategori);
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-white">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids">
						<div class="row txt-center">
							<?php
								foreach ($detail as $row)
								{
									printf("<div class='col-md-3'><div class='panel panel-default'>");
									printf("<a href='%s/%s'><img src='%s/%s' alt='Images'></a>", base_url('design/details'), $row->id_design, base_url('assets/design'), $row->gambar);
									printf("</div></div>");
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		