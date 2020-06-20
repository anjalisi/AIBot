<?php
session_start();
require_once "connect.php";

if(isset($_POST['email']) && isset($_POST['firstn']) && isset($_POST['pass']))
{
	unset($_SESSION['userid']);
	$sql_u= "select * from users where email=:email";
	$stmt1=$pdo->prepare($sql_u);
	$stmt1->execute(array(
		':email' => $_POST['email']
	));
	$count= $stmt1->rowCount();  
	if($count > 0)  
	{  
		$_SESSION['error'] = "Seems Like the User Already Exists";
        header("Location: registration.php");
        return; 
	}  
	if(strcmp($_POST['pass'], $_POST['repass'])==0){
	$sql="INSERT INTO users(firstn,lastn, email, dob,linkedin,resume,password)
	 values(:first,:last, :email,:dob,:link,:resume,:pass)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
		':first' => $_POST['firstn'],
		':last' => $_POST['lastn'],
		':email' => $_POST['email'],
		':dob' => $_POST['dob'],
		':link' => $_POST['link'],
		':resume' => $_POST['resume'],
		':pass' => $_POST['pass'],
	));
	$_SESSION['success'] = 'Record Added';
	$_SESSION['userid'] = $_POST['email'];
	header("Location:dashboard-applicant.php");
	return;
	}
	else if(strcmp($_POST['pass'], $_POST['repass'])!=0)
	{
		$_SESSION['error'] = "Passwords Did Not Match";
        header("Location: registration.php");
        return;
	}
	else
	{
		$_SESSION['error'] = "Seems Like the User Already Exists";
        header("Location: registration.php");
        return;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	<a href="login.php" role="button" class="btn btn-lg btn1">
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
		<center><h2>REGISTRATION</h2></center><br>
		<center>
		<?php
		if(isset($_SESSION['error']))
		{
			echo ("<h1 style='color:red;'>".htmlentities($_SESSION['error'])."</h1>\n");
			unset($_SESSION['error']);
		}
		?></center>
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-10">
		<form method="post">
			<p>First Name </p>
			<input class="text-input" type="name" pattern="^[a-zA-Z ][a-zA-Z0-9-_. ]*$" name="firstn" id="name" placeholder="Name" required>
			<br><br>
			
			<p>Last Name </p>
			<input class="text-input" type="name" pattern="^[a-zA-Z ][a-zA-Z0-9-_. ]*$" name="lastn" id="name" placeholder="Name" required>
		<br><br>
			<p>Email  </p>
			<input class="text-input" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Email ID" required />
			<br><br>
			<p>DOB </p>
			<input class="text-input" type="date" pattern="^[a-zA-Z ][a-zA-Z0-9-_. ]*$" name="dob" id="dob" placeholder="Name" required>
			<br><br>
			<p>LinkedIn </p>
			<input class="text-input" type="name" name="link" id="link" placeholder="Profile URL(if any)" />
			<br><br>
			<p>Resume </p>
			<input class="text-input" type="name" name="resume" id="resume" placeholder="Google Drive URL" required>
			<br><Br>
			<p>Password</p>
			<input class="text-input" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required />
  			<br><br>
  			<p>Re-Type Password</p>
  			<input class="text-input" type="password" name="repass" placeholder="Password Match" required /><br><br><br><br>
  			<input name="submit" type="submit" class="submit" value="REGISTER">
		</form><br><br><br>
		</div>
		<br><br>
	</div>
	<div>
	</div>
</body>
</html>