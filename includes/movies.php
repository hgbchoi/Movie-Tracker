<?php

class movies extends dbh {

public function addPost($username, $moviename, $rating, $comment, $postdate) {

  $sql = "INSERT INTO movies_table (username, moviename, rating, comments, postdate) VALUES (?,?,?,?,?)";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$username, $moviename, $rating, $comment, $postdate]);

}

}
?>
