<?php

use JetBrains\PhpStorm\ArrayShape;

function addProduct() {
    require './controller/dbconnect.php';
    // the query
	$query = "SELECT * FROM product ORDER BY product_name ASC";

	// mysqli select query
	$result = $conn->query($query);

	if($result) {
		echo "<option value=\" \" data-price=\"0\">Select Product</option>";
		while($row = $result->fetch_array()) {
		    print '<option value="'.$row['product_name'].'" data-price="'.$row['product_price'].'">'.$row["product_name"].'</option>';
		}
	} else {

		echo "<p>There are no products, please add a product.</p>";

	}

	// close connection 
	$conn->close();
}

function addCustomer() {
    require './controller/dbconnect.php';
    // the query
	$query = "SELECT * FROM customer ORDER BY fullname ASC";

	// mysqli select query
	$result = $conn->query($query);

	if($result) {
		echo '<select class="form-control customer-select" name="customer-select">';
		echo '<option disabled selected>Select Customer</option>';
		while($row = $result->fetch_array()) {
		    print '<option value="'.$row['id'].'">'.$row["fullname"].'</option>';
		}
		echo '</select>';

	} else {

		echo "<p>There are no customer, please add a customer.</p>";

	}

	// close connection 
	$conn->close();
}

require 'dbconnect.php';
$success = "";
$alert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cust = $_POST["customer-select"];
	$productName = $_POST["product_name"];	
	$invoiceQty = $_POST["invoice_qty"];	
	$invoicePrice = $_POST["invoice_price"];	
	$invoiceDiscount = $_POST["invoice_discount"];
	$invoiceSubtotal = $_POST["invoice_subtotal"];
	$total = $_POST["invoice-total"];
	$invoiceArray = array();

	for ($i=0; $i < count($invoiceSubtotal); $i++) { 
		$tmp = Array(
			"name" => "$productName[$i]",
			"qty" => "$invoiceQty[$i]",
			"price" => "$invoicePrice[$i]",
			"discount" => "$invoiceDiscount[$i]",
			"subtotal" => "$invoiceSubtotal[$i]"
		);
		array_push($invoiceArray, $tmp);
	}

	$invoiceJson = json_encode($invoiceArray, JSON_UNESCAPED_UNICODE);
	
	$query = "SELECT * FROM invoice";

	if ($conn->query($query)) {
		if (isset($cust) && isset($total)) {
			$query = "INSERT INTO `invoice`(`cust_id`, `invoice_json`, `total_price`) VALUES ('$cust','$invoiceJson','$total')";
			$conn->query($query);
			$success = "New Invoice Added Successfully!";
		} else {
			$alert = "Please Add Customer and Total Amount!";
		}
	} else {
		$alert = "Add New Product Failed:";
	}
}

// close connection 
$conn->close();
?>