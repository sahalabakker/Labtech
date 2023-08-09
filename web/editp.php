<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:43:04 GMT -->
<head>
<title>FINE WEAVES</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="Phoenixcoded">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../bower_components/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css" />

<link rel="stylesheet" type="text/css" href="../bower_components/datedropper/datedropper.min.css" />

<link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
  require_once("db.class.php");
  $ob=new db_operations();
  $email=$_SESSION['userid'];
  $id=$_GET['id1'];
  if(isset($_POST['sub']))
  {
    $name1=$_POST['name'];
    $code1=$_POST['code'];
    $image1=$_POST['image'];
    $price1=$_POST['price'];
    $rate1=$_POST['rate'];
    $stock1=$_POST['stock'];
    $discount1=$_POST['discount'];
    $description1=$_POST['description'];
  
   $update1="update tblproduct SET name='$name1',image='$image1',price='$price1',rate='$rate1',stock='$stock1',discount='$discount1',description='$description1' where id='$id'";


   $ob->db_write($update1);
}
   $sql="SELECT * from tblproduct where id='$id'";
   $re=$ob->db_read($sql);
   $arr2=mysqli_fetch_array($re);
$name=$arr2['name'];
  $code=$arr2['code'];
  $image=$arr2['image'];
  $price=$arr2['price'];
  $rate=$arr2['Rate'];
  $stock=$arr2['stock'];
  $discount=$arr2['discount'];
$description=$arr2['description'];

 


 
  $sel="select * from register where userid='$email'";
 
  $res=$ob->db_read($sel);
  $arr=mysqli_fetch_array($res);


  $fname=$arr['fname'];
  $lname=$arr['lname'];
  $password=$arr['password'];
  $phone=$arr['phone'];
  $address=$arr['address'];
  $place=$arr['place'];
  $city=$arr['city'];
  $state=$arr['state'];
  $country=$arr['country'];
  $zip=$arr['zip'];
  $utypee=$arr['utype'];
  $photo=$arr['photo'];

if($utypee=='2'){
   $sel4="select * from weaver where userid='$email'";
   $res4=$ob->db_read($sel4);
   $arr4=mysqli_fetch_array($res4);
   $aadhar=$arr4['aadhar'];
   $shop=$arr4['shop_name'];
   $gender=$arr4['gender'];
}
if($utypee=='3'){
    $sel5="select * from shop where userid='$email'";
   $res5=$ob->db_read($sel5);
   $arr5=mysqli_fetch_array($res5);
   $s_name=$arr5['s_name'];
   $license=$arr5['license'];
 }
 if($utypee=='4'){
    $sel5="select * from worker where userid='$email'";
   $res5=$ob->db_read($sel5);
   $arr5=mysqli_fetch_array($res5);
   $aadhar=$arr5['aadhar'];
   $dob=$arr5['dob'];
   $gender=$arr5['gender'];
   $exp=$arr5['exp'];
   $period=$arr5['period'];
 }
 if($utypee=='5'){
    $sel5="select * from courier where userid='$email'";
   $res5=$ob->db_read($sel5);
   $arr5=mysqli_fetch_array($res5);
   $name=$arr5['name'];
   $license=$arr5['license'];
   $proof=$arr5['proof'];
   $speed=$arr5['speed'];
   $size=$arr5['size'];
 }
  ?>
<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="#">
<h2>FINE WEAVES</h2>
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
<li>
<a class="main-search morphsearch-search" href="#">

