<?php

class dbh {

private $dbName;
private $dbUserId;
private $dbPassword;
private $serverName;

protected function connect(){

  $this -> serverName = 'localhost';
  $this -> dbUserId = 'root';
  $this -> dbPassword = '';
  $this -> dbName = 'movietrack';
  try {
  $dbh = new PDO('mysql:host='.$this->serverName.';dbname='.$this->dbName, $this->dbUserId, $this->dbPassword);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
  } catch (PDOException $e) {
  echo "Connection Failed: ".$e->getMessage();
}
}

}

?>
