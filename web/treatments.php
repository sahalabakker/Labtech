<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Lab Tech | products </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header_w3l">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a  href="index.html">Lab <span>Tech </span></a></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="codes.html">Services</a></li>
					<li><a href="treatments.html" class="active">Products</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="web1/login1.php">Login</a></li>
					<li><a data-target="#myModal" data-toggle="modal" id="MainNavHelp" href="">Sign Up</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!--modal content-->
					<div class="modal-content">
						<div class="modal-header" style="background-color: #ff5050;">
							<button type="button" class="close" data-dismiss="modal">&times</button>
							<h4 class="modal-title">Choose Category</h4>
						</div>
						<div class="modal-body">
							<a href="web1/web22/sign up1 form.php">
								<img src="images/iconmdlab.png" alt="Avatar" class="avatar"></a>&nbsp &nbsp &nbsp &nbsp
							<a href="web1/web22/sign up1 form bioengineer.php">
								<img src="images/bio1.jpg" alt="Avatar" class="avatar"></a>&nbsp &nbsp &nbsp &nbsp
							<a href="web1/web22/sign up1 form seller.php">
								<img src="images/worker.png" alt="Avatar" class="avatar"></a>&nbsp &nbsp &nbsp &nbsp
					
						</div>
						<div class="modal-footer" style="background-color: #ff5050;">
							<button type="button" class="btn-btn-default" data-dismiss="modal" style="background-color: #ff5050">Close</button>
						</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- header -->
<!-- banner -->
<div class="banner_w3ls page_head">
	
</div>
<!-- //banner -->
<!-- gallery -->
	<div class="gallery all_pad wthree">
		<div class="container">
			<h3 class="title w3">Products</h3>
			<h5 class="title w3">Laboratory equipments</h5>
			
			<div class="gallery-grids w3-agileits">
				<div class="col-xl-6 gallery-grids-left">
					<?php
					{

					
                      for($i=0;$i<1000;$i++)
                      {


					echo("<div class=col-lg-4 gallery-grids-right>");
						echo("<div class=gallery-grid>");
							echo("<img src=images/9.jpg data-big-src=images/9.jpg alt= />");
							echo("<p>Automated laboratory cbc bloodtest machine</p>");
							echo("<p  style=opacity:0;display:none>haematological analyser used to evaluate haematological test like ESR,PCV,CBC,etc..</p>");
						echo("</div>");
					echo("</div>");

}

				}
				?>
					<div class="clearfix"> </div>
				</div>
			   <div class="clearfix"> </div>
			    <script type='text/javascript' src='js/jquery.easy-gallery.js' ></script>
				<script type='text/javascript'>
				  //init Gallery
				  $('.gallery').easyGallery();
				</script>
			</div>
		</div>
	</div>
<!-- //gallery -->
<!-- contact -->
<div class="contact_w3agile">
	<div class="container">
		<h2 class="title agileinfo">Get In Touch</h2>
		<div class="strip"></div>
		<!--<ul>
			<li><a class="fb-icon1" href="#"></a></li>
			<li><a class="fb-icon2" href="#"></a></li>
			<li><a class="fb-icon3" href="#"></a></li>
			<li><a class="fb-icon4" href="#"></a></li>
			<li><a class="fb-icon5" href="#"></a></li>
		</ul>-->
		<form action="#" method="post">
			<input type="text" value="Name" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
			<input type="email" value="Email" name="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
			<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Message</textarea>
			<div class="con-form text-center">
				<input type="submit" value="Send">
			</div>
		</form>
		<!--<p class="agileinfo">&copy; 2017 Clinical Lab . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>-->
	</div>
</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>