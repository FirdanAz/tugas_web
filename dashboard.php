<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: #f4f6f9;
    }

    .header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .welcome {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .logout-btn {
      display: inline-block;
      padding: 10px 20px;
      background: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .logout-btn:hover {
      background: #c0392b;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>My Dashboard</h1>
  </div>

  <div class="container">
    <p class="welcome">👋 Selamat datang, <strong><?= htmlspecialchars($username) ?></strong>!</p>
    <p>Ini adalah halaman dashboard kamu. Kamu bisa menambahkan fitur lainnya di sini.</p>
    <a class="logout-btn" href="logout.php">Logout</a>
  </div>
</body>
</html>
