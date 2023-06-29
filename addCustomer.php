<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
    include './controller/addCustomer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Add Customer</title>
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
                <h3 class="mb-4"><span class="material-symbols-outlined mx-2" id="cust_icon">group_add</span>New Customer</h3>
                <form class="row g-4 px-3" method="POST">
                    <div class="col-4">
                        <label for="fullName" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="fullName" name="fullname">
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-4">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="inputAddress">
                    </div>
                    <div class="col-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="inputCity">
                    </div>
                    <div class="col-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                    <div class="col-6">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="number" class="form-control" id="postalCode" name="postalCode">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                      <button type="submit" class="btn btn-primary w-25 rounded-pill">Add Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>