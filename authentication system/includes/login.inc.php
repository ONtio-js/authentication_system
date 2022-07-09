<?php
session_start();
require_once 'connect.inc.php';
require_once 'functions.php';


$username = filter_var(trim($_POST['username']));
$password = filter_var(trim($_POST['password']));

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(!empty($username && $password))
  {
    $sql = "SELECT * FROM meta_data WHERE username = '$username'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if ($count == 1)
    {
      $row = mysqli_fetch_assoc($res);
      if(password_verify($password,$row['password']))
      {
         $_SESSION['user'] = $row['fullname'];
         $_SESSION['id'] = $row['username'];
         $_SESSION['mail'] = $row['mail'];
         header("location:../index.php");
      }
      else
      {
        ?>
        <script>
          alert('incorrect password,please retype your password');
          window.location.href = '../login25.php';
        </script>
        <?php
      }
    }
    else{
      ?>
      <script>
        alert('no user found');
        window.location.href = '../login25.php';
      </script>
      <?php

    }
  }
  else
  {
    ?>
    <script>
      alert('please input your login details');
      window.location.href = '../login25.php';
    </script>
    <?php
  }
}
else
{
  ?>
  <script>
    alert('we don\'t recognise your action');
    window.location.href = '../register25.php'
  </script>
  <?php
}