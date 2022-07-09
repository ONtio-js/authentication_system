<?php

$database = "localhost";
$db_username = "root";
$db_name = "authentication_sys";
$db_password = "";

$conn = mysqli_connect($database,$db_username,$db_password,$db_name);
if(!$conn){
  ?>
  <script>
    alert("database connection failure");
  </script>
  <?php
}
?>