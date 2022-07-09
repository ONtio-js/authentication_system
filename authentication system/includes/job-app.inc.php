<?php
require_once 'connect.inc.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST)) {
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_SPECIAL_CHARS);
    $state = filter_var($_POST['state'], FILTER_SANITIZE_SPECIAL_CHARS);
    $linkeldn = filter_var($_POST['linkeldn'], FILTER_SANITIZE_SPECIAL_CHARS);
    $intro = filter_var($_POST['intro'], FILTER_SANITIZE_SPECIAL_CHARS);
    $website = filter_var($_POST['website'], FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $cv = $_FILES['file']['name'];
    $otherfiles = $_FILES['file']['name'];




    if ($_SESSION['mail']) {
      $sql = "SELECT * FROM job_app_data WHERE email = '$email'";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);

      if ($count > 0) {
?>
        <script>
          alert('you have applied to this job');
          window.location.href = '../index.php';
        </script>
        <?php
      } else {
        // upload folder
        $target_dir = "files/";
        $targer_file = $target_dir . basename($_FILES['cv']['name']);
        $imageFileType = strtolower(pathinfo($targer_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "jpeg") {
          echo "u can only upload valid file";
        } else {
          // echo "u can only upload valid file";
          $file = basename($_FILES['cv']['name']);
          move_uploaded_file($_FILES['cv']['tmp_name'], $targer_file);

          $sql = "INSERT INTO job_app_data (firstname,lastname,email,phone,state,country,linkeldn_link,intro,cv,website_link) VALUES ('$fname'
      ,'$lname','$email','$phone','$state','$country','$linkeldn','$intro','$file','$website')";

          $res = mysqli_query($conn, $sql);


          if (!$res) {
        ?>
            <script>
              alert('please check your info');
              window.location.href = '../job-app25.php';
            </script>
          <?php

          } else {
          ?>
            <script>
              alert("proced to making your payment please");
              window.location.href = '../payment25.php';
            </script>
      <?php
          }
        }
      }
    } else {
      ?>
      <script>
        alert('you can only apply to this job with your registered email')
        window.location.href = '../job-app25.php';
      </script>
<?php
    }
  }
} else {
  ?>
  <script>
    alert('we can\'t recognise your action');
    window.location.href = '../job-app25.php';
  </script>
  <?php
}

