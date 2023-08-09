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
				<p><a href="#">Experienced biomedical engineers are here... | get well experienced biomedical engineers.. </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!--<li><a href="login.html">Login </a></li> -->
							<!--<li><a href="signup.html">Sign Up</a></li> -->
							<li><a href="../../tables.php">My Services</a></li>  
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
					<h6>Your biomedical engineers</h6> 
				</div>	
				
				<div class="header-cart"> 
					
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<!--<div class="header-three"><!-- header-three -->
			<!--<div class="container">-->
				<!--<div class="menu">
					
				<!--</div>-->
				<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> <b>Provide creative biomedical engineers must be creative to come up with innovative and integrative advances in healthcare equipments... <span>We can defenitely resolve your laboratory equipment complaints..</span> <span> Try Booking...</span></b></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	<!-- //header --> 	
	<!-- products -->
	<div class="products">	 
		<div class="container" style="width: 95%;">
			<div class="col-lg-14 product-w3ls-center">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.html"><b>Home</b></a></li>
					<li class="active"><b>Biomedical engineers</b></li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Biomedical Engineers</h4>
					
					<div class="clearfix"> </div>
				</div><br><br>
				<div class="products-row">
					
					<?php

					$_email=$_SESSION['email'];


					require("db.class.php");
					$ob=new db_operations();
					$user="bioengineer";
					$sel="select * from bioengineer where email In(select email from sign_up where user_type='$user')";
					$res=$ob->db_read($sel);
					$arr=mysqli_num_rows($res);
					
					if($arr!=0)
					{
						while($row=mysqli_fetch_array($res))
						{
							$email=$row['email'];
							$sel1="select * from photos where email='$email'";
							$res1=$ob->db_read($sel1);
							$row1=mysqli_fetch_array($res1);
							$sel2="select * from sign_up where email='$email'";
					$res2=$ob->db_read($sel2);
					$row2=mysqli_fetch_array($res2);
				
						
					
					
							


					echo("<div class='col-md-3 product-grids'>");
						//echo("<div class=agile-products>");
						echo ("<div class=team-img>");
							//echo("<div class=new-tag><h6><br></h6></div>");
							echo('<a href=single.php?email1='.$row['email'].'>');
						
							echo('<img bgcolor="black" src="../../../../smart bazar/smart bazar-web/images/'.$row1['photo'].'"alt="img" class="center" style="width: 200px;height: 200px;data-background-color: white;"></a>');
						//echo("<img class=img src=".$photo."</a>");
							echo("<div class=agile-product-text> "); 
							//echo("</div>");
							//echo("</div>");
							//echo("</div>");
							//for ($j=0;$j<$arr;$j++) { 
								
							echo('<h5 style="text-align: center;"><b><a href=single.php?email1='.$row['email'].'>'.$row2['name'].'</a></b></h5>');

								
                                
								echo('<span class="fa fa-star checkedq"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star checked"></span>');
							echo('<span class="fa fa-star"></span>');
								
						
								echo('<h6 style="text-align: center;"><b>'.$row['experience'].' of experience </b></h6> ');
								echo ("<br>");
								/*echo("<form action=# method=post>");
									echo("<input type=hidden name=cmd value=_cart />");
									echo("<input type=hidden name=add value=1 /> ");
									echo("<input type=hidden name=w3ls_item value=Audio speaker />"); 
									echo("<input type=hidden name=amount value=100.00 /> ");
									echo("<br>");*/
								    echo('<a href=single.php?email1='.$row['email'].'>');
									echo('<button type=submit class=w3ls-cart pw3ls-cart style=text-color: white;><i class=fa fa-cart-plus aria-hidden=true></i><h10 style="color: white;"> BOOK</h10>');
									echo('</a>');
								echo("</form>"); 
								echo("</div>");
							//echo("</div>");
						echo("</div>"); 
					echo("</div>");
						//}
					}
				}
				
				
				?>
					
					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products back">
					<a href="#"> <br><br>
						<b><h4 style="color: #000000;"><b>TOP 10 BIOMEDICAL ENGINEERS  </b><span></span> <br>
						<b>BOOK NOW </b><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></b>
					</a>
				</div>
				<!-- //add-products -->
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