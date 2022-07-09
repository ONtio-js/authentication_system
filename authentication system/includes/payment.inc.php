<?php
require_once 'connect.inc.php';

session_start();

$monthlybill = $_POST['rad1'];
$yearlybill =$_POST['rad2'];
$cardnumber = filter_var($_POST['card'],FILTER_SANITIZE_NUMBER_INT);
$cardexpire = filter_var($_POST['expire'],FILTER_SANITIZE_NUMBER_INT);
$cardcvv = filter_var($_POST['cvv'],FILTER_SANITIZE_NUMBER_INT);
$country = filter_var($_POST['country'],FILTER_SANITIZE_SPECIAL_CHARS);
$billingzip = filter_var($_post['billzip'],FILTER_SANITIZE_SPECIAL_CHARS);
$nextbutton = $_POST['nextbutton'];
$fullname = filter_var($_POST['fullname'],FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
$password = filter_var($_POST['fullname'],FILTER_SANITIZE_SPECIAL_CHARS);
$paymentButton =$_POST['paymentbutton'];
$firstauth = [$monthlybill,$yearlybill,$cardnumber,$cardexpire,$cardcvv,$country,$billingzip,$nextbutton,];
$secondauth = [$fullname,$password,$email];