<i class="ti-search"></i>
</a>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>
<li class="mega-menu-top">
<a href="#">
Mega
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification row88989+89">
<li class="col-sm-3">
<h6 class="mega-menu-title">Popular Links</h6>
<ul class="mega-menu-links">
<li><a href="form-elements-component.html">Form Elements</a></li>
<li><a href="map-google.html">Maps</a></li>
<li><a href="user-card.html">Contact Cards</a></li>
<li><a href="user-profile.html">User Information</a></li>
<li><a href="auth-lock-screen.html">Lock Screen</a></li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Mailbox</h6>
<ul class="mega-mailbox">
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-folder"></i>
</div>
<div class="media-body">
<h5>Data Backup</h5>
<small class="text-muted">Store your data</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-headphone-alt"></i>
</div>
<div class="media-body">
<h5>Support</h5>
<small class="text-muted">24-hour support</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-dropbox"></i>
</div>
<div class="media-body">
<h5>Drop-box</h5>
<small class="text-muted">Store large amount of data in one-box only
</small>
</div>
</a>
</li>
<li>
<a href="#" class="media">
<div class="media-left">
<i class="ti-location-pin"></i>
</div>
<div class="media-body">
<h5>Location</h5>
<small class="text-muted">Find Your Location with ease of use</small>
</div>
</a>
</li>
</ul>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Gallery</h6>
<div class="row m-b-20">
</div>
<button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
</li>
<li class="col-sm-3">
<h6 class="mega-menu-title">Contact Us</h6>
<div class="mega-menu-contact">
<div class="form-group row">
<label for="example-text-input" class="col-3 col-form-label">Name</label>
<div class="col-9">
<input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Email</label>
<div class="col-9">
<input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="example-search-input" class="col-3 col-form-label">Contact</label>
<div class="col-9">
<input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
</div>
</div>
<div class="form-group row">
<label for="exampleTextarea" class="col-3 col-form-label">Message</label>
<div class="col-9">
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>
</div>
</div>
</li>
</ul>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification lng-dropdown">
<a href="#" id="dropdown-active-item">
<i class="flag-icon flag-icon-in m-r-5"></i> English
</a>
<ul class="show-notification">
<li>
<a href="#" data-lng="en">
<i class="flag-icon flag-icon-in m-r-5"></i> English
</a>
</li>
<li>
<a href="#" data-lng="es">
<i class="flag-icon flag-icon-es m-r-5"></i> Spanish
</a>
</li>
<li>
<a href="#" data-lng="pt">
<i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
</a>
</li>
<li>
<a href="#" data-lng="fr">
<i class="flag-icon flag-icon-fr m-r-5"></i> French
</a>
</li>
</ul>
</li>
<li class="header-notification">
<a href="#!">
<i class="ti-bell"></i>
<span class="badge">5</span>
</a>
<ul class="show-notification">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</li>
<li class="header-notification">
<a href="#!" class="displayChatbox">
<i class="ti-comments"></i>
<span class="badge">9</span>
</a>
</li>
<li class="user-profile header-notification">
<a href="#!">
<img style="border-radius: 50%;" src="<?php echo $photo ?>">
<span style="text-decoration: Capitilize;"><?php echo $fname ?>&nbsp;<?php echo $lname?></span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
<li>
<a href="#!">
<i class="ti-settings"></i> Settings
</a>
</li>
<li>
<a href="user-profile.php">
<i class="ti-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="ti-email"></i> My Messages
</a>
</li>

<li>
<a href="logout.php" onclick="return confirm('Are You sure you want to logout?');">
<i class="ti-layout-sidebar-left"></i> Logout
</a>
</li>
</ul>
<li></li> <li class="user-profile header-notification"
 style="text-align: right;" class="close" aria-label="Close">
  <span aria-hidden="true" onclick="back()" style="color: white;size: 10px 10px;">Back<a href="logout.php"></span>
</li>
</ul>
<div id="morphsearch" class="morphsearch">
<form class="morphsearch-form">
<input class="morphsearch-input" type="search" placeholder="Search..." />
<button class="morphsearch-submit" type="submit">Search</button>
</form>
<div class="morphsearch-content">
<div class="dummy-column">
<h2>People</h2>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
<h3>Sara Soueidan</h3>
</a>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
<h3>Shaun Dona</h3>
</a>
</div>
<div class="dummy-column">
<h2>Popular</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
<h3>Page Preloading Effect</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
<h3>Draggable Dual-View Slideshow</h3>
</a>
</div>
<div class="dummy-column">
<h2>Recent</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
<h3>Tooltip Styles Inspiration</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="NotificationStyles" />
<h3>Notification Styles Inspiration</h3>
</a>
</div>
</div>

<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
</div>

</div>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">

