<?php
include 'config.php';
if (isset($_POST["tambah"])) {
  $nama = $_POST["nama"];
  $kategori = $_POST["kategori"];
  $harga = $_POST["harga"];
  $stok = $_POST["stok"];

  mysqli_query(mysql: $conn, query: "INSERT INTO produk(nama_produk, kategori, harga, stok) values('$nama', '$kategori', $harga, $stok)");
  header(header: "Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Tambah Produk</h2>
    <form method="post">
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Nama Produk</label>
        <input name="nama" type="text" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: Headset Bluetooth">
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Kategori</label>
        <input name="kategori" type="text" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: Elektronik">
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Harga</label>
        <input name="harga" type="number" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: 250000">
      </div>
      <div class="mb-6">
        <label class="block text-sm text-gray-700 mb-1">Stok</label>
        <input name="stok" type="number" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: 15">
      </div>
      <div class="flex justify-between">
        <button name="tambah" type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
        <a href="index.php" class="text-gray-600 hover:underline self-center">← Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
