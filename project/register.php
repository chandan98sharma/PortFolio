<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db =  "project";
//create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
	//check connection
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
$sql = "INSERT INTO users (username, email, password)
VALUES ('newuser','newuser@gmail.com',1234)";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	</head>
<body>
<div class="header">
	<h1>Register, login and Logout user php mysql</h1>
	</div>
	
	<form method="post" action="register.php">
		<table>
			<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
			</tr>
			<td>Password:</td>
			<tr>
			<td><input type="password" name="password" class="textInput"></td>
			</tr>
			<td>Confirm Password:</td>
			<tr>
			<td><input type="submit" name="password2" class="textInput"></td>
			</tr>
			
</html>