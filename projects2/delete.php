<?php
// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = new mysqli("localhost", "root", "", "login");

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM contact_us WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

// Close database connection
$conn->close();
?>