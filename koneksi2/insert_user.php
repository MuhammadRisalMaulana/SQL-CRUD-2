<?php
require 'connect_product.php';

// Ambil data dari form
$name = $_POST['name'];
$price = $_POST['price'];

try {
    // Query SQL dengan placeholder
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);

    // Binding parameter sebelum execute
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);

    // Eksekusi statement
    $stmt->execute();

    echo "Produk berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Gagal menambahkan produk: " . $e->getMessage();
}
?>
