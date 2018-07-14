<?php
include_once "includes/dbh.php";
include_once "includes/movies.php";
include_once "includes/widgets.php";
widgets::postManagerNav();
?>

<div class = "wrapper-form">
  <div class = "form-box">
    <form action ="includes/processCreateForm.php" method = "POST" id = "createPostForm">
      <h1>Create Entry</h1>
    <div class = "invalidInput">
      <p id = "invalidTitle" class = "hidden red-text">Movie title field cannot be empty</p>
    </div>
      <input id = "title-Field" name = "titleField" type = "text" placeholder = "Movie Title" >
    <div class = "invalidInput">
      <p id = "invalidRating" class = "hidden red-text">Rating field cannot be empty</p>
    </div>
      <input id = "rating-field" name = "ratingField" type = "number" placeholder = "rating" >
    <div class = "invalidInput">
      <p id = "invalidComments" class = "hidden red-text">Comment field cannot be empty</p>
    </div>
      <textarea id = "comment-field" name = "commentField" placeholder = "Comments about the movie"></textarea>
      <button id = "create-button" name = "createButton">Create</button>
    </form>

  </div>
</div>
<script type = "text/javascript" src="javascript/validate.js"></script>
<script type = "text/javascript" src="javascript/main.js"></script>
</body>
