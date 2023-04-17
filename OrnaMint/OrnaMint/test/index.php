<!DOCTYPE html>
<html>
  <head>
    <title>Login and Signup</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login-form">
      <h2>Login</h2>
      <form action="login.php" method="post">
        <label for="mail">Mail</label>
        <input type="email" name="mail" id="mail" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="login">Login</button>
      </form>
    </div>

    <div class="signup-form">
      <h2>Signup</h2>
      <form action="signup.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" required>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" required>
        <label for="mail">Mail ID</label>
        <input type="email" name="mail" id="mail" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="confirm-password" id="confirm-password" required>
        <button type="submit" name="signup">Signup</button>
      </form>
    </div>
  </body>
</html>
