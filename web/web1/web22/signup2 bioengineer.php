<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>signup</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<?php
	require("db.class.php");
	$ob=new db_operations();
	$_SESSION['name']= $_POST['name'];
	$_SESSION['email']= $_POST['email'];
	$_SESSION['pass']= $_POST['password'];
	$_SESSION['mobile']= $_POST['mobile'];
	/*$insertl="insert into login(laboratory_name,password,email) values('$laboratoryname','$pass','$email')";
	/*$insertr="insert into sign_up 
	(laboratory_name) values ('$laboratoryname')";*/
	/*$ob->db_write($insertl);
	/*$ob->db_write($insertr);*/
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$sel1="select * from login where email='$email'";
    $sel2="select * from sign_up where phone_number='$mobile'";
	$res1=$ob->db_read($sel1);
	$res2=$ob->db_read($sel2);
	if(mysqli_num_rows($res1))
		{
			?>
			<script>
				alert("User already exist");
				window.location='sign up1 form bioengineer.php'
			</script>;
			<?php
		}
		if($mobile==0000000000)
		{
			?>
			<script>
				alert("Invalid phone number");
				window.location='sign up1 form bioengineer.php'
			</script>;
			<?php
		}
		if(mysqli_num_rows($res2))
			
		{?>
			<script>
				alert("Phone number already exists");
				window.location='sign up1 form bioengineer.php'
			</script>;
			<?php
		}
	?>


	<!-- title -->
	<h1>
		<!--<span>V</span>alidator-->
		<span>L</span>ab
		<span>T</span>ech
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form name="frm" validate="true" action="userprofile bioengineer1.php" method="post">
			<h2></h2>
			<div class="form-group">
				<label for="exampleInputText">Proffession</label>
				<input type="text" class="form-control" name="proffession" id="exampleInputText" autocomplete="off" placeholder="Proffession" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' pattern="^[^\s]" required="required">
			</div>
			<div class="form-group">
				<label for="exampleInputText">Experience</label>
				<input type="text" class="form-control" name="experience" id="exampleInputText" autocomplete="off" placeholder="Experience" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32)) || (event.charCode >= 49 && event.charCode <=57)' required pattern="^[^\s]">
			</div>
			<div class="form-group">
				<label for="exampleInputText">Gender</label>
				<input list="exampleInputTextse" type="text" class="form-control"name="gender" id="exampleInputText" autocomplete="off" placeholder="Gender" required>
				<datalist id="exampleInputTextse">
                     <option value="Male">
                     <option value="Female">
                     <option value="Others">
                   
               </datalist>
			</div>
			<!--<div class="form-group">
			<label for="exampleInputText">Date Of Birth</label><br>
			<input placeholder="Date of birth" name="dob" class="form-control" type="date" id="exampleInputText" onfocus="(this.type='date')" required>
		</div>-->
			<!--<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="mobile" id="exampleMobile1" autocomplete="off" placeholder="Mobile number" required>
			</div>-->
			<h2>Location details</h2>
			<div class="form-group">
				<label for="exampleInputText">Street Name</label>
				<input type="text" class="form-control" name="street" id="exampleInputText" autocomplete="off" placeholder="Street name" onkeypress='return((event.charCode >= 65 && event.charCode <=90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32)|| (event.charCode >= 48 && event.charCode <=57))' required pattern="^[^\s]">
			</div>
			<div class="form-group">
				<label for="exampleInputText">City Name</label>
				<input type="text" class="form-control" name="city" id="exampleInputText" autocomplete="off" placeholder="City name" onkeypress='return((event.charCode >= 65 && event.charCode <=90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))'  required pattern="^[^\s]">
			</div>
			<!--<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>-->
			<div class="form-group">
				<label for="exampleMobile1">Pin Code</label>
				<input type="License" class="form-control" name="pin" id="exampleMobile1" autocomplete="off" placeholder="Pin Code" pattern="^\d{6}$" required="required">
			</div>
			<div class="form-group">
				<label for="exampleInputText">Profile Photo</label>
				<input type="file" class="form-control" name="photo" id="exampleInputText" placeholder="upload photo" required>
			</div>
			<div class="form-group">
				<label for="exampleInputText">Country</label><br>
				<select name="country" type="text" class="select" class="form-control" style="width: 100%; color: #fff; outline: none;
    font-size: 14px; letter-spacing: 1px; padding: 12px 13px; box-sizing: border-box; border: none; border: 1px solid #fff; background: rgba(14, 14, 14, 0.54);" required="">
                     <option value="select" style="color: black;">--Select Country--</option>
                     <?php
                        require('db_config.php');
                        $sql = "SELECT * FROM country"; 
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."' style='color: black;'>".$row['name']."</option>";
                        }
                    ?>
                </select>

				<!--<input list="exampleInputTexts" type="text" class="form-control" name="country" id="exampleInputText" placeholder="--Select Country--" autocomplete="off" required>-->
				<!--<datalist id="exampleInputTexts" class="form-control" name="country" id="exampleInputText">-->
                     <!--<option value="India">
                     <option value="US">
                     <option value="UK">
                     <option value="UAE">
                     <option value="London">
                     <option value="Singapoor">
                     <option value="England">-->
                   
               <!--</datalist>-->
			</div>
			<div class="form-group">
				<label for="exampleInputText">State</label><br>
				<!--<input list="exampleInputTextss" type="text" class="form-control" name="state" id="exampleInputText" placeholder="--Select State--" autocomplete="off" required>-->
				<!--<datalist id="exampleInputTextss" class="form-control" name="state" id="exampleInputText">-->
                   <!--<option value="Kerala">
                     <option value="Thamilnadu">
                     <option value="Karnataka">
                     <option value="Punjab">
                     <option value="New Delhi">
                     <option value="Gujarath">
                     <option value="Rajasthan">-->
                   
               <!--</datalist>-->
               <select name="state" type="text" class="select" class="form-control" style="width: 100%; color: #fff; outline: none;
    font-size: 14px; letter-spacing: 1px; padding: 12px 13px; box-sizing: border-box; border: none; border: 1px solid #fff; background: rgba(14, 14, 14, 0.54);" required="">
                   <option value="Select State" style="color: black;">--Select State--</option>
               </select>
			</div>
			<div class="form-group">
				<label for="exampleInputText">District</label><br>
				<!--<input list="exampleInputTextssa" type="text" class="form-control" name="district" id="exampleInputText" placeholder="--Select District--" autocomplete="off" required>-->
				<!--<div class="form-mid-w3ls">-->
					<!--<label for="exampleInputText">Country</label>
				<input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Country" required>-->
				<!--<label for="exampleInputText">Country</label>
                  <!--<select class="form-control">-->
                  	<!--<label for="exampleInputText">Country</label>-->
                  	<!--<input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Country" required>-->
				<!--<input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Country" required>-->
				<!--<datalist id="exampleInputTextssa" class="form-control" name="district" id="exampleInputText" >-->
                     <!--<option value="Ernakulam">
                     <option value="Vayanadu">
                     <option value="Kollam">
                     <option value="Thrissure">
                     <option value="Alappuzha">
                     <option value="Kannur">
                     <option value="Kottayom">-->
                   <!--</datalist>-->
                   <select name="district" class="select" type="text" class="form-control" style="width: 100%; color: #fff; outline: none;
    font-size: 14px; letter-spacing: 1px; padding: 12px 13px; box-sizing: border-box; border: none; border: 1px solid #fff; background: rgba(14, 14, 14, 0.54);" required="">
                     <option value="--select District--" style="color: black;">--select district--</option>
                 </select>
          </div>
            
           <!--</div>-->
               
			<!--<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="3" type="password" name="name" class="form-control" id="exampleInputPassword1" placeholder="Password"
				    required>
			</div>-->
			<!--<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="name" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>-->
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>
			<div class="form-group">
			<input type="submit" class="button" name="submit" value="sign up">
		</div>
			<!--<input type="text" value="sign up" class="button" class="btn btn-primary" style="width: 100%; text-align: center;" />-->
		</form>
	</div>
	
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<!--<p>&copy; 2018 Validator Signup Form. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</p>-->
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->
	<script>
$( "select[name='country']" ).change(function () {
    var countryID = $(this).val();


    if(countryID) {


        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':countryID},
            success: function(data) {
                $('select[name="state"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="state"]').append('<option value="'+ key +'" style="color: black;">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="state"]').empty();
    }
});
</script>
<script>
$( "select[name='state']" ).change(function () {
    var stateID = $(this).val();


    if(stateID) {


        $.ajax({
            url: "ajaxpro1.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="district"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="district"]').append('<option value="'+ key +'" style="color: black;">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="district"]').empty();
    }
});
</script>


</body>

</html>