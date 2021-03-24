<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cname = $_POST['cname']; 
		$year = $_POST['year'];
		$level = $_POST['level'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];

		$sql = "UPDATE candidates SET cname = '$cname', year = '$year', level = '$level', position_id = '$position', platform = '$platform' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>