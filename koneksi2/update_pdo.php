<?php
require 'db_connect.php';

$id = 1;
$new_email = 'risal@gmail.com';

$sql = "UPDATE users SET email = :email WHERE id= :id";
$stmt = $pdo->prepare($sql);

$stmt->execute(['email' => $new_email, 'id' => $id]);

echo "Email user berhasil diperbarui!";
?>