<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$title = $_POST['title'];
		$remarks = $_POST['remarks'];
		$datetime_start = $_POST['datetime_start'];
        $datetime_end = $_POST['datetime_end'];

		$sql = "UPDATE electionlist SET title = '$title',  remarks = '$remarks', datetime_start = '$datetime_start', datetime_end = '$datetime_end'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election event updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: electionlist.php');

?>