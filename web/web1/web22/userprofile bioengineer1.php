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
	$proffession=$_POST['proffession'];
	$experience=$_POST['experience'];
	$gender=$_POST['gender'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$photo=$_POST['photo'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$usertype='bioengineer';
	$insertl= "insert into login(email,password) values('$email','$pass')";
	$inserts= "insert into sign_up(name,email,phone_number,gender,street_name,city_name,pin_code,district,state,country,user_type) values ('$name','$email','$mobile','$gender','$street','$city','$pin','$district','$state','$country','$usertype')";
	$insertbi= "insert into bioengineer(profession,experience,email) values ('$proffession','$experience','$email')";
	$insertph= "insert into photos(email,photo) values ('$email','$photo')";
	$resl=$ob->db_write($insertl);
	$resr=$ob->db_write($inserts);
			if(!$resl || !$resr)
			{
               $ob->db_write("delete from login where email='$email' ");
               $ob->db_write("delete from sign_up where phone_number='$mobile' ");
				?>
				<script>
					alert("Account creation failed");
					window.location='sign up1 form bioengineer.php'
				</script>;
				<?php
				}
				else
				{
                $ob->db_write($insertl);
                $ob->db_write($insertr);
                $ob->db_write($insertbi);
                $ob->db_write($insertph);
                header("location:../userprofile page bioengineer/examples/dashboard.php");
				}
				?>
			</body>
			
			</html>
			