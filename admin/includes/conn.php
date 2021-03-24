<?php
	$conn = new mysqli('localhost', 'root', 'xhqxHVzH', 'vote4me');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>