<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require("db.class.php");
$ob=new db_operations();
$obj=new db_operations();
$laboratoryname=$_SESSION['laboratoryname'];
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$mobile=$_SESSION['mobile'];
$license= $_POST['license'];
$accreditation=$_POST['accreditation'];
$street=$_POST['street'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$district=$_POST['district'];
$state=$_POST['state'];
$country=$_POST['country'];
$license=$_POST['license'];
$photo=$_POST['photo'];
$usertype='laboratory';
	$sel1="select * from laboratory where license_number='$license'";
	$res1=$obj->db_read($sel1);
	$arr=mysqli_fetch_array($res1);
	if(mysqli_num_rows($res1)!=0)
		{
			?>
			<script type="text/javascript">
				alert("laboratory already exist");
				window.location='sign up1 form.php'
			</script>
			<?php
		}
		else
		{
$insertl="insert into login(email,password) values('$email','$pass')";
$inserts="insert into sign_up(phone_number,email,street_name,city_name,pin_code,district,state,country,user_type) values ('$mobile','$email', '$street', '$city', '$pin', '$district', '$state', '$country','$usertype')";
/*$update="update sign_up set license_number='$license',accreditation='$accreditation',phone_number='$mobile',street_name='$street',city_name='$city',pin_code='$pin',district='$district',state='$state',country='$country',status=1 where status=0";*/
$insertla="insert into laboratory(laboratory_name,accreditation,license_number,email) values ('$laboratoryname','$accreditation','$license','$email')";
$insertph="insert into photos(email,photo) values ('$email','$photo')";
$resl=$ob->db_write($insertl);
$resr=$ob->db_write($inserts);
$resla=$ob->db_write($insertla);
$resph=$ob->db_write($insertph);
if(!$resl || !$resr || !$resla || !$resph)
			{
               $ob->db_write("delete from login where email='$email' ");
               $ob->db_write("delete from sign_up where phone_number='$mobile' ");
               $ob->db_write("delete from laboratory where license_number='$license' ");
               $ob->db_write("delete from photos where email='$email' ");
				?>
				<script>
					alert("Account creation failed");
					window.location='sign up1 form.php'
				</script>;
				<?php
				}
				else
				{
                $ob->db_write($insertl);
                $ob->db_write($insertr);
                $ob->db_write($insertla);
                $ob->db_write($insertph);
                header("location:../userprofile page/examples/dashboard.php");
				}
			}
				?>
</body>
</html>