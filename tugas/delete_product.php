<?php
require 'connect_product.php';

// ID produk yang akan dihapus
$id = 3;

try {
    // SQL untuk menghapus produk berdasarkan ID
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Menjalankan perintah
    $stmt->execute(['id' => $id]);

    echo "SUKSES";
} catch (PDOException $e) {
    echo "Gagal menghapus produk: " . $e->getMessage();
}
?>
