<?php
session_start();
require("db.class.php");
$ob=new db_operations();
$email=$_SESSION['email'];
echo $email;
$sel="select * from sign_up where email='$email'";
$res=$ob->db_read($sel);
$arr=mysqli_fetch_array($res);
$usertype=$arr['user_type'];
if($usertype=='laboratory')
{
$del="delete from login where email='$email'";
$ob->db_write($del);
$del1="delete from sign_up where email='$email'";
$ob->db_write($del1);
$del2="delete from laboratory where email='$email'";
$ob->db_write($del2);	
}
if($usertype=='bioengineer')
{
$del="delete from login where email='$email'";
$ob->db_write($del);
$del1="delete from sign_up where email='$email'";
$ob->db_write($del1);
$del2="delete from bioengineer where email='$email'";
$ob->db_write($del2);
}
if($usertype=='seller')
{
$del="delete from login where email='$email'";
$ob->db_write($del);
$del1="delete from sign_up where email='$email'";
$ob->db_write($del1);
}
session_destroy();
header("location:../../../../web/index.html");

?>