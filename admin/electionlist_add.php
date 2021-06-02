<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title_list = $_POST['title_list'];
		$remarks = $_POST['remarks'];
		$datetime_start = $_POST['datetime_start'];
        $datetime_end = $_POST['datetime_end'];
		
		$sql = "INSERT INTO electionlist (title_list, remarks, datetime_start, datetime_end) VALUES ('$title_list', '$remarks', '$datetime_start', '$datetime_end')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election event added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Please fill out this field';
	}

	header('location: electionlist.php');
?>