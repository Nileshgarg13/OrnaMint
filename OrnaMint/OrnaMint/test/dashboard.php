<?php
session_start();
if (!isset($_SESSION['mail'])) {
  header('location: index.php');
}

$mail = $_SESSION['mail'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
  </head>
  <body>
    <h1>Welcome <?php echo $mail; ?></h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
  </body>
</html>
