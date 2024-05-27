<?php
    require "koneksinya.php";
    session_start();

    if (empty($_SESSION['invoice'])) {
        $_SESSION['invoice'] = "#INV".rand(100000,999999);
        $invoice = $_SESSION['invoice'];
    }else{
        $invoice = $_SESSION['invoice'];
    }

    if (isset($_POST['_submit_cart_'])) {
        $id_produk  = $_POST['id_produk'];
        $harga      = $_POST['harga'];
        $jumlah     = $_POST['jumlah'];
        $total      = $harga*$jumlah;

        $query  = "INSERT INTO cart (invoice, id_produk, jumlah, total) VALUES ('$invoice', '$id_produk', '$jumlah', '$total')";
        $result = mysqli_query($koneksinya, $query);

        echo "<script>window.location = 'index.php#product'</script>";
        exit();die();
    }

    elseif (isset($_POST['_submit_beli_'])) {
        $id_produk  = $_POST['id_produk'];
        $harga      = $_POST['harga'];
        $jumlah     = $_POST['jumlah'];
        $total      = $harga*$jumlah;

        $query  = "INSERT INTO cart (invoice, id_produk, jumlah, total) VALUES ('$invoice', '$id_produk', '$jumlah', '$total')";
        $result = mysqli_query($koneksinya, $query);
    }

    elseif (isset($_POST['_submit_hapus_'])) {
        // Mengambil id produk
        $id_cart    = $_POST['id_cart'];

        $queryDell  = "DELETE FROM cart WHERE id_cart='$id_cart'";
        $resultDell = mysqli_query($koneksinya, $queryDell);
    }

    $query_cart = mysqli_query($koneksinya, "SELECT * FROM cart INNER JOIN produk ON cart.id_produk = produk.id_produk WHERE invoice='$invoice'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - DAMOZA STORE</title>
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
    <div class="container cart-container py-5">
        <h2>Cart <?= $_SESSION['invoice'] ?></h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $QTY        = 0;
                    $TotalHarga = 0;
                    while ($resultCart = mysqli_fetch_assoc($query_cart)){
                ?>
                <tr>
                    <td><?= $resultCart['nama'] ?></td>
                    <td>Rp<?= $resultCart['harga'] ?></td>
                    <td><?= $resultCart['jumlah'] ?></td>
                    <td>Rp<?= $resultCart['total']; ?></td>
                    <td class="text-center">
                        <form action="cart.php" method="POST">
                            <input type="hidden" name="id_cart" value="<?= $resultCart['id_cart'] ?>">
                            <button type="submit" name="_submit_hapus_" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <?php
                        $QTY += $resultCart['jumlah'];
                        $TotalHarga += $resultCart['total'];
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" style="text-align: right;">Total:</th>
                    <td id="totalAmount">Rp<?= $TotalHarga ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <!-- Tombol Chekout -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NextChekout">Next</button>
        <a href="index.php#product" class="btn btn-sm btn-secondary">Back</a>

        <!-- Modal -->
        <div class="modal fade" id="NextChekout" tabindex="-1" aria-labelledby="NextLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="checkout.php" method="POST" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartLabel">Form checkout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_invoice" value="<?= $_SESSION['invoice'] ?>">
                        <input type="hidden" name="jumlah" value="<?= $QTY ?>">
                        <input type="hidden" name="total" value="<?= $TotalHarga ?>">

                        <div class="form-floating my-1">
                            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" placeholder="Cth: " required>
                            <label for="nama_pembeli">Nama Pembeli</label>
                        </div>
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Cth: " required>
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="form-floating my-1">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Cth: " required>
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="_submit_checkout_" class="btn btn-primary btn-checkout">Chekout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>