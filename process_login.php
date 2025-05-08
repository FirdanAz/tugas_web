<?php
session_start();

// Data user (dummy)
$valid_username = 'admin';
$valid_password = '12345';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // atau halaman sukses lainnya
        exit;
    } else {
        // Redirect balik ke login dengan error
        header("Location: index.php?error=1");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
