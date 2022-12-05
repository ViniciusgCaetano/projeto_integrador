<?php
    session_start();
    $_SESSION['logged'] = false;
    header("refresh:0;url=http://localhost/login.php");
?>
