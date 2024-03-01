<?php
include 'config.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// // Membuat koneksi ke database
// $koneksi = mysqli_connect("localhost", "root", "", "penjualan");

// // Memastikan koneksi berhasil
// if (mysqli_connect_errno()) {
//     echo "Koneksi database gagal: " . mysqli_connect_error();
//     exit();
// }

// Melakukan query INSERT dengan menggunakan koneksi yang sudah dibuat
mysqli_query($koneksi, "INSERT INTO barang VALUES('', '$kode', '$nama', '$satuan', '$harga', '$stok')");

// Mengarahkan pengguna kembali ke halaman index.php setelah proses selesai
header("location:index.php");
?>
