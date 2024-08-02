<?php
require 'connect_product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $min_price = $_POST['min_price'];

    try {
        $sql = "SELECT * FROM products WHERE price > :min_price";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute(['min_price' => $min_price]);

        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                </tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['price'] . "</td>
                  </tr>";
        }

        echo "</table>";

    } catch (PDOException $e) {
        echo "Gagal mengambil data produk: " . $e->getMessage();
    }
}
?>

<form action="filter_products.php" method="post">
    Minimum Price: <input type="number" name="min_price" step="0.01" required><br>
    <input type="submit" value="Filter Products"> 
</form>
