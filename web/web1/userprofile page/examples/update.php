<?php
  require_once("../../../db.class.php");
  $ob=new db_operations();
  $email=$_SESSION['email'];
  if(isset($_POST['submit']))
  {
    $laboratoryname=$_POST['laboratoryname'];
    $mobile=$_POST['mobile'];
    $licensenumber=$_POST['license'];
    $accreditation=$_POST['accreditation'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];

    $sel2="select * from sign_up where phone_number='$mobile' except select * from sign_up where email='$email'";
    $res2=$ob->db_read(sel2);
    if(mysqli_num_rows($res2))
    {
      ?>
      <script>
        alert("phone number already exists");
        window.location='userprofile page/examples/user.php'
      </script>
      <?php
    }
    else
    {
      $update1="update sign_up SET laboratory_name='$laboratoryname',phone_number='$mobile',accreditation='$accreditation',license_number='$license',city_name='$city',street_name='$street',pin_code='$pin',district='$district',state='$state',country='$country'";
      $update2="update login SET email='$email'";
      $ob->db_write($update1);
      $ob->db_write($update2);
    }

  }