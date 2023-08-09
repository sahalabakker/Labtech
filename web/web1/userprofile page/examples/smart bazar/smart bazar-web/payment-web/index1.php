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
<html>
<head>
<title>Lab Tech</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tabs Payment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<script src="js/jquery.min.js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Mirza:400,500,600,700&amp;subset=arabic,latin-ext" rel="stylesheet">
</head>
<?php
require_once("../../../db.class.php");
$ob=new db_operations();
//$sellername=$_SESSION['seller'];
$cmpl=$_SESSION['cmplid'];
$sel="select * from complaint where complaint_id='$cmpl'";
$res=$ob->db_read($sel);
$arr=mysqli_fetch_array($res);
$sel1="select * from payment where complaint_id='$cmpl'";
$res1=$ob->db_read($sel1);
$arr1=mysqli_fetch_array($res1);
if(isset($_POST['submit']))
{
	$update="update payment SET status=1 where complaint_id='$cmpl'";
	$resup=$ob->db_write($update);
	?>
	<script>
		alert("payment done successfully");
		window.location.replace('../../../dashboard.php');
	</script>
	<?php
}

?>
<body>
	<div class="main">	
		<h1>Pay Here</h1>
		<div class="w3_agile_main_grids">
			<div class="w3layouts_main_grid_left">
				<div class="agileinfo_main_grid_left_grid">
					<h3>Payment Summary</h3>
					
					<ul>
						<li> <?php echo $arr['complaint'] ?><span> <?php echo $arr['book_date'] ?>, at 1:30 PM</span></li>
						<li><span>Equipment: <?php echo $arr['equip'] ?></span></li>
						<li> <span></span></li><br><br><br><br><br><br><br><br><br>
					</ul>
					<ul>
						<li><span></span><span></span></li>
						<li></li>
					</ul>
					
				</div>
				<div class="agile_amount">
					<h3>Total Price</h3>
					<h4><?php echo $arr1['amount'] ?></h4>
					<p>Price includes all taxes</p>
				</div>
			</div>
			<div class="agileits_main_grid_right">
				<div class="wthree_payment_grid">
					<h2>Payment Method</h2>
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li><img src="images/1.jpg" alt=" " /></li>
							<li><img src="images/2.jpg" alt=" " /></li>
						</ul>
						<div class="resp-tabs-container">
							<div class="agileits_w3layouts_tab1">
								<form action="#" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith" required="">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number" required="" 
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">CVV</label>
															<input class="security-code form-control"Â·
																		  inputmode="numeric" required="" 
																		  type="text" name="security-code"
																		  placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY" required="">
												</div>
											</div>
											<div class="agileits_w3layouts_tab2">
											<input type="submit" name="submit" value="Make a payment"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
										</div>
									</section>
								</form>
							</div>
							<div class="agileits_w3layouts_tab2">
								<h3>Already have a paypal Account <a href="#">Login here</a></h3>
								<form action="#" method="post">
									<input type="email" name="Email" placeholder="Email" required="">
									<input type="password" name="password" placeholder="password" required=""> 
									<input type="submit" value="Login">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="agileits_copyright">
			<p>© 2017 Tabs Payment Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
	</div>
	<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->
	<!-- tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
				}
			});
		});
	</script>
	<!-- //tabs -->

</body>
</html>