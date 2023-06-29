<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
    include './controller/dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Dashboard</title>
    <?php include './webpart/head.php';?>
</head>
<body class="main-bg">
    <?php include './webpart/sidebar.php'?>
    <main class="container d-flex justify-content-center align-items-center vh-100 vw-100">
        <div class="d-flex justify-content-center align-items-center text-white">
            <div class="p-5 d-flex flex-column align-items-center bg-success rounded mx-5 w-75 text-center">
                <h4 class="fw-bold mb-2">Total Invoice:</h4>
                <h3><?php invoiceEcho()?></h3>
            </div>
            <div class="p-5 d-flex flex-column align-items-center bg-danger rounded mx-5 w-75 text-center">
                <h4 class="fw-bold mb-2">Total Customer:</h4>
                <h3><?php customerEcho()?></h3>
            </div>
            <div class="p-5 d-flex flex-column align-items-center bg-primary rounded mx-5 w-75 text-center">
                <h4 class="fw-bold mb-2">Total Product:</h4>
                <h3><?php productEcho()?></h3>
            </div>
        </div>
    </main>
</body>
</html>