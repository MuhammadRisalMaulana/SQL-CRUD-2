<?php
require 'connect_product.php';

$id = 1;
$new_price = 17500.00;

try {
    $sql = "UPDATE products SET price = :price WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['price' => $new_price, 'id' => $id]);

    echo "SUKSES";
} catch (PDOException $e) {
    echo "Gagal memperbarui harga produk: " . $e->getMessage();
}
?>