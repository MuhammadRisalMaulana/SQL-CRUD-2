<?php
include 'db.php';
$sql = "SELECT id, name, email FROM users";
$stmt = $pdo->query($sql);
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["name"] . " - Email: " . $row["email"] .
            "<br>";
    }
} else {
    echo "0 results";
}
