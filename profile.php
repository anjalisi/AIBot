<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
	return;
}
$email=$_SESSION['userid'];
$stmt= $pdo->query("SELECT user_id FROM users where email='$email'");
$rows= $stmt->fetch(PDO::FETCH_ASSOC);
$user_id= htmlentities($rows['user_id']);

$stmt1= $pdo->query("SELECT * FROM users where user_id='$user_id'");
$rows1= $stmt1->fetch(PDO::FETCH_ASSOC);


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
	  <a class="first" href="dashboard-applicant.php">DASHBOARD</a>
	  <a href="profile.php" class="active">PROFILE</a>
	  <a href="#news">CHATBOT</a>
	  <a href="#contact">ABOUT</a>
	  <a href="logout.php">LOGOUT</a>
	</div>
<div class="content">
	<nav class="navbar container-fluid">
		<ul class="navbar-nav" id="navbar-id">
			<li><i class="fa fa-user-circle-o icon"></i><a href="#" id="username" style="font-family: 'Roboto Mono', monospace;">Hi! <?php echo $_SESSION["userid"]; ?></a></li>
		</ul>
	</nav>
	<div>
		
	</div>
</div>
</body>
</html>