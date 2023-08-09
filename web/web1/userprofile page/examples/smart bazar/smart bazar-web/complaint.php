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
	$lab_email=$_SESSION['email'];
	$bio_email=$_SESSION['bio_email'];
	$date=$_POST['date'];
	$complaint=htmlspecialchars($_POST['complaint']);
	$eq=$_POST['equipment'];
	$insert="insert into complaint(book_date,equip,complaint,lab_email,bioengineer_email) values ('$date','$eq','$complaint','$lab_email','$bio_email')";
	$ob->db_write($insert);
	?>
</body>
</html>