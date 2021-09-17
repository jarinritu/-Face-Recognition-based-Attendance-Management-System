<?php
	$user = $_POST['user'];
	$id = $_POST['id'];
    $email = $_POST['email'];
    $gemail = $_POST['gemail'];
    $session = $_POST['session'];
	$semester = $_POST['semester'];
	$Password = $_POST['Password'];

	// Database connection
	$conn = new mysqli('localhost','root','','attendance');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into stdsignup(user, id, email, gemail, session, semester, Password) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $user, $id, $email, $gemail, $session, $semester, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>