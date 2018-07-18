<?php

class movies extends dbh {

  var $username;

  function __construct($username){
    $this -> username = $username;
  }

public function addPost($username, $moviename, $rating, $comment, $postdate) {

  $sql = "INSERT INTO movies_table (username, moviename, rating, comments, postdate) VALUES (?,?,?,?,?)";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$username, $moviename, $rating, $comment, $postdate]);


}

function getAllMovies () {

$sql = "SELECT * FROM movies_table WHERE username = ?";
$stmt = $this -> connect() -> prepare($sql);
$stmt -> execute([$this -> username]);
return $stmt -> fetchAll(PDO::FETCH_ASSOC);

}

function deleteMovie($id) {

$sql = "DELETE FROM movies_table WHERE id = ?";
$stmt = $this -> connect() -> prepare($sql);
$stmt -> execute([$id]);

}
}
?>
