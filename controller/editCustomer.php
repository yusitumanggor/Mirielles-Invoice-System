<?php
    require 'dbconnect.php';
    $success = "";
    $alert = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $inputAddress = $_POST["inputAddress"];
        $inputCity = $_POST["inputCity"];
        $country = $_POST["country"];
        $postalCode = $_POST["postalCode"];

        $query = "UPDATE `customer` SET `fullname`='$fullname',`email`='$email',`phone_number`='$phoneNumber',`address`='$inputAddress',`city`='$inputCity',`country`='$country',`postal_code`='$postalCode' WHERE `id` = '$id'";

        if ($conn->query($query)) {
            header("Location: ../manageData.php");
        } 
    }

    // close connection 
    $conn->close();
?>