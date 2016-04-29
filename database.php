<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQLi anda
	$database = "dbsp"; //database anda
	$mysqli= new mysqli($namahost, $username, $password, $database);	
	if ($mysqli->connect_eror) {
		die('database conection eror !');
	}
	else
		header('Location:index.php');
?>