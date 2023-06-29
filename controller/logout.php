<?php
    session_start();
    unset($_SESSION['userName']);
    session_unset();
    session_destroy();
    $_SESSION = array();
    header("location: ../index.php");
?>