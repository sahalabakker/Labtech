<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	    <link href="validator sign up form demo/Signup2.html" />
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<h1>
		<!--<span>V</span>alidator-->
		<span>L</span>ab
		<span>T</span>ech

	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form name="frm" validate="true" action="signup2 bioengineer.php" method="post">
			<h2>Sign up here</h2>
			<div class="form-group">
				<label for="exampleInputText">Name</label>
				<input type="text" class="form-control" name="name" id="exampleInputText" autocomplete="off" placeholder="Enter Full Name" required="required" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' pattern="^[^\s]">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" autocomplete="off" placeholder="Enter email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" />
			</div>
			<!--<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="name" id="exampleMobile1" placeholder="Mobile number" required>
			</div>-->
			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="mobile" id="exampleMobile1" autocomplete="off" placeholder="Mobile number" required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="3" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
				    required>
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="password1" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>
			<!--<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>--><!--<a href="signup2.html"> 
				<input type="text" value="Next" class="button" class="btn btn-primary" style="text-align: center; width: 100%;" />
			</a>--><div class="form-group">
			<input type="submit" class="button" name="next" value="Next">
		</div>
			<!--<button type="submit" class="btn btn-primary"> Next </button>
		</a>-->
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

</body>

</html>