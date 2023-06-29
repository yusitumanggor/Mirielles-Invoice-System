<?php
	session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
    include './controller/manageData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Manage Product</title>
    <?php include './webpart/head.php';?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="assets/jquery-3.6.3.js"></script>
	<link href="assets/DataTables/datatables.min.css" rel="stylesheet">
	<script src="assets/DataTables/datatables.min.js"></script>
</head>
<body class="main-bg">
    <?php include './webpart/sidebar.php'?>
    <main class="container pt-5">
        <div class="d-flex flex-column align-items-center vh-100 pt-5">
            <div class="p-5 bg-white rounded mb-10 w-100">
            <h3 class="mb-4"><span class="material-symbols-outlined mx-2" id="prod_icon">inventory</span>Show Product</h3>
            <table class="table table-bordered table-hover table-striped" id="product_table">
			    		<thead class="text-center">
			    			<tr>
			    				<th>
			    					<h6>#</h6>
			    				</th>
			    				<th>
			    					<h6>Product Name</h6>
			    				</th>
			    				<th>
			    					<h6>Product Description</h6>
			    				</th>
			    				<th>
			    					<h6>Price</h6>
			    				</th>
			    				<th>
			    					<h6>Image</h6>
			    				</th>
			    				<th>
			    					<h6>Action</h6>
			    				</th>
			    			</tr>
			    		</thead>
			    		<tbody>
                            <?php showProduct();?>
                        </tbody>
			    	</table>

            <!-- Modal -->
            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
			          <div class="modal-content">
			            <div class="modal-header">
						<h1 class="modal-title fs-5" id="modalLabel"><span class="material-symbols-outlined me-2">inventory</span>Product Edit:</h1>
			              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			            </div>
			            <div class="modal-body">
			              ...
			            </div>
			            <div class="modal-footer d-flex justify-content-between">
							<button id="deleteBtn" type="button" class="btn btn-danger">Delete</button>
			              	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
			            </div>
			          </div>
			        </div>
			      </div>
            </div>
        </div>
    </main>
	<script src="./assets/script/modalbox.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
    		$('#product_table').DataTable();
		} );
	</script>
</body>
</html>