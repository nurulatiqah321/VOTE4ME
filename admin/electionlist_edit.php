<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title_list = $_POST['title_list'];
		$kulliyyah = $_POST['kulliyyah'];
		$remarks = $_POST['remarks'];
		$datetime_start = $_POST['datetime_start'];
        $datetime_end = $_POST['datetime_end'];

		$sql = "UPDATE electionlist SET title_list = '$title_list', kulliyyah = '$kulliyyah',  remarks = '$remarks', datetime_start = '$datetime_start', datetime_end = '$datetime_end' WHERE id = '$id'";
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