<?php
	$servername = "localhost";
	$username = "newuser";
	$password = "";
	$db =  "project";
//create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
if($password == $password2) {
			//create user
			$password = md5($password); //hash password before storing for security purpose
$sql = "INSERT INTO users(username, email, password)
VALUES ('newuser', 'newuser@gmail.com','1234')";
mysqli_query($db,$sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
		header("location: home.php"); //redirect to home page
}
		else{
			$_SESSION['message'] = "The two passwords do not match";
		}
	
?>




<!DOCTYPE html>
<html>
<head>
	<title>Register, login and Logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="header">
	<h1>Register, login and Logout user php mysql</h1>
	</div>
	
	<form method="post" action="register1.php">
		<table>
			<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
			</tr><tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
			</tr><tr>
			<td>Password:</td> 
			<td><input type="password" name="password" class="textInput"></td>
			</tr><tr>
			<td>Password again:
			</td>
			<td><input type="password" name="password2" class="textInput"></td>
			</tr>
			<tr><td>
			</td>
			<td><input type="submit" name="register_btn" value="Register">
			</td>
			</tr>
			</table>
		
				</form>
				</body>
			
</html>