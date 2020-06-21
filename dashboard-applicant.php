<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
	return;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard- Applicant</title>
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
	  <a class="active first" href="dashboard-applicant.php">DASHBOARD</a>
	  <a href="profile.php">PROFILE</a>
	  <a href="chatbot.php">CHATBOT</a>
	  <a href="faq.php">FAQ</a>
	  <a href="logout.php">LOGOUT</a>
	</div>
<div class="content">
	<nav class="navbar container-fluid">
		<ul class="navbar-nav" id="navbar-id">
			<li><i class="fa fa-user-circle-o icon"></i><a href="#" id="username" style="font-family: 'Roboto Mono', monospace;">Hi! <?php echo $_SESSION["userid"]; ?></a></li>
		</ul>
	</nav>
</div>
<div class="content container-fluid">
	<center><h1>INTERVIEW <b>GUIDER</b></h1><br>
	</center>
	<center><p>Hi, we will be guiding you through your selection & interview process.</p></center><br>
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="card col-sm-6">
			<h2>
				<center>Step 1: TAKING THE PSYCHOMETRIC TEST</center>
			</h2>
			<center><p>To make the recruitement process more transparent and fair, we have included an Intelligent ChatBot to help you out.</p>
			<p>For moving on further to the interview stage, you have to qualify the test.</p>
			<p>The "CHATBOT" option is present on the Menu.</p><p> Click on that to proceed.</p><br></center>
		</div>
		
	</div>
	<br><br>
	<div class="row">
		<div class=" card col-sm-5">
			<h2>
				<center>Step 2: RESULT GENERATION</center>
			</h2>
			<center><p>The results will be provided as soon as you "SUBMIT" the test.</p>
			<p>Note: You can only take the test once for every job profile. If you FAIL, you can not proceed to the interview stage.</p><br></center>
		</div>
		<div class="card col-sm-5">
			<h2>
				<center>Step 3: SCHEDULING INTERVIEW</center>
			</h2>
			<center><p>Once you pass the test, your details would be provided to the recruiter. </p>
			<p>The recruiter would then provide an interview date, which would be immediately notified via your chatbot.</p>
			<br>
			</center>
		</div>
	</div>
	<center><p>
		<br><br>So what are you waiting for? Hop right into it.
	</p></center><br>
</div>
</body>
</html>