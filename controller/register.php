<?php
    require 'dbconnect.php';
    $error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows == 0) {
            $query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
            $conn->query($query);
            header('Location: ./login.php');
        } else {
            $error = "Registration failed: Your Email Already Registered";
        }
    }
    
	// close connection 
	$conn->close();
?>