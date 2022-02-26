<?php
include_once 'db.php';
session_start();
$allot= "Allocated";
$null= "NULL";


$uname = mysqli_real_escape_string($db, $_POST['uname']);
$id = mysqli_real_escape_string($db, $_POST['id']);

$sql = "DELETE FROM user WHERE id = '$id';";
mysqli_query($db, $sql);
header("location: dashboard.php");
