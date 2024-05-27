<?php
session_start();

// Mendapatkan ID produk dari permintaan POST
$productId = $_POST['productId'];

// Menambahkan produk ke keranjang
if (!isset($_SESSION['cart'])) {
  // Jika keranjang belum ada, inisialisasi sebagai array kosong
  $_SESSION['cart'] = [];
}

// Tambahkan ID produk ke keranjang
$_SESSION['cart'][] = $productId;

// Berikan tanggapan sukses
$response = [
  'status' => 'success',
  'message' => 'Produk berhasil ditambahkan ke keranjang.'
];
echo json_encode($response);
?>