<nav class="navbar fixed-top py-3 bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./assets/img/logo_mirielle.png" alt="Logo" width="36" height="28" class="d-inline-block align-text-top">
      <span class="fw-bold text-white">Mirielle's Invoice System</span>
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hi <?php (isset($_SESSION)) ? print $_SESSION['userName'] . " !" : print "User!" ; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 mb-3">
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Invoices
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./addInvoice.php">Add Invoices</a></li>
                      <li><a class="dropdown-item" href="./manageInvoice.php">Manage Invoices</a></li>
                  </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Customers
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./addCustomer.php">Add Customers</a></li>
                      <li><a class="dropdown-item" href="./manageCustomer.php">Manage Customers</a></li>
                  </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./addProduct.php">Add Products</a></li>
                      <li><a class="dropdown-item" href="./manageProduct.php">Manage Products</a></li>
                  </ul>
            </li>
        </ul>
        <div class="w-100 h-50 d-flex justify-content-center align-items-end">
            <a role="button" class="btn btn-danger w-50" href="./controller/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
</nav>