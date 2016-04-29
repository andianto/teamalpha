<?php
session_start();
if ($_SESSION["email"]!=null)
{
  session_destroy();
  header('Location:Login.php');
}
else{
header('Location:index.php');
}
?>