<?php
require 'connect_product.php';

try {
    $sql = "SELECT * FROM products";
    $stmt = $pdo->query($sql);

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