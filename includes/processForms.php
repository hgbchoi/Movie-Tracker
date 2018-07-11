<?php
include_once "dbh.php";
include_once "users.php";

$user = new users();

if (isset($_POST['signinButton'])){

$username = $_POST['usernameField'];
$password = $_POST['passwordField'];
$email = $_POST['emailField'];


$user->addUserToDb($username, $password, $email);
header("location:../index.php?register=success");

}

if (isset($_POST['loginButton'])){
if ($user->checkUserLogin($_POST['emailField'], $_POST['passwordField'])){
  header("location:loggedin.php");
} else {
  header("location:../login.php?login=failed");
}



}


?>
