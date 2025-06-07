<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">🛍️ Daftar Produk</h1>

    <div class="flex justify-end mb-4">
      <a href="tambah.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded shadow">
        + Tambah Produk
      </a>
    </div>

    <div class="bg-white shadow-md rounded overflow-hidden">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
          <tr>
            <th class="py-3 px-6 text-left">Nama Produk</th>
            <th class="py-3 px-6 text-left">Kategori</th>
            <th class="py-3 px-6 text-left">Harga</th>
            <th class="py-3 px-6 text-left">Stok</th>
            <th class="py-3 px-6 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm font-light">
          <?php
            include 'config.php';
            $sql = mysqli_query(mysql: $conn, query: "SELECT * FROM produk");

            while ($data = mysqli_fetch_assoc(result: $sql)) {
          ?>
          <tr class="border-b hover:bg-gray-100">
            <td class="py-3 px-6 text-left"><?= $data['NIP']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Nama']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Umur']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Jenis_Kelamin']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Departemen']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Jabatan']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Kota_asal']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Tanggal_absensi']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Jam_masuk']?></td>
            <td class="py-3 px-6 text-left"><?= $data['Jam_pulang']?></td>
            <td class="py-3 px-6 text-center">
              <div class="flex item-center justify-center space-x-2">
                <button class="text-blue-500 hover:underline">Edit</button>
                <button class="text-dark hover:underline">Hapus</button>
              </div>
            </td>
          </tr>
          <?php
          };
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
