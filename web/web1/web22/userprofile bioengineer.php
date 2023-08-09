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
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$mobile=$_SESSION['mobile'];
$proffession= $_POST['proffession'];
$experience=$_POST['experience'];
$gender=$_POST['gender'];
$street=$_POST['street'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
/*$license=$_POST['license'];
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
		{*/
$insertl="insert into login(email,password) values('$email','$pass')";
$inserts="insert into sign_up(email,phone_number,gender,street_name,city_name,pin_code,district,state,country) values ('$email','$mobile', '$gender','$street', '$city', '$pin', '$district', '$state', '$country')";
/*$update="update sign_up set license_number='$license',accreditation='$accreditation',phone_number='$mobile',street_name='$street',city_name='$city',pin_code='$pin',district='$district',state='$state',country='$country',status=1 where status=0";*/
$insertbi="insert into bioengineer(proffession,experience) values ('$proffession','$experience')";
$resl=$ob->db_write($insertl);
$resr=$ob->db_write($inserts);
$resbi=$ob->db_write($insertbi);
if(!$resl || !$resr || !$resbi)
			{
               $ob->db_write("delete from login where email='$email' ");
               $ob->db_write("delete from sign_up where phone_number='$mobile' ");
               $ob->db_write("delete from bioengineer where registration_id='$registration_id' ");
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
                $ob->db_write($insertbi);
                header("location:profile.php");
				}
				?>
</body>
</html>