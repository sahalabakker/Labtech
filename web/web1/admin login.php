<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
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
    <link href="css1/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css1/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function myFunction() {
            var email= document.getElementById("email").value;
            var emailpattern= new RegExp("[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{3,3}$");
            var res= emailpattern.test(email);
            if(email.length==0)
            {
                alert("please enter your email");
            }
            else if(res==true)
            {

            }
            else
            {
                alert("Incorrect mail format");
            }

        }
    </script>

</head>


<body>
    <?php
require("db.class.php");
$ob=new db_operations();
$message=" ";
if(isset($_POST['submit']))
{
$_SESSION['email']= $_POST['email'];  
$laboratoryname=$_POST['email'];
$password=$_POST['password'];
$selectl="select * from login where email='$laboratoryname'";
$selects="select * from sign_up where email='$laboratoryname'";
$result=$ob->db_read($selectl);
$resultss=$ob->db_read($selects);
$arr=mysqli_fetch_array($result);
$arr1=mysqli_fetch_array($resultss);
if(mysqli_num_rows($result)<=0)
{
$message="user not found";    
}
 else if($password==$arr['2'])
{
$_SESSION['laboratoryname']=$arr['1'];
if(mysqli_num_rows($resultss))
{
    $usertype=$arr1['11'];
    /*if($usertype=='laboratory')
    {
 header("Location:userprofile page/examples/dashboard.html");
} 
if($usertype=='bioengineer') {
    header("Location:userprofile page bioengineer/examples/dashboard.html");
} 
if($usertype=='seller') {
    header("Location:userprofile page seller/examples/dashboard.html");
}*/
if($usertype=='admin') {
    header("Location:userprofile page admin/material-dashboard-master/examples/laboratory.php");
}
}
 }
 else
 {
   $message="invalid username or password"; 
 }
}
if(isset($_POST['send']))
{
    require("Textlocal.class.php");
    $email=$_POST['email'];
    $selectp="select phone_number from sign_up where email='$email'";
    $resultp=$ob->db_read($selectp);
    $arr=mysqli_fetch_array($resultp);
    if(mysqli_num_rows($resultp)<=0)
    {
        $message="user not found";
    }
    else
    {
        $phone=$arr[0];
        $selectpass="select password from login where email='$email'";
        $resultpass=$ob->db_read($selectpass);
        $arrp=mysqli_fetch_array($resultpass);
        $pass=$arrp[0];
        $Textlocal=new Textlocal(false,false,'XYc85wMOIMc-IC7vpjshIUbNj0Pk03By32mIHpnWL5');
    }

    $numbers=array($phone);
    $sender='TXTLCL';
    $message1='This is your password: ' .$pass;

    $response=$Textlocal->sendSms($numbers,$message1,$sender);
}
?>

    <h1 style="font-family: italic; font-weight: 15%; font-size: 50px; color: white"><span style="color: #fc3955">L</span>ab <span style="color: #fc3955">T</span>ech</h1>
    <div class=" w3l-login-form">
        <h3 style="color: #fc3955; text-align: center">Login Here</h3>
        <form action="" method="POST">

            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="email" class="form-control" placeholder="example@gmail.com" name="email" autocomplete="off" aria-describedly="emailHelp" required="required"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Password" name="password" required="required" />
                </div>
            </div>
            <h3><center><font color="white"><?php
           echo $message
            ?></font></center></h3>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="Login" class="button" name="submit">
        </form>
            <div class="forgot">
                <!--<a href="#">Forgot Password?</a>-->
                <a data-toggle="modal" data-target="#myModal"><font color="white" style="text-align: center;">Forgot password?</font></a>
                <!--<p><input type="checkbox">Remember Me</p>-->
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!--modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Forgot password</h4>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <p>
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control" required="required" onblur="return(myFunction())" >
                                    <br>
                                    <input type="submit" name="send" value="send">
                                </p>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            
        <!--<p class=" w3l-register-p">Don't have an account?<a href="web22/sign up1 form.php" class="register"> Sign up</a></p>-->
    </div>
    <footer>
        <!--<p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>-->
    </footer>

</body>

</html>