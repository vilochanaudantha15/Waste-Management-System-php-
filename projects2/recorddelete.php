<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "login");

// Retrieve the ID of the record to delete
$id = $_POST['id'];

// Execute the DELETE query
$query = "DELETE FROM contact_us WHERE id = '$id'";
$query = "DELETE FROM tb_upload WHERE id = '$id'";
mysqli_query($conn, $query);

// Close the database connection
mysqli_close($conn);

// Redirect the user back to the original page
header("Location: indexfetch (2).php");
exit;
?>

