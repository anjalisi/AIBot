<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['recid']))
{
	header('Location:login-recruiter.php');
	return;
}
$stmt= $pdo->query("SELECT * FROM shortlists");
$rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
$numrows=count($rows);

$stmt1= $pdo->query("SELECT * FROM users");
$rows1= $stmt1->fetchAll(PDO::FETCH_ASSOC);
$numrows1=count($rows1);


$stmt2= $pdo->query("SELECT * FROM shortlists where score>'37'");
$rows2= $stmt2->fetchAll(PDO::FETCH_ASSOC);
$numrows2=count($rows2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard- Recruiter</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto+Mono:wght@700&family=Roboto+Slab&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">	
</head>
	<div class="sidebar">
	  <a class="active first" href="dashboard-recruiter.php">DASHBOARD</a>
	  <a href="shortlist.php">SHORTLISTED</a>
	  <a href="profile-recruiter.php">PROFILE</a>
	  <a href="logout-recruiter.php">LOGOUT</a>
	</div>
<div class="content">
	<nav class="navbar container-fluid">
		<ul class="navbar-nav" id="navbar-id">
			<li><i class="fa fa-user-circle-o icon"></i><a href="#" id="username" style="font-family: 'Roboto Mono', monospace;">Hi! <?php echo $_SESSION["recid"]; ?></a></li>
		</ul>
	</nav>

	<div class="container-fluid">
		<center><h1>Your<b> Dashboard</b></h1></center><br>
		<center>
	<div class="row">
		<div class="card col-sm-10">
			<h2>
				<center>1. How many candidates have taken the test?</center>
			</h2>
			<center><p><?=$numrows1?> applicants have taken your test.</p><br></center>
		</div>
	
	</div>
	<br><br>
	<div class="row">
	
		<div class="card col-sm-10">
			<h2>
				<center>2. How many candidates have been shortlisted?</center>
			</h2>
			<center><p><?=$numrows?> candidates have been shortlisted.</p>
			<p>The list is present under the "Shortlist" tag in the Menu Card.</p>
				<br></center>
		</div>
	
	</div>
	<br><br>
	<div class="row">
	
		<div class="card col-sm-10">
			<h2>
				<center>3. How many candidates have the top scores?</center>
			</h2>
			<center><p><?=$numrows2?> candidates have the top scores.</p>
			<p>A candidate is considered to be a top scorer when they have a score above 37. The list is present under the "Shortlist" tag in the Menu Card.</p>
				<br></center>
		</div>
	
	</div>
	<br><br>
</div>

<body>

</body>
</html>