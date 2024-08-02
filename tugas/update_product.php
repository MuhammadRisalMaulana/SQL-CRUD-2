<?php
require 'connect_product.php';

// ID produk yang akan diperbarui
$id = 1;
// Harga baru
$new_price = 17500.00;

try {
    // SQL untuk memperbarui harga produk
    $sql = "UPDATE products SET price = :price WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Menjalankan perintah
    $stmt->execute(['price' => $new_price, 'id' => $id]);

    echo "SUKSES";
} catch (PDOException $e) {
    echo "Gagal memperbarui harga produk: " . $e->getMessage();
}
?>