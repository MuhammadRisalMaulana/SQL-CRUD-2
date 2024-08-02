<?php
require 'connect_product.php';

$name = $_POST['name'];
$price = $_POST['price'];

try {
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['name' => $name, 'price' => $price]);

    echo "Produk berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Gagal menambahkan produk: " . $e->getMessage();
}
?>