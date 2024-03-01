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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Sertakan file JavaScript jQuery UI jika diperlukan -->
    <script src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>

<body>
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">KIOS SKANIFO</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row"></div>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
            <li><a href="data_barang.php"><span class="glyphicon glyphicon-briefcase"></span> Data Barang</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Entry Penjualan</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Ganti Foto</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</body>

</html>
