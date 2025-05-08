<!-- login.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <form action="process_login.php" method="POST">
    <table>
      <tr>
        <td colspan="2" class="title">Login</td>
        <?php if (isset($_GET['error'])): ?>
          <p style="color: white;">Username atau password salah!</p>
        <?php endif; ?>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="Enter username" required /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="Enter password" required /></td>
      </tr>
      <tr>
        <td colspan="2"><label><input type="checkbox" name="remember" /> Remember me</label></td>
      </tr>
      <tr>
        <td colspan="2" class="full-row">
          <input type="submit" value="Login" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>