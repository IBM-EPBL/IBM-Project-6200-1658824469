<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$message = $_POST['message'];

	$conn = new mysqli('localhost','root','','loanprediction');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(username, email, phonenumber, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $username, $email, $phonenumber, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message Sent successfully.";
		$stmt->close();
		$conn->close();
	}
?>