<?php
require 'connect_product.php';

try {
    
    $sql = "
    CREATE TABLE IF NOT EXISTS products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        price FLOAT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";
    
    $pdo->exec($sql);
    echo "Tabel 'products' berhasil dibuat!";
} catch (PDOException $e) {
    echo "Gagal membuat tabel: " . $e->getMessage();
}
?>
