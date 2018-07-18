<?php
include_once "dbh.php";
include_once "users.php";
include_once "movies.php";
session_start();

$user = new users();


if (isset($_POST['createButton']) && isset($_SESSION['username'])){
$movie = new movies($_SESSION['username']);
$movieName = $_POST['titleField'];
$userName = $_SESSION['username'];
$rating = $_POST['ratingField'];
$comments = $_POST['commentField'];
$postDate = date("Y-m-d H:i:s");

$movie->addPost($userName, $movieName, $rating, $comments, $postDate);
header("location:../viewposts.php");


} else {
  header("location:../login.php");
}

?>
