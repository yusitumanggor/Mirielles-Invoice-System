<?php
    require 'dbconnect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST["id"];
        $product_name = $_POST["productName"];
        $product_desc = $_POST["productDesc"];
        $product_price = $_POST["productPrice"];
        $product_pict = $_FILES['productPict']["tmp_name"];

        if ($product_pict != "") {
            $file = fopen($product_pict,"r");
            $photoprod = fread($file,filesize($product_pict));
            $photoprod = addslashes($photoprod);
            fclose($file);

            $query = "UPDATE `product` SET `product_name`='$product_name',`product_desc`='$product_desc',`product_price`='$product_price',`product_pict`='$photoprod' WHERE `id` = $id";

            if ($conn->query($query)) {
                header("Location: ../manageProduct.php");
            } 
        } else {
            $query = "UPDATE `product` SET `product_name`='$product_name',`product_desc`='$product_desc',`product_price`='$product_price' WHERE `id` = $id";

            if ($conn->query($query)) {
                header("Location: ../manageProduct.php");
            } 
        }
    }

    // close connection 
    $conn->close();

?>