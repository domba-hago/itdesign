<div class="header-bg-image">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids">
						<h3 class="header-white">Selamat datang di IT Design!</h3>
						<p class="header-white">IT Design memberikan desain logo, template, banner, undangan, dan kartu nama yang berkualitas. Dibuat dari bermacam-macam designer yang sudah berpengalaman. Anda dapat memilih sendiri desain mana yang akan Anda gunakan</p>
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
								foreach ($kategori as $row)
									printf("<div class='col-md-4 category-box'><i class='fa fa-3x fa-%s'></i><h2>%s</h2><p>%s</p><p><a class='btn btn-primary' href='%s/%s'>Jelajahi</a></p></div>", $row->kategori_icon, $row->kategori, $row->kategori_details, base_url('kategori'), $this->itdesign->seoUrl($row->kategori));
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		