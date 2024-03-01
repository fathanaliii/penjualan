<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Barang</title>
</head>

<?php include 'header.php'; ?>
<div class="container">
    <h3><span class="fas fa-briefcase"></span> Data Barang</h3>
    <button style="margin-bottom: 20px;" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary col-md-2">
        <span class="fas fa-plus"></span> Tambah barang
    </button>
    <br><br>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "penjualan");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    $per_hal = 10;
    $jumlah_record = mysqli_query($koneksi, "SELECT COUNT(*) FROM barang");
    $jum = mysqli_fetch_row($jumlah_record)[0];
    $halaman = ceil($jum / $per_hal);
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $per_hal;
    ?>

    <div class="row">
        <div class="col-md-12">
            <table class="col-md-2">
                <tr>
                    <td>Jumlah Record :</td>
                    <td><?php echo $jum; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Halaman :</td>
                    <td><?php echo $halaman; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-10">
            <a style="margin-bottom: 10px;" href="lap_barang.php" target="_blank" class="btn btn-default pull-right">
                <span class="fas fa-print"></span> Cetak
            </a>
            <form action="cari_act.php" method="get" class="form-inline pull-right">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fas glyphicon-search"></span></span>
                    <input type="text" class="form-control" placeholder="Cari barang disini" aria-describedby="basic-addon1" name="cari">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <br>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Opsi</th>
        </tr>
        <?php
        if (isset($_GET['cari'])) {
            $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
            $brg = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama LIKE '%$cari%' OR jenis LIKE '%$cari%'");
        } else {
            $brg = mysqli_query($koneksi, "SELECT * FROM barang LIMIT $start, $per_hal");
        }
        $no = 1;
        while ($b = mysqli_fetch_array($brg)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b['kode'] ?></td>
                <td><?php echo $b['nama'] ?></td>
                <td><?php echo $b['satuan'] ?></td>
                <td>Rp. <?php echo number_format($b['harga']) ?>,-</td>
                <td><?php echo $b['stok'] ?></td>
                <td>
                    <a href="det_barang.php?id=<?php echo $b['id']; ?>" class="btn btn-info">Detail</a>
                    <a href="edit.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
                    <a onclick="if(confirm('Apakah Anda yakin ingin menghapus data ini?')){location.href='hapus.php?id=<?php echo $b['id']; ?>'}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <ul class="pagination">
        <?php
        for ($x = 1; $x <= $halaman; $x++) {
        ?>
            <li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
        <?php
        }
        ?>
    </ul>
</div>

<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah barang baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="tmb_brg_act.php" method="post">
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Satuan</label>
                        <select name="satuan" class="form-control">
                            <option value="Pcs">Pcs</option>
                            <option value="Dus">Dus</option>
                            <option value="Kg">Kg</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <!-- Tambahkan elemen form lainnya di sini -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>