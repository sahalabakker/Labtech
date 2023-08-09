<?php
session_start();
$email=$_SESSION['email'];
require("db.class.php");
$ob=new db_operations();
$id1=$_GET['id'];
$sel="select * from product where product_id='$id1'";
		$res=$ob->db_read($sel);
		$arr=mysqli_fetch_array($res);
			$productid=$email1;
			$prname=$arr['product_name'];
			$prcode=$arr['product_code'];
			$prcategory=$arr['category'];
			$prcompany=$arr['company'];
			$pramount=$arr['amount'];
			$proffer=$arr['offer'];
			$prseller=$arr['seller_email'];
			$premail=$email;
			$insertca="insert into cart (product_id,product_name,product_code,category,company,amount,offer,lab_email,seller_email) values ('$productid','$prname','$prcode','$prcategory','$prcompany','$pramount','$proffer','$prseller','$premail')";
			$ob->db_write($insertca);
		?>
		<script>
			alert("product added to your cart");
			window.location='singlep.php'
		</script>
