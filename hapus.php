<?php
$conn = new mysqli("localhost", "username", "password", "manajemen_produk");

if ($conn->connet_error) {
    die("Koneksi gagal: ". $conn->connect_error);
}
$sql = "INSERT INTO produk(nama_produk, kategori, harga, stok) value('$nama', '$kategori', $harga, $stokn)"
?>