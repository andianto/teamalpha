<?php 
include_once 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)||empty($password)) {
	header('location: Login.php');
	exit;
}
$sql = "SELECT password form userlog WHERE email ='$email'";
$select = $mysqli->query($sql);
$row = $select->fetch_object();

if ($row->password== $password) {
	echo "Login Succes";
}
else
{
	echo "login gagal";
}
 ?>