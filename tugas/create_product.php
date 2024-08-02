<?php
require 'connect_product.php';

$name = 'Laptop';
$price = 15000.00;

// SQL untuk menambahkan data ke tabel 'products'
$sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
$stmt = $pdo->prepare($sql);

// Menjalankan perintah
$stmt->execute(['name' => $name, 'price' => $price]);

echo "Produk berhasil ditambahkan!";
?>