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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shortlisted</title>
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
	  <a href="shortlist.php" class="active">SHORTLISTED</a>
	  <a href="interview.php">INTERVIEW</a>
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
		<center><h1>Shortlisted<b> Candidates</b></h1></center><br>
		<div class="table-wrapper table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-sm-2" style="color: #66fcf1;font-family: 'Roboto Slab', serif; font-size: 20px;">Name</th>
                        <th class="col-sm-3" style="color: #66fcf1;font-family: 'Roboto Slab', serif; font-size: 20px;">Resume</th>
                        <th class="col-sm-3" style="color: #66fcf1;font-family: 'Roboto Slab', serif; font-size: 20px;">LinkedIn</th>
                        <th class="col-sm-3" style="color: #66fcf1;font-family: 'Roboto Slab', serif; font-size: 20px;">Email</th>
                        <th class="col-sm-1" style="color: #66fcf1;font-family: 'Roboto Slab', serif; font-size: 20px;">Score</th>
                    </tr>
                </thead>
                <tbody>
				<?php  
					if(count($rows)){
					
						$stmt = $pdo->query("SELECT* FROM shortlists");
						while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
									
							echo "<tr><td>";
							echo(htmlentities($row['fname']));
							echo("</td><td>");
							echo(htmlentities($row['resume']));
							echo("</td><td>");
							echo(htmlentities($row['linkedin']));
							echo("</td><td>");
							echo(htmlentities($row['email']));
							echo("</td><td>");
							echo(htmlentities($row['score']));
							echo("</td></tr>\n");
							}
						
					}
				
					else 
						{
							echo "<center><h3 style='color:red;'> No Candidates Yet</h3></center></br>";
						}
					
				?>
                </tbody>
	</div>
</div>

</body>
</html>