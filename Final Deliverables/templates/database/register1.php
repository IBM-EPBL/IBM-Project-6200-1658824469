<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $mobileno = $_POST['mobileno'];

  $conn = new mysqli('localhost','root','','loanprediction');

  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into register(name ,email ,username ,password ,mobileno) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $username, $password, $mobileno);
    $execval = $stmt->execute();
    echo $execval;
    echo "You Have Successfully Registered.";
    //header("Location: home.html?success=$em");
    $stmt->close();
    $conn->close();
  }
?>