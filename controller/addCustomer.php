<?php
    require 'dbconnect.php';
    $success = "";
    $alert = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $inputAddress = $_POST["inputAddress"];
        $inputCity = $_POST["inputCity"];
        $country = $_POST["country"];
        $postalCode = $_POST["postalCode"];

        $query = "SELECT * FROM customer";

        if ($conn->query($query)) {
            $query = "INSERT INTO `customer`(`fullname`, `email`, `phone_number`, `address`, `city`, `country`, `postal_code`) VALUES ('$fullname','$email','$phoneNumber','$inputAddress','$inputCity','$country','$postalCode')";
            $conn->query($query);
            $success = "Add New Customer Successfully!";
        } else {
            $alert = "Add New Customer Failed:";
        }
    }

    // close connection 
    $conn->close();
?>