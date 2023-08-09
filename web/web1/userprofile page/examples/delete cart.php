<?php
require("db.class.php");
 $ob=new db_operations();
 $email=$_GET['id'];
 $update="delete from cart where product_id='$email'";
 $ob->db_write($update);
 ?>
 <script>
 alert("delete item from your cart");
 window.location='cart1.php'
 </script>