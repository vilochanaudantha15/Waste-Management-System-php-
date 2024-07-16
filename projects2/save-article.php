<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<h1>Welcome to our website</h1>

	<?php
	// Connect to the database

	$conn = mysqli_connect("localhost", "root", "", "login");

	// Retrieve the latest article from the database
	$query = "SELECT * FROM articlesss ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $query);

	// Display the article on the homepage
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		echo "<h2>" . $row['title'] . "</h2>";
		echo "<p>" . $row['content'] . "</p>";
		
	} else {
		echo "<p>No articles found.</p>";
	}

	mysqli_close($conn);
	?>
</body>
</html>