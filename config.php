<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'manajemen_produk';

$conn = mysqli_connect(hostname: $host, username: $user, password: $pass, database: $database);

if ($conn) {
    echo "Berhasil Menyambung ke database";
}
?>