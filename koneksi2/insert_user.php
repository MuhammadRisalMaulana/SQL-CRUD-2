<?php
require 'connect_product.php';

$name = $_POST['name'];
$price = $_POST['price'];

try {
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);

    $stmt->execute();

    echo "Produk berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Gagal menambahkan produk: " . $e->getMessage();
}
?>
