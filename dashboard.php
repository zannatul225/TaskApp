<?php
include_once 'db.php';

session_start();
if(isset($_SESSION['uname'])){
  $uname= $_SESSION['uname'];
}
  else {
    header("location: index.php");
  }
$sql = "SELECT * FROM user;";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script type="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>CRUD Task</h2>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php">User List</a></li>
          <li><a href="file.php">Upload File</a></li>
          <li><a href="#section3">Logout</a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-sm-9">
        <div class="well">
          <h2>HTML Table</h2>

          <table>
            <tr>
              <th>Name</th>
              <th>ID</th>
              <th>Email</th>
              <th>Status</th>

            </tr>
            <?php
              while($row = mysqli_fetch_array($res)){
              echo "<tr>";
              echo "<td>" . $row['uname'] . "</td>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td> Active </td>";
              echo "</tr>";
          }
          ?>
          </table>
          <button onclick="document.getElementById('edit').style.display='block'" style="width:auto;">Edit</a></button>
          <button onclick="document.getElementById('delete').style.display='block'" style="width:auto;">Delete</a></button>
        </div>
      </div>
      <!--Edit info -->
      <div id="edit" class="modal">
        <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="update.php" method="post">
          <div class="container">
            <h1>Edit</h1>
            <p>Please fill in this form to edit an user.</p>
            <hr>
            <label for="uname"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="uname" required>

            <label for="id"><b>User ID</b></label>
            <input type="text" placeholder="User ID" name="id" required>

            <label for="email"><b>Email ID</b></label>
            <input type="text" placeholder="Email" name="email" required>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Edit</button>
            </div>
          </div>
        </form>
      </div>
      <!--Delete info -->
      <div id="delete" class="modal">
        <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="delete.php" method="post">
          <div class="container">
            <h1>Delete User</h1>
            <p>Please fill in this form to delete user</p>
            <hr>
            <label for="uname"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="uname" required>

            <label for="id"><b>User ID</b></label>
            <input type="text" placeholder="User ID" name="id" required>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Delete</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>


</body>
</html>
