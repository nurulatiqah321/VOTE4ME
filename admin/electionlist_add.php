<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$remarks = $_POST['remarks'];
		$datetime_start = $_POST['datetime_start'];
        $datetime_end = $_POST['datetime_end'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);
		}

		$sql = "INSERT INTO electionlist (title, remarks, datetime_start, datetime_end, photo) VALUES ('$title', '$remarks', '$datetime_start', '$datetime_end', '$filename')";
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