<?php

include "dbconnect.php";
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
// echo $method;
if($method == "POST"){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$sql = "SELECT * FROM `register` WHERE `email`='$email'";
	$result = mysqli_query($conn , $sql);
	$num = mysqli_num_rows($result);
	$_SESSION['success'] = "";
	if($num == 1){
		while($row = mysqli_fetch_assoc($result)){
			if(password_verify($pass , $row['password'])){
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['email'] = $email;

				$_SESSION['success'] = "You have  successfully logged in!";
			}
			header("location: /capstone project/index.php");
		}
	}
	header("location: /capstone project/index.php");


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="reg.css" rel="stylesheet">
</head>
<body>
	<div class="contact-form">
		<img alt="" class="avatar" src="img/reglogo.png">
		<h2>Login </h2>
		<form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="post">
			<p>Email</p><input id="email" name="email" placeholder="Enter Email" type="email">
			<p>Passwrod</p><input id="password" name="password" placeholder="Enter Password" type="password"> <input type="submit" value="Sign In">
			<p><input type="checkbox">Remember Me</p>
			<a href="login.php">Do Not Have Account?</a>
		</form>
	</div>
	
</body>
</html>