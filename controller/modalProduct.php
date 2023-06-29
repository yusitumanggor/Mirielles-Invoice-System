<?php
    require 'dbconnect.php';
    $id = $_POST['id'];

    $query = "SELECT * FROM product WHERE id = $id";
    $result = $conn->query($query);
    $dataResult = $result->fetch_array();
    $response = "
    <form class=\"row g-4\" method=\"POST\" action=\"./controller/editProduct.php\" enctype=\"multipart/form-data\">
        <div class=\"col-2\">
            <label for=\"productId\" class=\"form-label\">Product ID:</label>
            <input type=\"text\" class=\"form-control\" id=\"productId\" name=\"id\" value=\"".$dataResult['id']."\" readonly>
        </div>
        <div class=\"col-10\">
            <label for=\"productName\" class=\"form-label\">Product Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"productName\" name=\"productName\" value=\"".$dataResult['product_name']."\">
        </div>
        <div class=\"col-12\">
            <label for=\"productDesc\" class=\"form-label\">Product Description:</label>
            <textarea class=\"form-control\" name=\"productDesc\" id=\"productDesc\" rows=\"5\">".$dataResult['product_desc']."</textarea>
        </div>
        <div class=\"col-6\">
            <label for=\"productPrice\" class=\"form-label\">Price:</label>
            <input type=\"number\" class=\"form-control\" id=\"productPrice\" name=\"productPrice\" value=\"".$dataResult['product_price']."\">
        </div>
        <div class=\"col-6 mb-3\">
            <label for=\"formFile\" class=\"form-label\">Edit Product Image:</label>
            <input class=\"form-control\" type=\"file\" id=\"formFile\" name=\"productPict\">
        </div>
        <div class=\"d-flex justify-content-center mt-5\">
          <button type=\"submit\" class=\"btn btn-primary w-25 rounded-pill\">Save Product</button>
        </div>
    </form>
    ";
    
    echo $response;

    // close connection 
    $conn->close();
?>