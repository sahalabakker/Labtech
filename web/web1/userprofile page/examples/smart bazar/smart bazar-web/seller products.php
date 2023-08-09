<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab Tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed--> 
<!-- start-smooth-scrolling -->
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
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
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
<!-- //smooth-scrolling-of-move-up -->  
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
<style>
	.checked {
		color: orange;
		align-self: center;
		text-align: center;
	}
	.checkedq {
		color: orange;
		padding-left: 130px;
	}
	.center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
		background-color: white;
	}
	.back {
		filter: brightness(50%);
	}
	.team-img {
		padding: 5px;
		padding-top: 20px;
		padding-bottom: 20px;
		box-shadow: 0px 0px 11px 0px #989898;
	}
</style>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">The big sale for your laboratory products... |Try now .. </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!--<li><a href="login.html">Login </a></li> -->
							<!--<li><a href="signup.html">Sign Up</a></li> -->
							<li><a href="../../orders.php">My Orders</a></li>  
							<li><a href="../../../../logout.php">Logout</a></li>
						</ul> 
					</li> 
					
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href=""><span>L</span>ab <i>Tech</i></a></h1>
					<h6>Your sales</h6> 
				</div>	
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<!--<div class="header-three"><!-- header-three -->
			<!--<div class="container">-->
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0" style="padding-left: 80px;">store categories</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="offers.html">Fully Automated Machines</a></li>
								<li><a href="offers.html">Half Automated Machines</a></li>
								<li><a href="offers.html">Laboratory Reagents</a></li>
								<li><a href="offers.html">Other Equipments or accessories</a></li>
							</ul>
						</nav>
					</div>
				</div>
									
									
										
				<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="move-text">
					<div class="marquee"><a href=""> <b>Here is best sale for your laboratory products... <span>Big sales for your products..</span> <span></span></b></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div> 
		<!--<a href="javascript:;" class="btn btn-primary btn-round" style="position: right;">Add Products</a>
		<input type="button" name="submitt" value="Update Profile" class="btn btn-primary pull-right">-->
	<!-- //header --> 	
	<!-- products -->
	<br><br>
	<div class="products">	 
		<div class="container" style="width: 95%;">
			<div class="col-lg-14 product-w3ls-center">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.html"><b>Home</b></a></li>
					<li class="active"><b>Products</b></li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Laboratory products</h4>
					<ul> 
						
					</ul> 
					<div class="clearfix"> </div>
				</div><br><br>
				<div class="products-row">
					
					<?php

					//$_email=$_SESSION['email'];


					require("db.class.php");
					$ob=new db_operations();
					$email1=$_SESSION['email'];
					$user="seller";
					$sel="select * from product";
					$res=$ob->db_read($sel);
					$arr=mysqli_num_rows($res);
					
					if($arr!=0)
					{
						while($row=mysqli_fetch_array($res))
						{
							$email=$row['seller_email'];
							
					echo("<div class='col-md-3 product-grids'>");
						echo("<div class=agile-products>");
						//echo ("<div class=team-img>");
							echo("<div class=new-tag><h6>New</h6></div>");
							echo('<a href=singlep.php?email1='.$row['product_id'].'>');
						
							echo('<img bgcolor="black" src="./images/'.$row['photo'].'"alt="img" class="center" style="width: 200px;height: 200px;data-background-color: white;"></a>');
						//echo("<img class=img src=".$photo."</a>");
							echo("<div class=agile-product-text> "); 
							//echo("</div>");
							//echo("</div>");
							//echo("</div>");
							//for ($j=0;$j<$arr;$j++) { 
								
							echo('<h5 style="text-align: center;"><a href=singlep.php?email1='.$row['product_id'].'>'.$row['product_name'].'</a></h5>');

								
                                
								echo('<span class="fa fa-star checkedq"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star"></span>');
								
						
								echo('<h6 style="text-align: center;">$'.$row['amount'].'</h6> ');
								echo ("<br>");
								
								    echo('<a href=singlep.php?email1='.$row['product_id'].'>');
								    echo('<button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Quick View</button>');
								    
									
									echo('</a>');
								echo("</form>"); 
								echo("</div>");
							echo("</div>");
						echo("</div>"); 
					//echo("</div>");
						//}
					}
				}
				
				?>
					
					<div class="clearfix"> </div>
				</div>
				
			</div>

						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					
				</div>

			</div>
			<div class="clearfix"> </div>

		</div>
	</div>

	<div class="copy-right"> 
		<div class="container">
			<p>© 2020 | Lab Tech <a href="http://w3layouts.com"></a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>