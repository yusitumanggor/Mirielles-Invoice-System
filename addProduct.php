<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
    include "./controller/addProduct.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Add Product</title>
    <?php include './webpart/head.php';?>
</head>
<body class="main-bg">
    <?php include './webpart/sidebar.php'?>
    <main class="container pt-5">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <?php
              if ($alert != "") {
                echo "
                <div class=\"alert alert-danger d-flex align-items-center w-75\" role=\"alert\">
                  <div>
                  $alert
                  </div>
                </div>
                ";
              }

              if ($success != "") {
                echo "
                <div class=\"alert alert-success d-flex align-items-center w-75\" role=\"alert\">
                  <div>
                  $success
                  </div>
                </div>
                ";
              }
            ?>
            <div class="p-5 bg-white rounded mb-5 w-75">
                <h3 class="mb-4"><span class="material-symbols-outlined mx-2" id="cust_icon">add_circle</span>Add Product</h3>
                <form class="row g-4 px-3" method="POST" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="productName" class="form-label">Product Name:</label>
                        <input type="text" class="form-control" id="productName" name="productName">
                    </div>
                    <div class="col-12">
                        <label for="productDesc" class="form-label">Product Description:</label>
                        <textarea class="form-control" name="productDesc" id="productDesc" rows="5"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="productPrice" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="productPrice" name="productPrice">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="formFile" class="form-label">Product Image:</label>
                        <input class="form-control" type="file" id="formFile" name="productPict">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                      <button type="submit" class="btn btn-primary w-25 rounded-pill">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>