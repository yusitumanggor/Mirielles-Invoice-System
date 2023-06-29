<?php
  if(isset($_SESSION['userName'])){
    header("location: dashboard.php");
  }
  include './controller/register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <?php 
        include './webpart/head.php';
    ?>
</head>
<body class="login-signup">
  <main class="container d-flex flex-column justify-content-center align-items-center vh-100 vw-100">
      <?php
        if ($error != "") {
          echo "
          <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">
            <div>
            $error
            </div>
          </div>
          ";
        }
      ?>
    <div class="d-flex flex-column cust-card form-card">
        <h1 class="text-center mb-4">Register:</h1>
        <form method="POST" autocomplete="off">
            <div class="d-flex flex-column">
              <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill px-4" id="usernameRegister" name="name" placeholder="myUsername" required>
                <label for="usernameRegister" class="px-4">Username</label>
              </div>
              <div class="form-floating mb-4">
                <input type="email" class="form-control rounded-pill px-4" id="emailRegister" name="email" placeholder="email@example.com" required>
                <label for="emailRegister" class="px-4">Email address</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control rounded-pill px-4" id="passwordRegister" name="password" placeholder="Password" required>
                <label for="passwordRegister" class="px-4">Password</label>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill fw-bold fs-5 py-2 px-4 w-50 align-self-center mb-4">Register</button>
              <p class="text-center">Already have account? <a class="text-decoration-none fw-bold" href="./login.php">Login Now</a></p>
            </div>
        </form>
    </div>  
  </main>
</body>
</html>
