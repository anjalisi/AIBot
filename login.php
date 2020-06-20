<?php
session_start();
require_once "connect.php";
if(isset($_POST['email']) && isset($_POST['pass']) )
{
	$query = "SELECT * FROM users WHERE email = :username AND password = :password";  
	$statement = $pdo->prepare($query);  
	$statement->execute(  
		 array(  
			  'username'=>$_POST["email"],  
			  'password'=>$_POST["pass"]  
		 )  
	);  
	$count = $statement->rowCount();  
	if($count > 0)  
	{  
		 $_SESSION["userid"] = $_POST["email"];  
		 header("Location:dashboard-applicant.php");  
		 return;
	}  
	else  
	{  
		$_SESSION['error'] = "Invalid Username or Password";
        header("Location: login.php");
        return;  
	}  
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login-Applicant</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto+Mono:wght@700&family=Roboto+Slab&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<link rel="stylesheet" type="text/css" href="css/login-reg.css">
</head>
<body>
	<!-- Menu Bar -->
<div class="navbar container-fluid">
	<a href="freelancer_login.php" role="button" class="btn btn-lg btn1">
		LOGIN 
	</a>
	<a href="registration.php" role="button" class="btn btn-lg">
		REGISTER
	</a>
	<a href="index.php" id="logo">AIBot</a>
</div>
<div class="col-sm-2">
		
</div>
<div class="col-sm-8 card">
	<center><h2>LOGIN</h2></center><br>
	<center>
	<?php
	if(isset($_SESSION['error']))
	{
		echo ("<p style='color:red;'>".htmlentities($_SESSION['error'])."</p>\n");
		unset($_SESSION['error']);
	}
	?></center>
	<div class="col-sm-2">
	</div>
	<div class="col-sm-10">
		<form method="post">
			<p>Email  </p>
			<input class="text-input" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Email ID" required />
			<br><br>
			<p>Password</p>
			<input class="text-input" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required />
  			<br><br><br>
  			<input name="submit" type="submit" class="submit" value="LOGIN"><br><br>	
		</form>
	</div>		
</div>
</body>
</html>