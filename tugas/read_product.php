<?php
require 'connect_product.php';

try {
    // SQL untuk memilih semua data dari tabel 'products'
    $sql = "SELECT * FROM products";
    $stmt = $pdo->query($sql);

    // Menampilkan data dalam tabel HTML
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['price']) . "</td>
              </tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Gagal membaca produk: " . $e->getMessage();
}
?>