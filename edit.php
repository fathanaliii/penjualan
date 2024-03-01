<?php
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>Edit Barang</h3>
<a href="index.php" class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
<?php

$id_brg = mysqli_real_escape_string($koneksi, $_GET['id']);
$det = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id_brg'") or die(mysqli_error($koneksi));
while ($d = mysqli_fetch_array($det)) {
?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
            </tr>
            <tr>
                <td>Kode</td>
                <td><input type="text" name="kode" value="<?php echo $d['kode'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <select name="satuan" class="form-control">
                        <option value="<?php echo $d['satuan'] ?>"><?php echo $d['satuan'] ?></option>
                        <option value="Pcs">Pcs</option>
                        <option value="Dus">Dus</option>
                        <option value="Kg">Kg</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" class="form-control" name="harga" value="<?php echo $d['harga'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" class="form-control" name="stok" value="<?php echo $d['stok'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
<?php
}
?>