<?php
session_start();
if (!isset($_SESSION['id']))
{
   header("location:login25.php");
   exit();
}
else
{


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONtioXp</title>
</head>
<body>
  <header>
  <div><a href="job-app25.php"> <button>apply</button></a>
  <a href="includes/logout.inc.php"> <button>logout</button></a>
</div>
  </header>

  
</body>
</html>
<?php
}