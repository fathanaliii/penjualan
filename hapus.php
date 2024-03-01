<?php
include 'config.php';

$id = mysqli_real_escape_string($koneksi, $_GET['id']); 
mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'") or die(mysqli_error($koneksi));

header("location:index.php");
?>
