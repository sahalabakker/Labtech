<?php
session_start();
?>
<html>
<head>
	</head>
	<body>
<?php
	require("db.class.php");
	$ob=new db_operations();
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	$pass=$_SESSION['pass'];
	$mobile=$_SESSION['mobile'];
	$gender=$_POST['gender'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$usertype='seller';
	$insertl= "insert into login(email,password) values('$email','$pass')";
	$inserts= "insert into sign_up(name,email,phone_number,gender,street_name,city_name,pin_code,district,state,country,user_type) values ('$name','$email','$mobile','$gender','$street','$city','$pin','$district','$state','$country','$usertype')";
	/*$insertbi= "insert into bioengineer(profession,experience) values ('$proffession','$experience')";*/
	$resl=$ob->db_write($insertl);
	$resr=$ob->db_write($inserts);
			if(!$resl || !$resr)
			{
               $ob->db_write("delete from login where email='$email' ");
               $ob->db_write("delete from sign_up where phone_number='$mobile' ");
				?>
				<script>
					alert("Account creation failed");
					window.location='sign up1 form seller.php'
				</script>;
				<?php
				}
				else
				{
                $ob->db_write($insertl);
                $ob->db_write($insertr);
                /*$ob->db_write($insertbi);*/
                header("location:../userprofile page seller/examples/dashboard.php");
				}
				?>
			</body>
			
			</html>
			