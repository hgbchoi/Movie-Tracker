<?php
include_once "dbh.php";
include_once "users.php";
include_once "movies.php";
session_start();

$user = new users();
$movie = new movies();

if (isset($_POST['createButton']) && isset($_SESSION['username'])){

$movieName = $_POST['titleField'];
$userName = $_SESSION['username'];
$rating = $_POST['ratingField'];
$comments = $_POST['commentField'];
$postDate = date("Y-m-d H:i:s");

$movie->addPost($movieName, $userName, $rating, $comments, $postDate);
header("location:../viewposts.php");


} else {
  header("location:../login.php");
}

?>
