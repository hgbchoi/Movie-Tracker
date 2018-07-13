<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
unset($_SESSION['login']);
header("location: ../index.php");

 ?>
