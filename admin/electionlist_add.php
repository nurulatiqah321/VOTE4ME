<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title_list = $_POST['title_list'];
		$remarks = $_POST['remarks'];
		$datetime_start = $_POST['datetime_start'];
        $datetime_end = $_POST['datetime_end'];

		$sql = "SELECT * FROM electionlist ORDER BY priority DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO electionlist (title_list, remarks, datetime_start, datetime_end, priority) VALUES ('$title_list', '$remarks', '$datetime_start', '$datetime_end', '$priority')";
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