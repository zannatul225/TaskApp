<?php
  include_once 'db.php';

  $id = mysqli_real_escape_string($db, $_POST['id']);
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);


  //encrypt password
  $de_pass = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "INSERT INTO user(uname, id, pass, email) VALUES ('$uname', '$id', '$de_pass', 'email');";
  mysqli_query($db, $sql);

  header("location: index.php?user_added_successfully.");
?>
