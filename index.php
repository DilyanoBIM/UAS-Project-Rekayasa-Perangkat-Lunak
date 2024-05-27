<?php
    require "koneksinya.php";

    $query_produk = mysqli_query($koneksinya, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Playfair+Display&display=swap" rel="stylesheet" />
    <title>DAMOZA STORE</title>
</head>
<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow sm fixed-top bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="index.php">DAMOZA STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron bg-secondary">
        <!-- <div class="row justify-content-center">
            <div class="col-4">
                <figure class="figure">
                    <img src="img/2.jpg" class="figure-img img-fluid rounded " alt="..." />
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div>
            <div class="col-4">
                <h1>Welcome To Damoza Store</h1>
                <br />
                <br />
                <p>Disini kami menjual berbagai macam Mainan Anak , jika ingin melihat product klik dibawah ini</p>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="#product">Product</a>
                </button>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg> -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <figure class="figure">
                                <img src="img/2.jpg" class="figure-img img-fluid rounded " alt="..." />
                                <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-4">
                            <h1>Welcome To Damoza Store</h1>
                            <br />
                            <br />
                            <p>Disini kami menjual berbagai macam Mainan Anak , jika ingin melihat product klik dibawah ini</p>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="#product">Product</a>
                            </button>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#ffffff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                    </svg>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <figure class="figure">
                                <img src="img/2.jpg" class="figure-img img-fluid rounded " alt="..." />
                                <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-4">
                            <h1>Welcome To Damoza Store</h1>
                            <br />
                            <br />
                            <p>Disini kami menjual berbagai macam Mainan Anak , jika ingin melihat product klik dibawah ini</p>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="#product">Product</a>
                            </button>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#ffffff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                    </svg>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <figure class="figure">
                                <img src="img/2.jpg" class="figure-img img-fluid rounded " alt="..." />
                                <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-4">
                            <h1>Welcome To Damoza Store</h1>
                            <br />
                            <br />
                            <p>Disini kami menjual berbagai macam Mainan Anak , jika ingin melihat product klik dibawah ini</p>
                            <button type="button" class="btn btn-outline-secondary">
                                <a href="#product">Product</a>
                            </button>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#ffffff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- About  -->
    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2 class="mb-4">About Us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum bibendum nulla, eget consectetur urna. Nullam euismod, felis sit amet volutpat aliquet, nisi odio hendrerit urna, id aliquam ligula mi id massa.</p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir About -->
    <!-- Product -->
    <section id="product" class="bg-secondary">
        <div class="container bg-secondary pt-5">
            <div class="row text-center">
                <div class="col">
                    <h2>Product</h2>
                </div>
            </div>
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php while ($result = mysqli_fetch_assoc($query_produk)){ ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/catalog/bedak.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title"><?= $result['nama'] ?></h5>
                                    <p class="card-text">Stock Barang : <?php
                            if ($result['stock']<=0) {
                                echo "<b class='text-danger'>Habis</b>";
                            }elseif ($result['stock']>0) {
                                echo $result['stock'];
                            }
                        ?></p>
                                </div>
                                <div class="card-footer">
                                    <h3 class="text-muted my-2"><?= "Rp".$result['harga'] ?></h3>
                                    <br>

                                    <!-- Tombol Tambahkan ke Keranjang -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cart<?= $result['id_produk'] ?>">
                                        Tambahkan ke Keranjang
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="cart<?= $result['id_produk'] ?>" tabindex="-1" aria-labelledby="cartLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="cart.php" method="POST" class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="cartLabel">Masukkan jumlah pembelian</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="number" class="form-control" name="jumlah" min="1" max="<?= $result['stock'] ?>" required>
                                                    <input type="hidden" name="id_produk" value="<?= $result['id_produk'] ?>">
                                                    <input type="hidden" name="harga" value="<?= $result['harga'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="_submit_cart_">Tambah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Tombol Beli -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beli<?= $result['id_produk'] ?>">
                                        Beli
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="beli<?= $result['id_produk'] ?>" tabindex="-1" aria-labelledby="beliLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="cart.php" method="POST" class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="beliLabel">Masukkan jumlah pembelian</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="number" class="form-control" name="jumlah" min="1" max="<?= $result['stock'] ?>" required>
                                                    <input type="hidden" name="id_produk" value="<?= $result['id_produk'] ?>">
                                                    <input type="hidden" name="harga" value="<?= $result['harga'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" name="_submit_beli_">Beli</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,165.3C384,181,480,235,576,234.7C672,235,768,181,864,165.3C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Projects -->
    <!-- Contact -->
    <!-- Akhir Contact -->
    <!-- Footer -->
    <footer class="bg-secondary">
        <div class="container text-center bg-secondary">
            <div class="row">
                <div class="col-sm-12 bg-secondary">
                    <p>&copy; copyright 2023 | built with <i class="glyphicon glyphicon-heart"></i> by 4TIB</a>. </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>