<?php
	$conn = mysqli_connect("localhost", "gbiplesh", "student");
	
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
?>