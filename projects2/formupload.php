<?php
// Establish a connection to the MySQL database server
$conn = mysqli_connect("localhost", "root", "", "login");


// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form fields
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// Insert data into the MySQL database
$sql = "INSERT INTO contact_us (name,surname, address,tel, message) VALUES ('$name','$surname', '$address', '$tel','$message')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
    header("location:index (1).php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// Close the MySQL database connection
mysqli_close($conn);
?>
