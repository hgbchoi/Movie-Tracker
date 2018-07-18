<?php
include_once "includes/dbh.php";
include_once "includes/movies.php";
include_once "includes/widgets.php";
include_once "includes/movies.php";
include_once "includes/displayPosts.php";

widgets::postManagerNav();

if (isset($_SESSION['login'])){
$movie = new movies($_SESSION['username']);
$displayPost = new displayPosts();
$movieList = $movie -> getAllMovies();
}
else {
  header("location:login.php");
}
?>

<div class = "wrapper-posts">
  <div class = "wrapper-table">
    <h1>All Posts</h1>

    <input type ="text" placeholder = "Search...  ">
    <button class ="search-btn">Search</button>
<?php $displayPost -> display_movietable($movieList);?>
  </div>
</div>



<script type = "text/javascript" src="javascript/main.js"></script>
</body>
