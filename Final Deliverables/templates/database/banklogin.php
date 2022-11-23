<?php
	$BankUserName = $_POST['BankUserName'];
	$bankemail = $_POST['bankemail'];
	$Password = $_POST['Password'];
	
	$conn = new mysqli('localhost','root','','loanprediction');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into banklogin(BankUserName ,bankemail, Password) values(?, ?, ?)");
		$stmt->bind_param("sss", $BankUserName, $bankemail, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "You Have Successfully Logged In.";
		//header("Location: home.html?success=$em");
		$stmt->close();
		$conn->close();
	}
?>