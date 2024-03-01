<?php
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>Detail Barang</h3>
<a class="btn" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
<?php

$id_brg = mysqli_real_escape_string($koneksi, $_GET['id']);

$det = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id_brg'") or die(mysqli_error($koneksi));
while ($d = mysqli_fetch_array($det)) {
?>
    <table class="table">
        <tr>
            <td>Kode</td>
            <td><?php echo $d['kode'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $d['nama'] ?></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><?php echo $d['satuan'] ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?php echo number_format($d['harga']) ?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?php echo $d['stok'] ?></td>
        </tr>
    </table>
<?php
}
?>
