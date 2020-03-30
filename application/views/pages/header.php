<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>IT Design - <?php echo $judul; ?></title>

		<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url('assets/css/bootstrap-social.css'); ?>" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url('assets/css/theme.css'); ?>" rel='stylesheet' type='text/css' />
		
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/login.js'); ?>"></script>
		
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
						<div class="logo"><a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></a></div>
					</div>
					<div class="col-md-8" style="padding-top: 10px">					
	 					<div class="h_right">
	 						<div class="left">
								<ul class="menu list-unstyled">		
									<li class="<?php echo ($active == 'index' ? 'active' : ''); ?>"><a href="<?php echo base_url(''); ?>">Home</a></li>
									<!-- <li class="<?php echo ($active == 'promo' ? 'active' : ''); ?>"><a href="<?php echo base_url('design/promo'); ?>">Promo</a></li> -->
									<li class="<?php echo ($active == 'terbaru' ? 'active' : ''); ?>"><a href="<?php echo base_url('design/terbaru'); ?>">Terbaru</a></li>
									<li class="<?php echo ($active == 'tentang' ? 'active' : ''); ?>"><a href="<?php echo base_url('tentang'); ?>">Tentang</a></li>
									<li class="<?php echo ($active == 'login' ? 'active' : ''); ?>"><a href="<?php echo base_url('signin'); ?>">Login</a></li>
								</ul>
							</div>	
							<nav class="nav">
					            <ul class="nav-list">
					                <li class="nav-item"><a href="<?php echo base_url(''); ?>">Home</a></li>
					                <li class="nav-item"><a href="<?php echo base_url('design/promo'); ?>">Promo</a></li>
					                <li class="nav-item"><a href="<?php echo base_url('design/terbaru'); ?>">Terbaru</a></li>
					                <li class="nav-item"><a href="<?php echo base_url('tentang'); ?>">Tentang</a></li>				               
					                <div class="clearfix"></div>		
					            </ul>					            
					        <div class="nav-mobile"></div></nav>
					        <script type="text/javascript" src="<?php echo base_url('assets/js/responsive.menu.js'); ?>"></script>
						</div>
					</div>     
				</div>
			</div>
        </div>
        