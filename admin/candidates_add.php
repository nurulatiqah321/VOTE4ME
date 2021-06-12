<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$matricno = $_POST['matricno']; 
		$cname = $_POST['cname']; 
		$year = $_POST['year'];
		$level = $_POST['level'];
		$position = $_POST['position'];
		$election = $_POST['election'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO candidates (election_id, position_id, matricno, cname, year, level, photo, platform) VALUES ( '$election', '$position', '$matricno', '$cname', '$year', '$level', '$filename', '$platform')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Please fill out this field';
	}

	header('location: candidates.php');
?>