<?php
include_once "dbh.php";
include_once "users.php";

$user = new users();
$doesExist = $user -> checkExistingUid($_POST['username']);
if($doesExist == true){
  echo '1';
} else {
  echo '0';
}

 ?>
