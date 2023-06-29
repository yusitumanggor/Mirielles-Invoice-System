<?php
    require 'dbconnect.php';
    $id = $_GET['id'];
    $tableName = $_GET['tableName'];
    $query = "DELETE FROM $tableName WHERE id = $id";
    if ($conn->query($query)) {
        switch ($tableName) {
            case 'invoice':
                header("Location: ../manageInvoice.php");
                break;
            case 'customer':
                header("Location: ../manageCustomer.php");
                break;
            case 'product':
                header("Location: ../manageProduct.php");
                break;
            default:
                break;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>