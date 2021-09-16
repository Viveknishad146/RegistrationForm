<?php
	$user= $_POST['user'];
	$number= $_POST['phonenumber'];
    $email= $_POST['email'];
	$message = $_POST['message'];
	$time_now=mktime(date('h')+5,date('i')+30,date('s'));
	$timestamp = date('d-m-Y H:i', $time_now);
	

	// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userinfo(user, phonenumber, email, message, timestamp) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $user, $number, $email, $message, $timestamp);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message Sent successfully...";
	}
?>