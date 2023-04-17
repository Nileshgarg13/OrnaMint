<?php
if (isset($_POST['signup'])) {
  //connect to database
  $db = mysqli_connect('127.0.0.1', 'root', '', 'mydb');

  //get form data
  $firstname = mysqli_real_escape_string($db, $_POST['first_name']);
  $lastname = mysqli_real_escape_string($db, $_POST['last_name']);
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

  //check if password and confirm password match
  if ($password != $confirm_password) {
    echo "Passwords do not match";
    exit();
  }

    //check if email is already in use
    $sql = "SELECT * FROM users WHERE mail='$mail'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo "Email already in use";
      exit();
    }

  //encrypt password
  $password = md5($password);

  //query database
  $sql = "INSERT INTO users (first_name, last_name, mail, password) VALUES ('$firstname', '$lastname', '$mail', '$password')";
  mysqli_query($db, $sql);

  echo "Signup successful";
}
?>
