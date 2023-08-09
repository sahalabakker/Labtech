<!--A Design by W3layouts
Author: W3layout
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
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
	.t1{
		width:900px;
		height: 300px;
		text-align:center;
		background-color: #c2e0fc;
	}
.butt{
	width:200px;
	height: 40px;
	background-color: #00e58b;
	text-align: center;
	
	}
</style>
</head>
<body>
<?php
require_once("../../db.class.php");
$ob=new db_operations();
$productid=$_GET['id1'];

$email=$_SESSION['email'];

$sel="select * from laboratory where email='$email'";
$res=$ob->db_read($sel);
$arr=mysqli_fetch_array($res);
$name=$arr['laboratory_name'];
$sel1="select * from sign_up where email='$email'";
$res1=$ob->db_read($sel1);
$arr1=mysqli_fetch_array($res1);
$street=$arr1['street_name'];
$city=$arr1['city_name'];
$district=$arr1['district'];
$state=$arr1['state'];
$country=$arr1['country'];
$contact=$arr1['phone_number'];
$pin=$arr1['pin_code'];
$sel2="select * from product where product_id='$productid'";
$res2=$ob->db_read($sel2);
$arr2=mysqli_fetch_array($res2);
$selleremail=$arr2['seller_email'];
$productname=$arr2['product_name'];
$amount=$arr2['amount'];
$offer=$arr2['offer'];
$tot=$amount*($offer/100);
$total=$amount-$tot;
$stock=$arr2['stock'];
$pid=$arr2['product_id'];
$_SESSION['prodid']=$pid;
$sel5="select * from sign_up where email='$selleremail'";
$res5=$ob->db_read($sel5);
$arr5=mysqli_fetch_array($res5);
$sellername=$arr5['name'];
$_SESSION['seller']=$sellername;
if(isset($_POST['sub']))
{
$quantity=$_POST['quantity'];
$labname=$_POST['name'];
$street1=$_POST['street'];
$city1=$_POST['city'];
$district1=$_POST['district'];
$state1=$_POST['state'];
$country1=$_POST['country'];
$contact1=$_POST['contact'];
$pin=$_POST['pin'];
$balance=$stock-$quantity;
if($quantity>$stock)
{
	?><script>
	alert("Sorry!Your need exceeds the stock");
	window.location='seller products.php'
</script>;
<?php
}
else{
	$update="update product SET stock='$balance' where product_id='$productid'";
$res3=$ob->db_write($update);

$insert="insert into address(lab_email,seller_email,product_id,quantity,total_cost,lab_name,street,city,district,state,country,contact_number,pincode)
values('$email','$selleremail','$productid','$quantity','$total','$labname','$street1','$city1','$district1','$state1','$country1','$contact1','$pin')";
$res4=$ob->db_write($insert);

?><script>
	alert("Address details upload successfully");
	window.location='payment-web/index.php'
</script>;
<?php
}
}
?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><h1>CHECKOUT<span>ZONE</span></h1></a>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<!--<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>-->
				</div> 
				
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		
		<div class="clearfix"></div>
	</div>
</div>
	
	<div>

	<form action="#" method="post" name="form">
					
					<table border="2" align="center" class="t1"><tr><th colspan="8" style="text-align: center;">
					PRODUCT DETAILS</th></tr>
				
					
						<tr style="height:70px;">
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Offer</th>
							<th>Total amount</th>
						</tr>
						<tr bgcolor="white" style="height:70px;"><td><?php echo $productid?> </td>
<td><?php echo $productname?></td>
<td><input type="text" name="quantity" required=""></td>
<td><?php echo $amount?></td>
<td><?php echo $offer?></td>
<td><?php echo $total?></td></tr>
<tr><th colspan="8" style="height:50px; text-align: center;">DELIVERY ADDRESS</th></tr>
<tr ><td bgcolor="white">
						<b>Laboratory Name</b></td><td bgcolor="white" colspan="8">
					
							
							<input class="form-control" type="text"  name="name" required="" value="<?php echo $name?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>Street</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="street"  required="" value="<?php echo $street?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>City</b></td><td bgcolor="white"  colspan="8">
						
							
							<input class="form-control" type="text"  name="city"  required="" value="<?php echo $city?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>District</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="district"  required=""  value="<?php echo $district?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>State</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="state"  required="" value="<?php echo $state?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
							<b>Country</b></td><td bgcolor="white" colspan="8">
							
							<input class="form-control" type="text"  name="country"  required="" value="<?php echo $country?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>Contact Number</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="contact"  required="" value="<?php echo $contact?>"  pattern="[+0-9]{13}" onfocus="(this.value='+91')">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>Pincode</b></td><td bgcolor="white" colspan="8">
						<input class="form-control" type="text"  name="pin"  required="" value="<?php echo $pin ?>" placeholder="Pincode">
							<div class="clearfix"></div>
							</td></tr>
							
					</table><div><br>
						<p align="center">
						 <button type="submit" name="sub" class="btn btn-danger">Continue</button></p></div></form>
		<br><p align="center"><a href="address2.php?id1=<?php echo $productid;?>">	<button type="submit"  class="btn btn-danger">Add a new address</button></a>
					
					
			
			</div>
		<!-- newsletter -->
	
<!-- //newsletter -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
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
</body>
</html>