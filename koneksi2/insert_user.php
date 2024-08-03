<?php
require 'connect_product.php';

$username = $_POST['username'];
$email = $_POST['email'];

    $sql = "INSERT INTO products (username, email) VALUES (:username, :email)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    echo "User berhasil ditambahkan!";
?>
