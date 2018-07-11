<?php
include_once "dbh.php";


class users extends dbh {

public function addUserToDb($username, $password, $email){

    $stmt = $this->connect()->prepare("INSERT INTO users_table (username, password, email) VALUES (?, ?, ?)");
    $stmt -> execute([$username, $password, $email]);


}

public function checkUserLogin($username, $password){

   $stmt = $this->connect()->prepare("SELECT * FROM users_table WHERE username=? AND password=?");
   $stmt -> execute([$username, $password]);

   if ($stmt->rowCount()){
     return true;
   }
   return false;

}

public function checkExistingUid($username){
  $stmt = $this->connect()->prepare("SELECT * FROM users_table WHERE username=?");
  $stmt -> execute([$username]);

  if ($stmt->rowCount()){
    return true;
  }
  else{
    return false;
  }



}
}


?>
