<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>IT Design - Solusi untuk segala desain Anda</title>

		<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="assets/css/bootstrap-social.css" rel='stylesheet' type='text/css' />
		<link href="assets/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
		<link href="assets/css/theme.css" rel='stylesheet' type='text/css' />
		
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/login.js"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

 		<script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>
	<body>
		<!-- Menu -->
		<div class="header-bg" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><a href="#"><img src="assets/images/logo.png"></a></div>
					</div>
					<div class="col-md-8" style="padding-top: 10px">					
	 					<div class="h_right">
	 						<div class="left">
								<ul class="menu list-unstyled">		
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="promo.php">Promo</a></li>
									<li><a href="terbaru.php">Terbaru</a></li>
									<li><a href="tentang.php">Tentang</a></li>
								</ul>
							</div>	
							<div class="right">
								<ul class="menu list-unstyled">						                   
									<li class="login"><div class="log_box">
							    		<div id="loginContainer">
							                <a href="#" id="loginButton" class=""><span>Login</span></a>               
								            <div id="loginBox" style="display: none;">                
								                <form id="loginForm">	
								                    <fieldset id="body">
								                        <fieldset>
								                            <input type="text" name="email" id="email" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
								                            <input type="password" class="textbox" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
								                        </fieldset>
								                        <input type="submit" id="log" value="Sign in">
								                        <label for="checkbox"><i><a href="">Lost Password ?</a></i></label>
								                    </fieldset>
								                </form>
								            </div>
							            </div>
							            <div class="clearfix"></div>
							        </li>
								</ul>
							</div>
							<nav class="nav">
					            <ul class="nav-list">
					                <li class="nav-item"><a href="index.php">Home</a></li>
					                <li class="nav-item"><a href="promo.php">Promo</a></li>
					                <li class="nav-item"><a href="terbaru.php">Terbaru</a></li>
					                <li class="nav-item"><a href="tentang.php">Tentang</a></li>				               
					                <div class="clearfix"></div>		
					            </ul>					            
				
					        <div class="nav-mobile"></div></nav>
					        <script type="text/javascript" src="assets/js/responsive.menu.js"></script>
						</div>
					</div>     
				</div>
			</div>
        </div>
		<div class="container">
			<div class="row">
				<div class="content-feature-grids">
					<h3>Selamat datang di IT Design!</h3>
					<p>IT Design memberikan desain logo, template, banner, undangan, dan kartu nama yang berkualitas. Dibuat dari bermacam-macam designer yang sudah berpengalaman. Anda dapat memilih sendiri desain mana yang akan Anda gunakan</p>
				</div>
			</div>
		</div>
		<div class="content-white">
			<div class="container">
				<div class="row">
					<div class="content-feature-grids">
						<div class="row txt-center">
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-cubes"></i>
								<h2>Logo</h2>
								<p>Jadikan produk Anda semakin dikenal dunia</p>
								<p><a class="btn btn-default" href="kategori/logo.php">Jelajahi</a></p>
							</div>
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-desktop"></i>
								<h2>User Interface</h2>
								<p>Ingin mempunya aplikasi yang <em>User Friendly</em>? Solusinya ada pada kami</p>
								<p><a class="btn btn-default" href="kategori/user-interface.php">Jelajahi</a></p>
							</div>
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-television"></i>
								<h2>Template Website</h2>
								<p>Promosikan produk Anda kepada dunia melalui website yang bagus</p>
								<p><a class="btn btn-default" href="kategori/template-website.php">Jelajahi</a></p>
							</div>
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-fa"></i>
								<h2>Banner</h2>
								<p>Ingin acara Anda dilirik pengunjung? Desain banner kami solusinya</p>
								<p><a class="btn btn-default" href="kategori/banner.php">Jelajahi</a></p>
							</div>
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-address-card"></i>
								<h2>Kartu Nama</h2>
								<p>Dengan hanya melihat desain kartu nama kami? Anda langsung diingat orang lain</p>
								<p><a class="btn btn-default" href="kategori/kartu-nama.php">Jelajahi</a></p>
							</div>
							<div class="col-md-4 category-box">
								<i class="fa fa-3x fa-envelope"></i>
								<h2>Kartu Undangan</h2>
								<p>Undangan pernikahan? Undangan acara? Semuanya ada pada kami</p>
								<p><a class="btn btn-default" href="kategori/kartu-undangan.php">Jelajahi</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
				 			<li><a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
				 			<li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></li>
				 			<li><a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a></li>
				 			<li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></li>
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
							<p>&#169 2016 <a href="#">IT Design</a>. All RIghts Reserved.</p>	
						</div>	
					</div>
				</div>
		    </div>
		</div>

		<script type="text/javascript" src="assets/js/move-top.js"></script>
		<script type="text/javascript" src="assets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	</body>
</html>