<?php
  if(isset($_SESSION['userName'])){
    header("location: dashboard.php");
  }else{
    header("location: login.php");
  }
?>