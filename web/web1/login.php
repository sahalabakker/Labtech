<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <!--<title>Material Login Form a Responsive Widget Template :: w3layouts</title>-->
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <?php
require("db.class.php");
$ob=new db_operations();
$message=" ";
if(isset($_POST['submit']))
{
$laboratoryname=$_POST['email'];
$password=$_POST['password'];
$selectl="select * from login where email='$laboratoryname'";
$result=$ob->db_read($selectl);
$arr=mysqli_fetch_array($result);
if(mysqli_num_rows($result)<=0)
{
$message="user not found";    
}
 else if($password==$arr['2'])
{
$_SESSION['username']=$arr['1'];
 header("Location:profile.php");
 }
 else
 {
   $message="invalid username or password"; 
 }
}
?>

    <h1 style="font-family: italic; font-weight: 15%"><span style="color: #fc3955">L</span>ab <span style="color: #fc3955">T</span>ech</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Laboratory name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="email" class="form-control" name="email" placeholder="Laboratory name" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            <h2><center><font color="white"><?php
           echo $message
            ?></font></center></h2>
            <br>
            <br>
            <br>
            <br>
            <!--<input type="submit" class="button" name="submit" value="Login">-->
            <!--<button type="submit">Login</button>-->
            <input type="submit" value="Login" class="button">
        </form>
        <p class=" w3l-register-p">Don't have an account?<a href="web22/sign up1 form.html" class="register"> Sign up</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </footer>

</body>

</html>