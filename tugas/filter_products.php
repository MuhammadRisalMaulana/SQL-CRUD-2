<?php
require 'connect_product.php';

// Jika form disubmit, proses input dan tampilkan produk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $min_price = $_POST['min_price'];

    try {
        // SQL untuk memilih produk dengan harga di atas nilai minimum
        $sql = "SELECT * FROM products WHERE price > :min_price";
        $stmt = $pdo->prepare($sql);
        
        // Menjalankan perintah
        $stmt->execute(['min_price' => $min_price]);

        // Menampilkan data dalam tabel HTML
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

<!-- Form untuk input harga minimum -->
<form action="filter_products.php" method="post">
    Minimum Price: <input type="number" name="min_price" step="0.01" required><br>
    <input type="submit" value="Filter Products"> 
</form>