</div>
</div>
</div>
</div>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar" pcoded-header-position="relative">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="">
<div class="main-menu-header">

<div class="user-details"><a href="../../web/first.php">
<span>Home</span></a>
</div>
</div>
<div class="main-menu-content">
<ul>
<li class="more-details">
<a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
<a href="#!"><i class="ti-settings"></i>Settings</a>
<a href="logout.php"><i class="ti-layout-sidebar-left" onclick="logout()"></i>Logout</a>
</li>
</ul>
</div>
</div>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
<li class=" ">
<a href="dashboard-project.php">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.dash.project">Dashboard</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<?php

if($utypee=='1')
{
 echo("<li class= >");
echo("<a href=user-profile.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>My Profile</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=edit.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Change Profile</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

echo("<li class= >");
echo("<a href=changePassword.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Change Password</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");


 echo("<li class= >");
echo("<a href=cart.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>My Cart</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=order.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>My Orders</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

}
if($utypee=='2')
{
 echo("<li class= >");
echo("<a href=user-profile.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>My Profile</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=edit.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Change Profile</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

echo("<li class= >");
echo("<a href=changePassword.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Change Password</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");


 echo("<li class= >");
echo("<a href=product.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Add Product</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=view.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Edit Product</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=view.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Delete Product</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=vacancy.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>Add Vacancy</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=vacancy_view.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>View Vacancy</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");

 echo("<li class= >");
echo("<a href=view.php data-i18n=nav.ready-to-use.contact-form>");
echo("<span class=pcoded-micon><i class=ti-angle-right></i></span>");
echo("<span class=pcoded-mtext>View Products</span>");
echo("<span class=pcoded-mcaret></span>");
echo("</a>");
echo("</li>");
}
?>






</ul>
</li>
</ul>
</div>
</nav>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body user-profile">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>User Profile</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">User Profile</a>
</li>
<li class="breadcrumb-item"><a href="#!">User Profile</a>
</li>
</ul>
</div>
</div>

<div class="page-body">





</div>

<div class="row">
<div class="col-lg-12">

<div class="tab-header">
<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Products Info</a></li>

</ul>
</div>


<div class="tab-content">

<div class="tab-pane active" id="personal" role="tabpanel">

<div class="card">
</div>
 <div class="card-body">
                <form action="#" method="POST">
                <h6 class="heading-small text-muted mb-4"></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" class="form-control" name="email"  value="<?php echo $email ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Product Name</label>
                        <input type="text" id="input-first-name" class="form-control" name="name" onkeypress="return(event.charCode>64 && event.charCode<91) ||(event.charCode >96 && event.charCode<123) ||(event.charCode== 32)" value="<?php echo $name ?>"required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone">Product category</label>
                        <input type="text" id="input-phone"  value="<?php echo $code?>"class="form-control" required=""  name="code" >
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone">Product image</label>
                        <input type="text"  class="form-control" name="image" value="<?php echo $image?>" required="">
                      </div>
                    </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Product Price</label>
                        <input type="number" id="input-last-name" class="form-control"   name="price" value="<?php echo $price ?>"  required>
                      </div>
                    </div>
                 
                  </div>
                  <div class="row">
                     <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Rate</label>
                        <input type="text" id="input-last-name" class="form-control"   name="rate" value="<?php echo $rate ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Number 
                        Of Stocks</label>
                        <input type="number" id="input-last-name" class="form-control"   name="stock" value="<?php echo $stock ?>" required>
                      </div>
                    </div>
                   
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Discount</label>
                        <input type="text" id="input-last-name" class="form-control"   name="discount" value="<?php echo $discount ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
               <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Description</label>
                        <textarea rows="6" cols="50" required="" name="description"><?php echo $description?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
<br><br>
<br><br>&nbsp;&nbsp;
                <input  type="submit" name="sub" align="center" class="btn btn-primary pull-left" value="Submit"/>
                    <div class="clearfix"></div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>


<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/classie.js"></script>

<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.js"></script>

<script type="text/javascript" src="assets/pages/todo/todo.js"></script>

<script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>

<script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/pages/dashboard/project-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/dashboard-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:58 GMT -->
</html>
