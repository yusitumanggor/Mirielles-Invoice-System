<?php
    function invoiceEcho(){
        require 'dbconnect.php';
        $queryInvoice = "SELECT COUNT(*) FROM invoice";
        echo  $conn->query($queryInvoice)->fetch_column();
    }

    function customerEcho(){
        require 'dbconnect.php';
        $queryCustomer = "SELECT COUNT(*) FROM customer";
        echo $conn->query($queryCustomer)->fetch_column();
    }

    function productEcho(){
        require 'dbconnect.php';
        $queryProduct = "SELECT COUNT(*) FROM product";
        echo $conn->query($queryProduct)->fetch_column();
    }
?>