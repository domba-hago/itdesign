<div class="content-white">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids-2 col-md-4 col-md-offset-4">
						<h2>Login</h2>
						<?php echo $this->session->userdata('status'); ?>
						<form method="post" action="<?php echo base_url('core/signin'); ?>">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-users"></i></span>
									<input class="form-control" type="text" name="username" id="username" required="required">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-key"></i></span>
									<input class="form-control" type="password" name="password" id="password" required="required">
								</div>
							</div>
							<div class="form-group">
								<span style="padding-top: 10px;">Belum punya akun? <a href="<?php echo base_url('signup'); ?>" title="Daftar Sekarang">Daftar Sekarang</a></span>
								<input class="btn btn-primary pull-right" type="submit" name="submit" id="submit" value="Masuk">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		