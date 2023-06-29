<?php
    require 'dbconnect.php';

    $id = $_POST["id"];
	
    $query = "SELECT customer.*, invoice.* FROM customer INNER JOIN invoice ON customer.id = invoice.cust_id WHERE customer.id = ".$id;
    $result = $conn->query($query);
    $dataResult = $result->fetch_array();

    $response = "<div class=\"d-flex flex-column px-3\">";
    $response .= "
        <div class=\"mb-4 row text-start\">
			<div class=\"col-6\">
				<ul class=\"list-unstyled\">
					<li><span class=\"fw-bold\">Fullname:</span> ".$dataResult['fullname']." </li>
					<li><span class=\"fw-bold\">Email Phone:</span> ".$dataResult['email']." </li>
					<li><span class=\"fw-bold\">Phone Number:</span> ".$dataResult['phone_number']."</li>
					<li><span class=\"fw-bold\">Address:</span> ".$dataResult['address']."</li>
				</ul>
			</div>
			<div class=\"col-6\">
				<ul class=\"list-unstyled\">
					<li><span class=\"fw-bold\">City:</span> ".$dataResult['city']."</li>
					<li><span class=\"fw-bold\">Country:</span> ".$dataResult['country']."</li>
					<li><span class=\"fw-bold\">Postal Code:</span> ".$dataResult['postal_code']."</li>
				</ul>
			</div>
		</div>
    ";
	$response .= "
		<div class=\"mb-4\">
		    <table class=\"table table-bordered table-hover table-striped\" id=\"invoice_table\">
		    	<thead class=\"text-center\">
		    		<tr>
		    			<th width=\"280\">
		    				<h6>Product</h6>
		    			</th>
		    			<th width=\"100\">
		    				<h6>Qty</h6>
		    			</th>
		    			<th>
		    				<h6>Price</h6>
		    			</th>
		    			<th width=\"100\">
		    				<h6>Discount</h6>
		    			</th>
		    			<th>
		    				<h6>Sub Total</h6>
		    			</th>
		    		</tr>
		    	</thead>
		    	<tbody  class=\"table-hover\">";	
	$custProduct = json_decode($dataResult['invoice_json'], true);
	$productResult = " ";
	foreach ($custProduct as $product) {
		if ($product['name'] != " ") {
			$temp = "
				<tr class=\"text-center\">
					<td>
						<p>".$product['name']."</p>
					</td>
					<td>
						<p>".$product['qty']."</p>
					</td>
					<td>
						<p>".$product['price']."</p>
					</td>
					<td>
						<p>".$product['discount']."</p>
					</td>
					<td>
						<p>".$product['subtotal']."</p>
					</td>
				</tr>"
			;
			$productResult .= $temp;
		}
	}
	
	$response .= $productResult;
	$response .= "</tbody>
		    </table>
		</div>
	";
	$response .= "
		<div class=\"mb-4\">
			<h6 class=\"text-end\"><span class=\"fw-bold\">Total:</span> ".$dataResult['total_price']." </h6>
		</div>
	";
    $response .= "</div>";
	echo $response;
    
	// close connection 
	$conn->close();

?>