<?php
  include_once 'db.php';

  session_start();

  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  $sql = "SELECT uname, id, pass FROM user WHERE uname = '$uname';";


  $res = mysqli_query($db,$sql);
  $check = mysqli_num_rows($res);

  if ($check > 0) {
    $get = mysqli_fetch_assoc($res);

    if($uname === $get['uname'] && $pass === $get['pass'])
    {

        $_SESSION['uname'] = $get['id'];

        header("location: dashboard.php");
    }
    else {
      header("location: index.php");
    }
  }
  else {
      header("location: index.php");
  }
 ?>
