<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'config.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <a class="navbar-brand" href="#">KIOS SKANIFO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Navbar links -->
    </div>
</nav>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>" href="index.php">
                        <span class="fas fa-home me-2"></span> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'data_barang') ? 'active' : ''; ?>" href="data_barang.php">
                        <span class="fas fa-briefcase me-2"></span> Data Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'entry_penjualan') ? 'active' : ''; ?>" href="#">
                        <span class="fas fa-shopping-cart me-2"></span> Entry Penjualan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'ganti_foto') ? 'active' : ''; ?>" href="#">
                        <span class="fas fa-images me-2"></span> Ganti Foto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'ganti_password') ? 'active' : ''; ?>" href="#">
                        <span class="fas fa-lock me-2"></span> Ganti Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'logout') ? 'active' : ''; ?>" href="#">
                        <span class="fas fa-sign-out-alt me-2"></span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


</body>

</html>
