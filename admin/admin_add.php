<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$username = $_POST['username']; 
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$roles = $_POST['roles'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

		//generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO admin (username, password, firstname, lastname, email, roles) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$roles')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: admin.php');
?>