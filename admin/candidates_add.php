<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$cname = $_POST['cname']; 
		$year = $_POST['year'];
		$level = $_POST['level'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO candidates (position_id, cname, year, level, photo, platform) VALUES ('$position', '$cname', '$year', '$level', '$filename', '$platform')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>