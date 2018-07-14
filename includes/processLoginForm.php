<?php
include_once "dbh.php";
include_once "users.php";
include_once "movies.php";
session_start();

$user = new users();
$movie = new movies();



if (isset($_POST['loginButton'])){
if ($user->checkUserLogin($_POST['emailField'], $_POST['passwordField'])){
  $_SESSION['username'] = $_POST['emailField'];
  $_SESSION['login'] = true;
  header("location:../index.php");
} else {
  header("location:../login.php?login=failed");
}
}


?>
