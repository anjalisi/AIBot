<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['recid']))
{
	header('Location:login-recruiter.php');
	return;
}
$email=$_SESSION['recid'];
$stmt= $pdo->query("SELECT comp_id FROM recruiter where email='$email'");
$rows= $stmt->fetch(PDO::FETCH_ASSOC);
$user_id= htmlentities($rows['comp_id']);

$stmt1= $pdo->query("SELECT * FROM recruiter where comp_id='$user_id'");
$rows1= $stmt1->fetch(PDO::FETCH_ASSOC);

$fname= htmlentities($rows1['company']);
$lname= htmlentities($rows1['email']);
$dob=htmlentities($rows1['website']);
$linkedin= htmlentities($rows1['profile']);
$resume=htmlentities($rows1['linkedin']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile-Applicant</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto+Mono:wght@700&family=Roboto+Slab&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
<div class="sidebar">
	  <a class="first" href="dashboard-recruiter.php">DASHBOARD</a>
	  <a href="profile-recruiter.php" class="active">PROFILE</a>
	  <a href="#news">CHATBOT</a>
	  <a href="#contact">ABOUT</a>
	  <a href="logout-recruiter.php">LOGOUT</a>
	</div>
<div class="content">
	<nav class="navbar container-fluid">
		<ul class="navbar-nav" id="navbar-id">
			<li><i class="fa fa-user-circle-o icon"></i><a href="#" id="username" style="font-family: 'Roboto Mono', monospace;">Hi! <?php echo $_SESSION["recid"]; ?></a></li>
		</ul>
	</nav>
	<div class="container-fluid">
		<center><img src="images/research.png"></center>
		<div class="row"><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<p>Company</p>
			</div>
			<div class="col-sm-6">
				<p><?=$fname ?></p>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<p>Email</p>
			</div>
			<div class="col-sm-6">
				<p><?=$lname?></p>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<p>Website</p>
			</div>
			<div class="col-sm-6">
				<p><?=$dob ?></p>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<p>Profile</p>
			</div>
			<div class="col-sm-6">
				<p><?=$linkedin ?></p>
			</div>
		</div>
		<div class="row"><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<p>LinkedIn</p>
			</div>
			<div class="col-sm-6">
				<p><?=$resume ?></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>