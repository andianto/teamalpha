<?php 
include_once 'database.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($fullname)||empty($email)||empty($password)) {
	header('location: index.php');
	exit;
}
$sql = "INSERT INTO userlog (fullname,email,password) VALUES ('$fullname','$email', '$password')";
$insert = $mysqli->query($sql);

if (!$insert) {
	die('user registration eror');
}
else
{
	header('location: Login.php');
}
 ?>