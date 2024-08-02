<?php
require 'connect_product.php';

// Data yang akan dimasukkan
$name = $_POST['name'];
$price = $_POST['price'];

try {
    // SQL untuk memasukkan data ke tabel 'products'
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);

    // Menjalankan perintah
    $stmt->execute(['name' => $name, 'price' => $price]);

    echo "Produk berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Gagal menambahkan produk: " . $e->getMessage();
}
?>