<?php
require_once 'connect.inc.php';
require_once 'functions.php';

$fullname = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$sumtn = $_POST['register'];


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(!empty($fullname && $email && $password))
  {
    $sql = "SELECT * FROM meta_data WHERE mail = '$email'";
    $res = mysqli_query($conn,$sql) or die(mysqli_connect_error());
    $count =mysqli_num_rows($res);


    if ($count > 0)
    {
     ?>
     <script>
      alert('user is already registered');
      window.location.href = '../forget25.php';
     </script> 
     <?php
    }
    else
    {
      $username = uniqid("ONtio");
    $sql = "INSERT INTO meta_data (fullname,mail,password,username) VALUES ('$fullname','$email','$password','$username')";
    $res = mysqli_query($conn,$sql);

    if (!$res)
    {
      ?>
      <script>
        alert(message);
        window.location.href = '../register25.php';
      </script>
      <?php
    }
    else{
      //mail to provided email;
      //mail();
      ?>
      <script>
        alert('user registered successfully,confirm your email for your username');
        window.location.href = '../login25.php';
      </script>
      <?php
    }
    
    }
  }
  else
  {
    ?>
    <script>
      alert('your details can\'t be empty');
      window.location.href = '../register25.php';
    </script>
    <?php
  }
}