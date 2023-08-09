<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Lab Tech 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<style>
                      .avatar{
                        vertical-align: middle;
                        width: 300px;
                        height: 300px;
                        border-radius: 500%;
                      }
                    </style>
</head>

<body class="">
  <?php
  require("db.class.php");
  $ob=new db_operations();
  $email=$_SESSION['email'];
  /*if(isset($_POST['submit']))
  {
    $password=$_POST['password'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $proffession=$_POST['proffession'];
    $experience=$_POST['experience'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $pin=$_POST['pin'];
    $photo=$_POST['photo'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];

    $sel4="select * from laboratory where license_number='$licensenumber' except select * from laboratory where email='$email'";
    $res4=$ob->db_read($sel4);
    if(mysqli_num_rows($res4))
    {
      ?>
      <script>
        alert("laboratory already exists");
        window.location='user.php'
      </script>
      <?php
    }

    $sel2="select * from sign_up where phone_number='$mobile' except select * from sign_up where email='$email'";
    $res2=$ob->db_read($sel2);
    if(mysqli_num_rows($res2))
    {
      ?>
      <script>
        alert("phone number already exists");
        window.location='user bioengineer.php'
      </script>
      <?php
    }
    else
    {
      $update1="update sign_up SET phone_number='$mobile',city_name='$city',street_name='$street',pin_code='$pin',district='$district',state='$state',country='$country',name='$name',gender='$gender' where email='$email'";
      $update2="update login SET password='$password' where email='$email'";
      $update3="update bioengineer SET profession='$proffession',experience='$experience' where email='$email'";
      $ob->db_write($update1);
      $ob->db_write($update2);
      $ob->db_write($update3);
    }

  }

  $sel="select * from sign_up where email='$email'";
  $sel1="select * from login where email='$email'";
  $sel3="select * from bioengineer where email='$email'";
  $sel4="select * from photos where email='$email'";
  $res=$ob->db_read($sel);
  $arr=mysqli_fetch_array($res);
  $res1=$ob->db_read($sel1);
  $arr1=mysqli_fetch_array($res1);
  $res3=$ob->db_read($sel3);
  $arr3=mysqli_fetch_array($res3);
  $res4=$ob->db_read($sel4);
  $arr4=mysqli_fetch_array($res4);

  $proffession=$arr3['profession'];
  $experience=$arr3['experience'];
  $mobile=$arr['phone_number'];
  $street=$arr['street_name'];
  $city=$arr['city_name'];
  $gender=$arr['gender'];
  $name=$arr['name'];
  $district=$arr['district'];
  $state=$arr['state'];
  $country=$arr['country'];
  $photo=$arr4['photo'];
  $pin=$arr['pin_code'];
  $password=$arr1['password'];*/
  ?>
  
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="../../userprofile page/examples/dashboard.html">
              <i class="material-icons"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <!--<li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>-->
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/tables.php">
              <i class="material-icons fa fa-history"></i>
              <p>Service history</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/smart bazar/smart bazar-web/products.php">
              <i class="material-icons">library_books</i>
              <p>Biomedical Engineer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/smart bazar/smart bazar-web/seller products.php">
              <i class="material-icons fa fa-shopping-cart"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/orders.php">
              <i class="material-icons fa fa-list-alt"></i>
              <p>My Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../userprofile page/examples/cart1.php">
              <i class="material-icons fa fa-cart-arrow-down"></i>
              <p>My Cart</p>
            </a>
          </li>
          <!--<li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>-->
          
          <li class="nav-item active ">
            <a class="nav-link" href="../../userprofile page bioengineer/examples/notifications2 lab.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!--<li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p></p>
            </a>
          </li>-->
          <!--<li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <!--<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>-->
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!--<div class="row">
            <div class="col-md-8">
              <div class="card">
                <!--<div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>-->
                <!--<div class="card-body">
                  <form action="" method="POST">
                    <div class="row">-->
                      <!--<div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>-->
                      
                      <!--<div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" class="form-control" name="name"  onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $name ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="password" maxlength="10" minlength="3"  value="<?php echo $password ?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Proffession</label>
                          <input type="text" class="form-control" name="proffession" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $proffession?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mobile" pattern="^\d{10}$" value="<?php echo $mobile?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Experience</label>
                          <input type="text" class="form-control" name="experience" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $experience?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="city" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $city?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Street</label>
                          <input type="text" class="form-control" name="street" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $street?>"disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" class="form-control" name="gender" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $gender?>"disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control" name="country" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $country?>"disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" class="form-control" name="state" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $state?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">District</label>
                          <input type="text" class="form-control" name="district" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $district?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pin Code</label>
                          <input type="text" class="form-control" name="pin" pattern="^\d{6}$" value="<?php echo $pin?>" disabled>
                        </div>
                      </div>
                    </div>-->
                    <!--<div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <!--<a href="user1bio.php">
                    <input type="button" name="submitt" value="Update Profile" class="btn btn-primary pull-right">
                    </a>
                     <a data-target="#myModal" data-toggle="modal" id="MainNavHelp" href="">
                       <input type="button" name="delete" value="Delete" class="btn btn-primary pull-right"></a>
                   <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Do you want to delete?</h4>
              <button type="button" class="close" data-dismiss="modal">&times</button>
               </div><div class="modal-footer">
              <!--<button type="button" class="btn-btn-default" data-dismiss="modal">Close</button>-->
              <!--<a href="delete.php">
                <input type="button"  name="delete" value="OK" class="btn btn-danger btn-fill"></a><br><br>
                <a href="user.php">
                  <input type="button" name="cancel" value="cancel" class="btn btn-info btn-fill"></a>

            </div>
            </div>
          </div>
        </div>-->
                    <!--<input type="submit" name="submit" value="Update Profile" class="btn btn-primary pull-right">-->
                    <!--<div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>-->
            <?php
            $bio_email=$_SESSION['email'];
            $email2=$_GET['email1'];
            $sel="select * from complaint where complaint_id='$email2'";
            //$sel1="select * from photos where email='$email2'";
            $res=$ob->db_read($sel);
            //$res1=$ob->db_read($sel1);
            $row=mysqli_fetch_array($res);
            $id=$row['complaint_id'];
            $email1=$row['lab_email'];
            $sel1="select * from photos where email='$email1'";
            $res1=$ob->db_read($sel1);
            $row1=mysqli_fetch_array($res1);
            /*if(isset($_POST['accept']))
            {
              $amount=$_POST['amount'];
            $insert="update complaint set amount=$amount where complaint_id='$email2'";
            $update="update complaint SET status=1 where complaint_id='$email2'";
            $ob->db_write($update);
            $ob->db_write($insert);
          }*/
           
            
            ?>

            <div class="col-md-10">
              <div class="card card-profile" >
                <div class="card-avatar" style="width: 300px;height: 300px;">
                  <a href="javascript:;">
                    
                    <img class="avatar"  src=<?php echo $row1['photo'];?> />
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-category text-gray" style="text-align: left;"> <b>ABOUT COMPLAINT</b></h5>
                  
                
                  <form action="../../userprofile page/examples/smart bazar/smart bazar-web/address1.php?id1=<?php echo $row['complaint_id'];?>" method="POST">
                    <!--<div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">complaint</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                    </div>-->
                      <div class="row">
                      <!--<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">complaint</label>
                          <input type="text" class="form-control" name="name"  onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' value="<?php echo $row['complaint_id'] ?>" disabled>
                        </div>
                      </div>-->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Complained equipment</label>
                          <input type="text" class="form-control" name="password" maxlength="10" minlength="3"  value="<?php echo $row['equip'] ?>" disabled>
                        </div>
                      </div>
                    </div> 
                    <div class="row"> 
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">You Booked date on</label>
                          <input type="text" class="form-control" name="password" maxlength="10" minlength="3"  value="<?php echo $row['book_date'] ?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="" style="text-align: left;">Amount for this service</label>
                          <input type="text" class="form-control" name="amount" value="<?php echo $row['amount'] ?>" disabled >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="complaint" name="complaint" class="bmd-label-floating" placeholder="complaint" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32) || (event.charCode >=48 && event.charCode <= 57))' pattern="^[^\s]">
          <textarea id="textarea" class=" form-control" name="complaint" rows="4" cols="70" required=""> about complaint <?php echo $row['complaint'] ?>
          </textarea>
        </label>
                          <!--<label class="bmd-label-floating">Full Name</label>
                          <input type="textarea" class="form-control" name="complaint" onkeypress='return((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode==32))' disabled > -->
                        </div>
                      </div>
                    </div>
                    
                  <!--</form>-->
                  <!--<h6 class="card-category text-gray"> BIOMEDICAL ENGINEER</h6>
                  <h4 class="card-title"><?php echo $name ?></h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>-->
                  <br><br><br><br> 
                  <input type="submit" class="btn btn-primary btn-round" name="accept" value="continue">
                  <!--<input type="submit" class="btn btn-primary btn-round" name="reject" value="back">-->
                  <!--<a href="">
                  <h6 class="card-category text-gray" style="text-align: left;"> <b>More about laboratory</b></h6>
                </a>-->
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            <!--&copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.-->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>