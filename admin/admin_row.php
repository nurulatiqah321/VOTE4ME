<?php 
	include 'includes/session.php';

	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>