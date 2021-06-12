<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$vname = $_POST['vname']; 
		$voter = $_POST['matricno'];
		$kulliyyah = $_POST['kulliyyah'];
		$election = $_POST['election'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		// $password = $_POST['password'];
		
		//generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO voters (matricno, vname, kulliyyah, election_id, password) VALUES ('$voter', '$vname', '$kulliyyah', '$election', '$password')";
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

	header('location: voters.php');
?>