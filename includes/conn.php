<?php
	$conn = new mysqli('localhost', 'root', '', 'vote4me');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>