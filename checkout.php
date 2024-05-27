<?php
    require "koneksinya.php";
    session_start();

    if (empty($_SESSION['invoice'])) {
        $_SESSION['invoice'] = "#INV".rand(100000,999999);
        $invoice = $_SESSION['invoice'];
    }else{
        $invoice = $_SESSION['invoice'];
    }

    if (isset($_POST['_submit_checkout_'])) {
        $id_invoice = $_POST['id_invoice'];
        $jumlah     = $_POST['jumlah'];
        $total      = $_POST['total'];
        $waktu_transaksi    = date("Y-m-d");
        $nama_pembeli   = $_POST['nama_pembeli'];
        $no_hp          = $_POST['no_hp'];
        $alamat         = $_POST['alamat'];

        $query  = "INSERT INTO penjualan (invoice, jumlah, total, waktu_transaksi, nama_pembeli, no_hp, alamat) VALUES ('$id_invoice', '$jumlah', '$total', '$waktu_transaksi', '$nama_pembeli', '$no_hp', '$alamat')";
        $result = mysqli_query($koneksinya, $query);

        unset($_SESSION['invoice']);
    }else{
        echo "<script>window.location = 'index.php#product'</script>";
        exit();die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - DAMOZA STORE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Playfair+Display&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .cart-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .payment-option {
            margin-top: 20px;
        }

        .btn-checkout {
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 20px;
            margin-right: 10px;
        }

        .thank-you {
            margin-top: 50px;
            text-align: center;
        }

        .form-container {
            display: none;
            margin-top: 50px;
        }

        .btn-pay {
            margin-top: 20px;
        }

        .btn-back-bottom {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow sm fixed-top bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="index.php">DAMOZA STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cart.php">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-5 text-center">
        <h2>Thank you!</h2>
        <h3><?= $nama_pembeli ?></h3>
        <p>Pesanan sudah kami terima, anda akan kami hubungi kembali melalui Nomor HP yang tertera!</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>