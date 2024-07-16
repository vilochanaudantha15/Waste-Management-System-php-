<?php
require 'connectionfetch.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <style>
#img{
    margin-top:-160px;
    margin-left:660px;
}
table {
  border-collapse: collapse;
  width: 96%;
  margin: 2%;
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
  color: white;

}
    </style>
  </head>
  <body>
  <h2 >Incident Report</h2><br><br>
    <table  cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Surname</td>
        <td>address</td>
        <td>tel</td>
        <td>message</td>
        <td>image</td>
        
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM contact_us LEFT JOIN tb_upload ON contact_us.id = tb_upload.id;")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["surname"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["tel"]; ?></td>
        <td><?php echo $row["message"]; ?></td>
        <td><img src="img/<?php echo $row["image"]; ?>" width = 100 title="<?php echo $row['image']; ?>"></td>
        <td>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

  </body>
</html>
