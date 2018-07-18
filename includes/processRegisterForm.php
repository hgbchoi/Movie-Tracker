<?php
include_once "dbh.php";
include_once "users.php";
include_once "movies.php";
session_start();

$user = new users();
$movie = new movies();

if (isset($_POST['signupButton'])){

$username = $_POST['usernameField'];
$password = $_POST['passwordField'];
$email = $_POST['emailField'];


$user->addUserToDb($username, $password, $email);
header("location:../index.php?register=success");

}


?>
