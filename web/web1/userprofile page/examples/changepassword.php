<html>
<head>
<script>
window.onload = function() {
	document.getElementById("pass1").onchange = validatePassword;
	document.getElementById("pass2").onchange = validatePassword;
}
function validatePassword() {
	var pass2 = document.getElementById("pass2").value;
	var pass1 = document.getElementById("pass1").value;
	if(pass1 != pass2)
		document.getElementById("pass2").setCustomValidity("password dont match");
	else
		document.getElementById("pass2").setCustomValidity('');
}
</script>
</head>
<body>
	<?php
	require("db.class.php");
$ob=new db_operations();
$email=$_SESSION['email'];
if(isset($_POST['change']))
{
	$password1=$_POST['pass2'];
	$update="update login SET password='$password1' where email='$email'";
	$res1=$ob->db_write($update);
	?>
	<script>
		alert("password updated");
		window.location='user1.php'
	</script>
	<?php
}
?>
<div class="card-body">
                  <form action="" method="POST">
                    <div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">New Password</label>
                          <input type="password" class="form-control" name="pass1" id="pass1" minlength="3" placeholder="new password">
                        </div>
                      </div>
                  </div><div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Confirm Password</label>
                          <input type="password" class="form-control" name="pass2" id="pass2" minlength="3" placeholder="confirm password">
                        </div>
                      </div>
                  </div>
                  <input type="submit" name="change" value="Change Password" class="btn btn-primary pull-right">
              </form>
          </div>
      </body>
      </html>
