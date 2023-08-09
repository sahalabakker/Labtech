<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php
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
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
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
</head>
<body>
	<?php
	{
		$email=$_SESSION['email'];
		require("db.class.php");
		$ob=new db_operations();
		$_SESSION['bio_email']=$_GET['email1'];
		$email2=$_SESSION['bio_email'];
		$sel="select * from photos where email='$email2'";
		$res=$ob->db_read($sel);
		$arr=mysqli_fetch_array($res);
		$photo=$arr['photo'];
		$sel1="select * from bioengineer where email='$email2'";
		$res1=$ob->db_read($sel1);
		$arr1=mysqli_fetch_array($res1);
		$sel2="select * from sign_up where email='$email2'";
		$res2=$ob->db_read($sel2);
		$arr2=mysqli_fetch_array($res2);

	
	}
	?>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<!--<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>-->
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!--<li><a href="login.html">Login </a></li> 
							<li><a href="signup.html">Sign Up</a></li> -->
							<li><a href="../../tables.php">My Services</a></li>  
							<li><a href="../../../../logout.php">Log out</a></li>
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
					<h6>Your biomedical engineers.</h6> 
				</div>	
				
				<div class="header-cart"> 

					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html">  Well experienced Biomedical engineers are available here...... <span></span> <span></span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 
	<!-- breadcrumbs --> 
	<div class="container-fluid" style="width: 150%;"> 
		<ol class="breadcrumb breadcrumb1">
			<li><a href="index.html">Home</a></li>
			<li class="active">Single Page</li>
		</ol> 
		<div class="clearfix"> </div>
	</div>
	<!-- //breadcrumbs -->
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<!--<div class="single-page-row" id="detail-21">-->
					<div class="col-md-6 single-top-left">	
						<!--<div class="flexslider">-->
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="<?php echo $arr['photo']; ?>" style="width: 300px; height: 300px;" class="img-responsive" alt=""> </div>
								</li>
								
							</ul>
						<!--</div>-->
					</div>
					<div class="col-md-6 single-top-right">
						<?php echo('<h3 class="item_name">'.$arr2['name'].'</h3>');
						 echo $_GET['email1'];
						 ?> 
                         <br><h7>Contact on:</h7>
						<p>Processing Time: <!--Item will be shipped out within 2-3 working days. --></p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						
						<!--<div class="single-price">
							<ul>
								<li>$540</li>  
								<li><del>$600</del></li> 
								<li><span class="w3off">10% OFF</span></li> 
								<li>Ends on: June,5th</li>
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div>--><br><br>
						<?php echo $arr1['experience'];?> <h7> of experience</h7>
						<p> available days</p>
						<p class="single-price-text"><!--Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.--></p>
						
						
						<p class="single-price-text"><!--Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.--></p>
						<form action="signup.php" method="post">
							<!--<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="Snow Blower" /> 
							<input type="hidden" name="amount" value="540.00" />--> 
							<a href="signup.php">
							<input type="submit" value="post complaint" class="w3ls-cart" style="background-color: #ff4433;"><!--<i class="fa fa-cart-plus" aria-hidden="true"></i>-->
						</a>
						</form>
						<!--<button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>-->
					</div>
				   <div class="clearfix"> </div>
				
			</div> 
			
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">Our services</h3>
				<div class="panel-group" collpse id="accordion" role="tablist" aria-multiselectable="true">
			 

					
					<?php		
					$_SESSION['bio_email']=$_GET['email1'];
		            $email2=$_SESSION['bio_email'];
		            $id=1;
		            $id1=2;
		            $sel="select * from service where email='$email2'";
		            $res=$ob->db_read($sel);
		            $num=mysqli_num_rows($res);
		            if($num!=0)
		            {
		            	while($row=mysqli_fetch_array($res)) {
		          

				//echo("<div class='collpse tabs'>");
				//echo("<div class='panel-group' collpse id='accordion' role='tablist'>");
					echo('<div class="panel panel-default">');
						echo('<div class="panel-heading" role="tab" id="'.$id.'">');
							echo('<h4 class="panel-title">');
								echo('<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$id1.'" aria-expanded="false" aria-controls="'.$id1.'">');
									echo('<i class="" aria-hidden="true"></i>'.$row['service_name'].' <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>');
								echo('</a>');
							echo('</h4>');
						echo('</div>');
						echo('<div id="'.$id1.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$id.'">');
							echo('<div class="panel-body">');
							
							echo $row['about_service'];
							echo("<br>");
							echo("<br>");
							echo('<input type="submit" value="$'.$row['amount'].'" style="float: left;width: 10%;height: 30px;background-color: #e6e6e6;">');
							/*echo("     ");
                            echo('<input type="submit" value="available days per week" style="margin-left: 10px;width: 20%;height: 30px;">');*/
                            echo('<form action="signup.php" method="post">');
							echo('<a href="signup.php">');
							echo('<input type="submit" value="post complaint" class="w3ls-cart" style="width: 10%;float: right; height: 35px;background-color: #ff4433;">');
							echo('</a>');
							echo('</form>');
							echo('</div>');
						echo('</div>');
					echo('</div>');
					$id=$id+1;
					$id1=$id1+1;
				}
			}
			?>
					
					</div>
			</div>
			</div>
	
		

		</div>
	</div>

	<!-- //footer --> 		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2020 | Lab Tech <a href="http://w3layouts.com"> </a></p>
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
</body>
</html>