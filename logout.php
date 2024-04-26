<?php
    $expire = time() - 60*60*24*30;
    setcookie("token", "", $expire);
    echo '<meta http-equiv="refresh" content="0; url=login.php">';
?>