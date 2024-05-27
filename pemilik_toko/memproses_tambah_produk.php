
<?php
require '../koneksinya.php'; // Memanggil koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir
    $namaProduk = $_POST['namaProduk'];
    $hargaProduk = $_POST['hargaProduk'];
    $stockProduk = $_POST['stockProduk'];

    // Query untuk memasukkan data produk baru ke dalam database
    $query = "INSERT INTO produk (nama, harga, stock) VALUES ('$namaProduk', '$hargaProduk', '$stockProduk')";
    $result = mysqli_query($koneksinya, $query);

    if ($result) {
        echo "Produk berhasil ditambahkan.";
        header('location:daftar-produk.php');
    } else {
        echo "Terjadi kesalahan dalam menambahkan produk.";
    }
}
?>
