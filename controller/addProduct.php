<?php
    require 'dbconnect.php';
    $success = "";
    $alert = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST["productName"];
        $product_desc = $_POST["productDesc"];
        $product_price = $_POST["productPrice"];
        $product_pict = addslashes(file_get_contents($_FILES['productPict']["tmp_name"]));

        $query = "SELECT * FROM product";

        if ($conn->query($query)) {
            $query = "INSERT INTO `product`(`product_name`, `product_desc`, `product_price`, `product_pict`) VALUES ('$product_name','$product_desc','$product_price','$product_pict')";
            $conn->query($query);
            $success = "Add New Product Successfully!";
        } else {
            $alert = "Add New Product Failed:";
        }
    }

    // close connection 
    $conn->close();

?>