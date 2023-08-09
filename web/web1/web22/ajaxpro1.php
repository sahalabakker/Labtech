<?php


   require('db_config.php');


   $sql = "SELECT * FROM district
         WHERE state_id LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['id']] = $row['district'];
   }


   echo json_encode($json);
?>