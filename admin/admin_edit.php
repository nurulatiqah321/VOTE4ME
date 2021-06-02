<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$username = $_POST['username'];
		$firstname = $_POST['firstname']; 
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$roles = $_POST['roles'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username = $username";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE admin SET username = '$username', firstname = '$firstname', lastname = '$lastname', email = '$email', roles = '$roles', password = '$password' WHERE username = '$username'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Admin updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: admin.php');

?>