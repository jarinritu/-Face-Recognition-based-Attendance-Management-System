<?php
	$f_name = $_POST['f_name'];
	$m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$session = $_POST['session'];
    $semester = $_POST['semester'];
    $g_email = $_POST['g_email'];
	$phone = $_POST['phone'];
    
 

    $conn = new mysqli('localhost','root','','attendance');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into stdreg(f_name, m_name, l_name, roll, email, password, session, semester, g_email, phone) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $f_name, $m_name, $l_name, $roll, $email, $password, $session, $semester,  $g_email,$phone );
		$execval = $stmt->execute();
        echo $execval;
        $sql = "INSERT INTO stdreg(f_name, m_name, l_name, roll, email, password, session, semester, g_email, phone) VALUES(
			'$f_name', '$m_name', '$l_name', '$roll', '$email', '$password', '$session', '$semester', '$g_email', '$phone')";
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>