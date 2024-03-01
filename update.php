<?php
include 'config.php';

$id  = mysqli_real_escape_string($koneksi, $_POST['id']);
$kode = mysqli_real_escape_string($koneksi, $_POST['kode']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$satuan = mysqli_real_escape_string($koneksi, $_POST['satuan']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$stok = mysqli_real_escape_string($koneksi, $_POST['stok']);

mysqli_query($koneksi, "UPDATE barang SET kode='$kode', nama='$nama', satuan='$satuan', harga='$harga', stok='$stok' WHERE id='$id'") or die(mysqli_error($koneksi));
header("location:index.php");
?>
