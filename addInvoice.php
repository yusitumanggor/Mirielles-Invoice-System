<?php
	session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
	include './controller/addInvoice.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Add Invoice</title>
    <?php include './webpart/head.php';?>
</head>
<body class="main-bg">
    <?php include './webpart/sidebar.php'?>
    <main class="container pt-5">
		<div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <?php
              if ($alert != "") {
                echo "
                <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">
                  <div>
                  $alert
                  </div>
                </div>
                ";
              }

              if ($success != "") {
                echo "
                <div class=\"alert alert-success d-flex align-items-center\" role=\"alert\">
                  <div>
                  $success
                  </div>
                </div>
                ";
              }
            ?>
            <div class="p-5 bg-white rounded mb-5">
				<form class="px-3" method="POST">
					<h3 class="mb-5"><span class="material-symbols-outlined mx-2">note_add</span>New Invoice</h3>
					<div class="row g-4 mb-5">
						<h5 class="text-center">Select Customer:</h5>
						<div class="col-5 d-flex flex-column justify-content-center align-items-center">
							<?php addCustomer();?>
						</div>
						<div class="col-2 d-flex flex-column justify-content-center align-items-center">
							<h5>Or</h5>
						</div>
						<div class="col-5 d-flex flex-column justify-content-center align-items-center">
							<a role="button" class="btn btn-success rounded" href="./addCustomer.php">Add New Customer</a>
						</div>
					</div>
					<div class="g-4 mb-3">
					<hr>
					<h5 class="text-center mb-3">Add Product:</h5>
					<table class="table table-bordered table-hover table-striped" id="invoice_table">
			    		<thead class="text-center">
			    			<tr>
			    				<th width="240">
			    					<h6>Product</h6>
			    				</th>
			    				<th width="100">
			    					<h6>Qty</h6>
			    				</th>
			    				<th>
			    					<h6>Price</h6>
			    				</th>
			    				<th width="100">
			    					<h6>Discount</h6>
			    				</th>
			    				<th>
			    					<h6>Sub Total</h6>
			    				</th>
			    			</tr>
			    		</thead>
			    		<tbody  class="table-hover">
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    			<tr class="text-center">
			    				<td>
			    					<div class="form-group">
									<select class="form-select product-select" name="product_name[]">
										<?php addProduct()?>
									</select>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="form-group">
			    						<input type="number" class="form-control invoice_qty text-center" name="invoice_qty[]" min="0" value="0">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_price text-center" name="invoice_price[]" placeholder="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_discount text-center" name="invoice_discount[]" value="0%" readonly>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="input-group">
			    						<input type="text" class="form-control invoice_subtotal text-center" name="invoice_subtotal[]" value="Rp 0,00" readonly>
			    					</div>
			    				</td>
			    			</tr>			    						    			
			    		</tbody>
			    	</table>
					<div class="d-flex justify-content-end align-items-center mt-2 mb-3">
						<h6 class="mx-3">Total:</h6>
						<input type="text" id="totalPrice" class="form-control w-25" name="invoice-total" value="Rp 0,00" readonly>
                	</div>
					<div class="d-flex justify-content-end m">
                		<a role="button" class="btn btn-outline-success rounded px-3 btn-sm" href="./addProduct.php">Add New Product</a>
                	</div>
					</div>
                    <div class="d-flex justify-content-center mb-5">
                    	<button type="submit" class="btn btn-primary w-25 rounded-pill">Create Invoice</button>
                    </div>
                </form>
			</div>
        </div>
    </main>
    <script src="./assets/script/addInvoice.js"></script>
</body>
</html>