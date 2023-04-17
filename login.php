<?php
session_start();
if (isset($_POST['login'])) {
  //connect to database
  $db = mysqli_connect('127.0.0.1', 'root', '', 'mydb');

  //get form data
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  //encrypt password
  $password = md5($password);

  //query database
  $sql = "SELECT * FROM users WHERE mail='$mail' AND password='$password'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['mail'] = $mail;
    header('location: dashboard.php');
  } else {
    echo "Invalid mail or password";
  }
}
?>
