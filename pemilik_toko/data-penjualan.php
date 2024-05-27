<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    require '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <meta name="googlebot" content="index,follow">
    <meta name="googlebot-news" content="index,follow">
    <meta name="robots" content="index,follow">
    <meta name="Slurp" content="all">

    <title>DAMOZA STORE</title>

    <link rel="stylesheet" href="../plugins/css/bootstrap.css">

    <link rel="stylesheet" href="../plugins/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid bg-dark">
        <div class="container">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container">
                    <!-- Brand/logo -->
                    <a class="navbar-brand text-uppercase" href="home.php" href="#">DAMOZA STORE</a>

                    <div class="justify-content-end d-block d-lg-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownMenu" aria-controls="navbarNavDropdownMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="collapse navbar-collapse font-weight-semi-bold justify-content-end" id="navbarNavDropdownMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link " href="home.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="rekap-data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Rekap Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link  btn btn-secondary" href="data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="daftar-produk.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Daftar Produk</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="tambah-produk.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Produk</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link text-primary border-bottom" href="logout.php">LOGOUT <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- ISINYA -->

    <div class="container my-4 text-center">

        <table class="table table-striped border mt-4">
            <thead class="bg-black text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">INVOICE</th>
                    <th scope="col">Identitas Pembeli</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Total bayar</th>
                    <th scope="col">Waktu Transaksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $no                 = 1;
                    $query              = "SELECT * FROM penjualan ORDER BY waktu_transaksi DESC";
                    $mysqlQuery         = mysqli_query($koneksinya, $query);
                    while ($result      = mysqli_fetch_assoc($mysqlQuery)) {
                ?>

                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><strong><a href="#"><?php echo $result['invoice']; ?></a></strong></td>
                    <td class="text-left">
                        <ul class="my-0">
                            <li>Nama: <?= $result['nama_pembeli'] ?></li>
                            <li>No. HP: <?= $result['no_hp'] ?></li>
                            <li>Alamat: <?= $result['alamat'] ?></li>
                        </ul>
                    </td>
                    <td class="text-left">
                        <ul class="my-0">
                            <?php
                                $query_produk = mysqli_query($koneksinya, "SELECT * FROM cart INNER JOIN produk ON cart.id_produk = produk.id_produk WHERE invoice='$result[invoice]'");
                                while ($resultProduk = mysqli_fetch_assoc($query_produk)){
                            ?>
                            <li><?= $resultProduk['nama'] ?> @Rp<?= $resultProduk['harga'] ?></li>
                            <?php } ?>
                        </ul>
                    </td>
                    <td class="text-left">
                        <ul class="my-0">
                            <?php
                                $query_qty = mysqli_query($koneksinya, "SELECT * FROM cart WHERE invoice='$result[invoice]'");
                                while ($resultQTY = mysqli_fetch_assoc($query_qty)){
                            ?>
                            <li><?= $resultQTY['jumlah'] ?></li>
                            <?php } ?>
                        </ul>
                    </td>
                    <td class="text-left">
                        <ul class="my-0">
                            <?php
                                $query_sub = mysqli_query($koneksinya, "SELECT * FROM cart WHERE invoice='$result[invoice]'");
                                while ($resultSUB = mysqli_fetch_assoc($query_sub)){
                            ?>
                            <li>Rp<?= $resultSUB['total'] ?></li>
                            <?php } ?>
                        </ul>
                    </td>
                    <td><strong>Rp<?php echo rp($result['total']); ?></strong></td>
                    <td><?php echo $result['waktu_transaksi']; ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- ISINYA -->

    <div class="container-fluid text-center py-2 text-white bg-dark">
            <small>&copy;Dibuat oleh Kelompok 4</small>
        </div>
    </div>

    <script src="../plugins/js/jquery.min.js"></script>
    <script src="../plugins/js/popper.js"></script> 
    <script src="../plugins/js/bootstrap.min.js"></script>
    <script src="../plugins/js/aos.js"></script>

    <script type="text/javascript">

        // Popover
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
        // Popover

    </script>

</body>
</html>