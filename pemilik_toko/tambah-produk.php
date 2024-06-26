<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    session_start();
    if (empty($_SESSION['nama']) AND empty($_SESSION['kode'])) {
        header("Location: logout.php");
    }
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

    <title><?= $_SESSION['nama']; ?></title>

    <link rel="stylesheet" href="../plugins/css/bootstrap.css">

    <link rel="stylesheet" href="../plugins/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid bg-dark">
        <div class="container">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container">
                    <!-- Brand/logo -->
                    <a class="navbar-brand text-uppercase" href="home.php"><i class="fa fa-user-circle"></i> <?= $_SESSION['nama']; ?></a>

                    <div class="justify-content-end d-block d-lg-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownMenu" aria-controls="navbarNavDropdownMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="collapse navbar-collapse font-weight-semi-bold justify-content-end" id="navbarNavDropdownMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="rekap-data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Rekap Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="daftar-produk.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Daftar Produk</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link btn btn-secondary" href="tambah-produk.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Produk</a>
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

    <div class="container my-4 text-center ">
        <div class="row justify-content-center ">
            <div class="col-8 bg-black text-white py-4 shadow">
                <h3 class="text-white border bg-dark py-4">FORM TAMBAH PRODUK</h3>
                <hr />
                <form method="POST" action="memproses_tambah_produk.php" class="text-left">
                    <div class="form-group">
                        <label for="namaProduk">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Masukkan nama produk">
                    </div>
                    <div class="form-group">
                        <label for="hargaProduk">Harga Produk</label>
                        <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Masukkan harga produk">
                    </div>
                    <div class="form-group">
                        <label for="stockProduk">Stock Produk</label>
                        <input type="number" class="form-control" id="stockProduk" name="stockProduk" placeholder="Masukkan stock produk">
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-dark"><i class="fa fa-check-square-o"></i> SELESAI</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ISINYA -->

    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2021 | built with <i class="glyphicon glyphicon-heart bg-dark"></i> by Damoza Store</a>.</p>
          </div>
        </div>
      </div>
</footer>

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