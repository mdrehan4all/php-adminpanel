<?php
  if(!isset($_COOKIE['token'])){
    echo '<meta http-equiv="refresh" content="0; url=login.php">';
  }else{
    $token = $_COOKIE['token'];
  }
?>