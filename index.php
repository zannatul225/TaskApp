<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script type="script.js"></script>
    <title>Home</title>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#news">About</a>
      <a href="#contact">Contact</a>
    </div>
    <button onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</button>
    <button onclick="document.getElementById('signup').style.display='block'" style="width:auto;">SignUp</button>

    <!--Login form -->
    <div id="login" class="modal">

      <form class="modal-content animate" action="login_handler.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>

    <!--SignUp form -->
    <div id="signup" class="modal">
      <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="reg_handler.php" method="post">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="uname"><b>User Name</b></label>
          <input type="text" placeholder="Enter User Name" name="uname" required>

          <label for="id"><b>User ID</b></label>
          <input type="text" placeholder="User ID" name="id" required>

          <label for="email"><b>Email ID</b></label>
          <input type="text" placeholder="Email" name="email" required>

          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
