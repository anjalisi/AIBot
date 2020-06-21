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
	<title>FAQ-Applicant</title>
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
	  <a class="first" href="dashboard-applicant.php">DASHBOARD</a>
	  <a href="profile.php" >PROFILE</a>
	  <a href="chatbot.php">CHATBOT</a>
	  <a href="faq.php" class="active">FAQ</a>
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
	<center><h1>Frequently Asked<b> Questions</b></h1></center><br>
	<center>
	<div class="row">
		<center>
		<div class="card col-sm-10">
			<h2>
				<center>1. Can we apply more than once to a company?</center>
			</h2>
			<center><p>NO. The test can be given only once for each company.
			If you fail the test, you can not apply in that company again.</p><br></center>
		</div>
		</center>
	</div>
	<br><br>
	<div class="row">
		<center>
		<div class="card col-sm-10">
			<h2>
				<center>2. Can an applicant have more than one account?</center>
			</h2>
			<center><p>NO. Only one account is allowed per email id. The web application will not allow you to make multiple accounts with the same email.</p><br></center>
		</div>
		</center>
	</div>
	<br><br>

	<div class="row">
		<center>
		<div class="card col-sm-10">
			<h2>
				<center>3. Can you guarantee there will be no bias?</center>
			</h2>
			<center><p>YES. We guarantee that there will be no bias until the interview is scheduled. Anyone, of any race or gender, can use this web application.</p>
				<p>There will be no discrimination because there is a bot involves in the initial stages to filter out the best of the candidates, only on the basis of their responses.</p><br></center>
		</div>
		</center>
	</div>
	<br><br>
	
</body>
</html>