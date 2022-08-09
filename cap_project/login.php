<?php
include "dbconnect.php";
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
// echo $method;
if($method == "POST"){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	if($pass == $cpass){
		$sql = "INSERT INTO `register` (`email`, `password`, `date`) VALUES ('$email', '$pass', current_timestamp())";
		$result = mysqli_query($conn , $sql);

		
	}
	else{
		$showAlert = true;
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Error!</strong> your entry was not submitted successfully! We regret the inconvinience caused!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">×</span>
		</button>
	  </div>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
	<link href="more.php" rel="stylesheet">
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>

	</style>
</head>
<body>
	
	<div class="contact-form">
		<img alt="" class="avatar" src="img/reglogo.png">
		<h2>Register Form</h2>
		<form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="post">
			<p>Email</p><input id="email" name="email" placeholder="Enter Email" type="email">
            <p>Password</p><input id="pass" name="pass" placeholder="Enter Password" type="password">
			<p>Confirm Passwrod</p><input id="cpass" name="cpass" placeholder="Enter Confirm Password" type="password"><?php
	// if($showAlert){
	//  	echo "<p style='color:red;'>Password do not matched..!!</p>";
	//  }
	?> <input type="submit" value="Sign up">
			<p><input type="checkbox">Remember Me</p>
			
			<a href="reg.php">Already Have An Account?</a>
		</form>
	</div>
	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</body>
</html>


