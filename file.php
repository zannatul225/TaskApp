<?php
  $conn = mysqli_connect("localhost", "root", "", "task");

  if(isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
      $file = fopen($fileName, "r");

      while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        $sqlInsert = "INSERT INTO info(first_name, last_name, email, state, zip, num) VALUES ('$column[0]','$column[1]','$column[2]','$column[3]','$column[4]','$column[5]');";

        $result = mysqli_query($conn, $sqlInsert);

        if (!empty($result)) {
          echo "CSV Data Imported into the database";
        }
        else{
          echo "Problem in importing csv";
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="">
        <label>Choose CSV file</label>
        <input type="file" name="file" accept= ".csv">
        <button type="submit" name="import">Upload</button>
      </div>
    </form>
  </body>
</html>
