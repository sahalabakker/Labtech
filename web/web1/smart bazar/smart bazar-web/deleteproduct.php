<?php
session_start();
require("db.class.php");
$ob=new db_operations();
$email=$_SESSION['email'];
$id2=$_SESSION['id'];
echo $email;
echo $id2;
$del="delete from product where product_id='$id2'";
$ob->db_write($del);
header("location:seller products.php");

?>