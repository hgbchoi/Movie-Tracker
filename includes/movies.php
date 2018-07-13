<?

class movies extends dbh {

public function addPost($id, $username, $moviename, $rating, $comment, $postdate) {

  $sql = "INSERT INTO movies_table (id, username, moviename, rating, comment, postdate) VALUES (?,?,?,?,?,?)";
  $stmt = $this->connect()->prepare([$id, $username, $moviename, $rating, $comment, $postdate]);

}

}
?>
