<?php
    require 'dbconnect.php';
    $id = $_POST['id'];

    $query = "SELECT * FROM customer WHERE id = '$id'";
    $result = $conn->query($query);
    $dataResult = $result->fetch_array();
    $response = "
    <form class=\"row g-4 px-3\" method=\"POST\" action=\"./controller/editCustomer.php\">
        <div class=\"col-4\">
            <label for=\"fullName\" class=\"form-label\">Full name</label>
            <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullname\" value=\"".$dataResult['fullname']."\">
        </div>
        <div class=\"col-4\">
            <label for=\"email\" class=\"form-label\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"".$dataResult['email']."\">
        </div>
        <div class=\"col-4\">
            <label for=\"phoneNumber\" class=\"form-label\">Phone Number</label>
            <input type=\"text\" class=\"form-control\" id=\"phoneNumber\" name=\"phoneNumber\" value=\"".$dataResult['phone_number']."\">
        </div>
        <div class=\"col-6\">
            <label for=\"inputAddress\" class=\"form-label\">Address</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress\" name=\"inputAddress\" value=\"".$dataResult['address']."\">
        </div>
        <div class=\"col-6\">
            <label for=\"inputCity\" class=\"form-label\">City</label>
            <input type=\"text\" class=\"form-control\" id=\"inputCity\" name=\"inputCity\" value=\"".$dataResult['city']."\">
        </div>
        <div class=\"col-6\">
            <label for=\"country\" class=\"form-label\">Country</label>
            <input type=\"text\" class=\"form-control\" id=\"country\" name=\"country\" value=\"".$dataResult['country']."\">
        </div>
        <div class=\"col-3\">
            <label for=\"postalCode\" class=\"form-label\">Postal Code</label>
            <input type=\"number\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" value=\"".$dataResult['postal_code']."\">
        </div>
        <div class=\"col-3\">
            <label for=\"customerId\" class=\"form-label\">Customer ID</label>
            <input type=\"text\" class=\"form-control\" id=\"customerId\" name=\"id\" value=\"".$dataResult['id']."\" readonly>
        </div>
        <div class=\"d-flex justify-content-center mt-5\">
          <button type=\"submit\" class=\"btn btn-success w-25 rounded-pill\">Edit Customer</button>
        </div>
    </form>
    ";
    
    echo $response;

    // close connection 
    $conn->close();
?>