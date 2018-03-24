<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adminEmail = "admin@gmail.com";
	
	// $email = $DBcon->real_escape_string($email);
	// $password = $DBcon->real_escape_string($password);
	
		$query = $DBcon->query("SELECT 	HospitalId, Email, Password FROM hospital WHERE Email='$email'");

		$row=$query->fetch_array();
		
		$count = $query->num_rows; 
	
		 echo $password."<br>";
		 echo $row['Password']."<br>";

		// if( password_verify($password, $row['Password'])){
		// 	echo "matched";
	 	//  }
	    // else
		//   echo "not matched";


	if (password_verify($password, $row['Password']) && $count==1 && $row['Email']!=$adminEmail){
		$_SESSION['userSession'] = $row['HospitalId'];
		header("Location: home.php");
	} 


	 if (password_verify($password, $row['Password']) && $count==1 && $row['Email']===$adminEmail){
		$_SESSION['userSession'] = $row['HospitalId'];
		header("Location: admin.php");
	} 

	else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap-lumen.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
	<link rel="stylesheet" href="style.css" type="text/css" />

	<style type="text/css">

		.label{
			font-size: 14px;
		}

		h1 {
    	text-align: center;
		}


	</style>
     


</head>
<body  style="background-color: #F4E8FF">
	 <nav class="navbar navbar-inverse ">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">SHF</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	    </ul>
	  </div>
	</nav>

	<br>
	<h1>Login</h1>
	<br>
	<div class="container col-md-offset-4">
		<div class="form col-xs-4">
			<form method="post" id="login">
				  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
			<div class="form-group ">

				<label for="email" class="label label-info">email</label>
				<input type="text" required="" name="email" class="form-control" msg="please enter your email" id="username">
				<!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
			</div>

			<div class="form-group">
				<label for="password" class="label label-info">password</label>
				<input type="password" required="" name="password" msg="please enter a password" class="form-control" id="password">
				<!-- <label for="password" id="passwordError" class="label label-warning"></label>
			</div> -->
			<br>

	<div class="form-group">
		<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-secondary">Reset</button>
			</div>


		</form>
		</div><br>
      <p>no account ? sign up here <b><a href="register.php" style="">Sign Up</a></b></p>



	</div>
</body>
</html>