<?php
require 'connectionfetch.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <style>
         body{
            background-image:url("https://img.freepik.com/free-photo/gradient-navy-blue-digital-grid-wallpaper_53876-104785.jpg");
            background-size:cover;
            font-family: sans-serif;
        }

table {
  border-collapse: collapse;
  width: 96%;
  margin: 2%;
  color:white;
}

th {
  text-align: left;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}

tr:not(:first-child):hover {
  background: rgba(0, 0, 0, 0.1);
}

td {
  line-height: 40px;
  font-weight: 300;
  padding: 0 10px;
}

h2{
  text-align:center;
  color:white;

}
    </style>
  </head>
  <body>
  <h2 >Captain List</h2><br><br>
    <table  cellspacing = 0 cellpadding = 10>
      <tr>
        <td></td>
        <td>id</td>
        <td>Username</td>
        <td>Email</td>
        <td>Phone Number</td>
        
        
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM captain ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        
        <td>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

  </body>
</html>
