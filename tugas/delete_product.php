<?php
require 'connect_product.php';

$id = 3;

try {
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['id' => $id]);

    echo "SUKSES";
} catch (PDOException $e) {
    echo "Gagal menghapus produk: " . $e->getMessage();
}
?>
