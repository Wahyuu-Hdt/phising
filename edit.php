<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Edit Produk</h2>
    <form>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Nama Produk</label>
        <input type="text" value="Headset Bluetooth" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Kategori</label>
        <input type="text" value="Elektronik" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Harga</label>
        <input type="number" value="250000" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div class="mb-6">
        <label class="block text-sm text-gray-700 mb-1">Stok</label>
        <input type="number" value="15" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div class="flex justify-between">
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
        <a href="index.php" class="text-gray-600 hover:underline self-center">← Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
