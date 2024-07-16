<?$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';
$conn = new mysqli("localhost", "root", "", "login");

// Retrieve data from the table
$query = "SELECT name, surname, email, tel, message FROM contact_us";
$result = mysqli_query($conn, $query);

// Display the data in a table
echo "<table>";
echo "<tr><th>Name</th><th>Surname</th><th>Email</th><th>Tel</th><th>Message</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['tel'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>