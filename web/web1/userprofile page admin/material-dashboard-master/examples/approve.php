<?php
require("../../../db.class.php");
 $ob=new db_operations();
 $email=$_GET['id'];
 $update="update bioengineer set status='1' where email='$email'";
 $ob->db_write($update);
 ?>
 <script>
 alert("approved successfully");
 window.location='verify.php'
 </script>
 