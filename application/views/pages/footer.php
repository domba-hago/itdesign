<div class="contact">
			<div class="container">
				<div class="row">
				 	<div class="col-md-4">			
				 		<h2>Kontak Kami</h2>
				 		<ul>
				 			<li><h1>IT Design</h1></li>
				 			<li><p>Jl. Mayjen Sungkono KM. 5</p></li>
				 			<li><p>Blater 53371, Kalimanah Purbalingga</p></li>
				 			<li><p>Jawa Tengah, Indonesia</p></li>
				 		</ul>
				 	</div>
				 	<div class="col-md-4">
				 		<h2>Desain Terbaru</h2>
				 		<ul>
				 			<li><p><b>Annisa Fauzia Latifah</b> telah menambahkan desain baru pada <b>Logo</b>. <a href="#">Lihat Sekarang</a>.</p></li>
				 			<li><p><b>Achmad Dejan Firdianza</b> telah menambahkan desain baru pada <b>User Interface</b>. <a href="#">Lihat Sekarang</a>.</p></li>
				 		</ul>
					</div>
					<div class="col-md-4">
				 		<h2>Ikuti Kami</h2>
				 		<ul class="kontak-kami txt-center">
				 			<li><a href="#" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
				 			<li><a href="#" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></li>
				 			<li><a href="#" class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a></li>
				 			<li><a href="#" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></li>
				 		</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
 					<div class="col-md-12">	
						<div class="copy-right">
							<p>&#169 2016 <a href="<?php echo base_url(''); ?>">IT Design</a>. All RIghts Reserved.</p>	
						</div>	
					</div>
				</div>
		    </div>
		</div>

		<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<a href="<?php echo base_url(''); ?>" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	</body>
</html>