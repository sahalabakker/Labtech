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
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
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
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
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
	$email=$_SESSION['email'];
	$id2=$_SESSION['id'];
	//$bio_email=$_SESSION['bio_email'];
	require("db.class.php");
	
	$ob=new db_operations();
	if(isset($_POST['submitt'])){
	//$lab_email=$_SESSION['email'];
	//$bio_email=$_SESSION['bio_email'];
	$name=$_POST['productname'];
	$code=$_POST['productcode'];
	$category=$_POST['category'];
	$company=$_POST['company'];
	$stock=$_POST['stock'];
	$amount=$_POST['amount'];
	$offer=$_POST['offer'];
	//$photo=$_POST['photo'];
	//$complaint=htmlspecialchars($_POST['complaint']);
	$update1="update product SET product_name='$name',product_code='$code',category='$category',company='$company',stock='$stock',amount='$amount',offer='$offer' where product_id='$id2'";


   $ob->db_write($update1);
}

$sel="SELECT * from product where product_id='$id2'";
   $res=$ob->db_read($sel);
   $arr2=mysqli_fetch_array($res);
$name=$arr2['product_name'];
  $code=$arr2['product_code'];
  $category=$arr2['category'];
  $company=$arr2['company'];
  $stock=$arr2['stock'];
  $amount=$arr2['amount'];
  $offer=$arr2['offer'];
$photo=$arr2['photo'];


	?>
	
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p style="color: #fff;">Efficient platform for laboratory equipment sales |  </p>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href=""><span>L</span>ab <i>Tech</i></a></h1>
					<h6>Upload your laboratory equipments..</h6> 
				</div>	
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				
				
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
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
	<!-- sign up-page -->
	<div class="login-page" style="width: 100%;">
		<div class="container" style="width: 95%;height: 95%;"> 
			<h3 class="w3ls-title w3ls-title1">Update Your Products</h3>
			<a href="" data-toggle="modal" data-target="#myModal">
			<img align="left" width="320" height="320" src="./images/<?php echo $arr2['photo'] ?>" alt="img" style="padding-left: 35px; padding-right: 10px;padding-top: 10px;"> 
		</a>
			<div class="login-body">

				<form validate="true" action="" method="post">

					
					<!--<input type="text" class="user" name="email" placeholder="Enter your email"  style="visibility: hidden;" value=<?php echo $_SESSION['email'];?> required="">
					<input type="text" class="user" name="email" placeholder="Enter your email"  style="visibility: hidden;" value=<?php echo $_SESSION['bio_email'];?> required="">-->
					<!--<input type="password" name="password" class="lock" placeholder="Password" required="">-->
					<!--<textarea id="textarea" name="txt" rows="4" cols="50">
					</textarea>-->
					<input type="text" class="user" name="productname" placeholder="Product Name" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $name ?>" >

					<input type="text" class="user" name="productcode" placeholder="Product Code" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $code ?>" >

					<input list="exampleInputTextse" type="text" class="user" name="category" id="exampleInputText" autocomplete="off" placeholder="Product Category" required value="<?php echo $category ?>" >
				<datalist id="exampleInputTextse">
                     <option value="Laboratory Reagents">
                     <option value="Fully Automated Machines">
                     <option value="Half Automated Machines">
                    <option value="Other Laboratory Equipments">
               </datalist>
                     

					
					<input type="text" class="user" name="company" placeholder="Company Name Of Product" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $company ?>" >

					<input type="text" class="user" name="stock" placeholder="Available Stock" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $stock ?>" >

					<input type="text" class="user" name="amount" placeholder="Amount" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $amount ?>" >

					<input type="text" class="user" name="offer" placeholder="Offer In %" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $offer ?>">

					<!--<input type="date" name="date" class="user" placeholder="booking date" required="">
					<label for="complaint" name="complaint" class="user textarea" placeholder="complaint" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' pattern="^[^\s]">
					<textarea id="textarea" class=" " name="complaint" rows="4" cols="70" required=""> your complaint
					</textarea>
				</label>-->
				<!--<label for="user" placeholder="product photo" class="user" style="text-align: left;">product photo</label>
				<input type="file" class="user" name="photo" placeholder="Product Photo" required="" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' value="<?php echo $photo ?>">-->
			<br>
					<input type="submit" name="submitt" value="Update ">
					<!--<input type="radio" id="fully" name="fully" class="user" value="fully automated" required="" placeholder="fully automated"><label for="fully"><font color="white">fully</font></label>
					<input type="radio" name="half" class="user" value="half automated" required="">-->
					<!--<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>-->
				</form>
			</div>  
			<!--<h6>Already have an account? <a href="login.html">Login Now »</a> </h6>-->  
		</div>
	</div>
	<!-- //sign up-page --> 
	<!-- footer-top -->
	<!--<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<!--<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul>
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<!--<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>S</span>mart <i>Bazaar</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li> 
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!-- //footer -->		
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
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          <form action="" method="post">
          <input type="file" name="nphoto" ><br>
          <!--<input type="submit" name="upphoto" value="update" >--> 
        </div>
        <!--<div class="modal-body">
        	<form action="" method="post">
          <input type="file" name="nphoto" ><br>
          <input type="submit" name="upphoto" value="update" > 
          <?php echo $id2 ?>
      </form>
        </div>-->
        <div class="modal-footer">
        	<input type="submit" name="upphoto" value="update" class="btn btn-info btn-fill" style="background-color: #33ccff;">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Close"></button>
        </div>
    </form>
      </div>
      
    </div>
  </div>
  <?php
  if(isset($_POST['upphoto']))
  {
  	$nphoto=$_POST['nphoto'];
  	$update="update product set photo='$nphoto' where product_id='$id2'";
  	echo $update;
  	$ob->db_write($update);
  	header("location:seller update.php");

  }
  ?>
</body>
</html>