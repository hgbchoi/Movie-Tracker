<?php

include_once "dbh.php";
include_once "movies.php";

$movie = new movies($_SESSION['username']);

if (@$_GET['id']){
  $movie -> deleteMovie(@$_GET['id']);
}

header("location:../viewposts.php")


?>
