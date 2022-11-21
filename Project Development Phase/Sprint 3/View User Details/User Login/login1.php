<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$captcha = $_POST['captcha'];
	// Database connection
	$conn = new mysqli('localhost','root','','loanprediction');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userlogin(username, password, captcha) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $password, $captcha);
		$execval = $stmt->execute();
		echo $execval;
		echo "You Have Successfully Logged In";
		$stmt->close();
		$conn->close();
	}
?>