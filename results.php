<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
	return;
}
$email=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bot- Applicant</title>
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
	  <a href="profile.php">PROFILE</a>
	  <a href="chatbot.php" class="active">CHATBOT</a>
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
	<center><h1>PSYCHOMETRIC <b>RESULTS</b></h1></center><br>
	<?php
		$answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];
        $answer7 = $_POST['question-7-answers'];
        $answer8 = $_POST['question-8-answers'];
        $answer9 = $_POST['question-9-answers'];
        $answer10 = $_POST['question-10-answers'];

        $totalCorrect=0;
        if ($answer1 == "B") {
        	$totalCorrect++; 
     	}
     	else if($answer1 !="")
        {
        	echo ('<h2>ANSWER 1 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer2 == "A") { $totalCorrect++; }
        else if($answer2 !="")
        {
        	echo ('<h2>ANSWER 2 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer3 == "C") { $totalCorrect++; }
        else if($answer3 !="")
        {
        	echo ('<h2>ANSWER 3 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer4 == "D") { $totalCorrect++; }
        else if($answer4 !="")
        {
        	echo ('<h2>ANSWER 4 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer5 == "D") { $totalCorrect++; }
        else if($answer5 !="")
        {
        	echo ('<h2>ANSWER 5 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer6 == "D") { $totalCorrect++; }
        else if($answer6 !="")
        {
        	echo ('<h2>ANSWER 6 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer7 == "D") { $totalCorrect++; }
        else if($answer7 !="")
        {
        	echo ('<h2>ANSWER 7 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer8 == "D") { $totalCorrect++; }
        else if($answer8 !="")
        {
        	echo ('<h2>ANSWER 8 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer9 == "D") { $totalCorrect++; }
        else if($answer9 !="")
        {
        	echo ('<h2>ANSWER 9 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        if ($answer10 == "D") { $totalCorrect++; }
        else if($answer10 !="")
        {
        	echo ('<h2>ANSWER 10 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:</p>";
        }
        echo "<div id='results'>$totalCorrect / 5 correct</div>";
            if($totalCorrect>8)
            {	
	            $stmt1= "select * from users where email=:email";
				$rows1= $stmt1->fetch(PDO::FETCH_ASSOC);
				$fname= htmlentities($rows1['firstn']);
				$linkedin= htmlentities($rows1['linkedin']);
				$resume=htmlentities($rows1['resume']);

				$sql="INSERT INTO shortlists(fname,resume,linkedin, email, score)
	 			values(:fname,:resume, :linkedin,:email,:score)";
				$stmt = $pdo->prepare($sql);

				$stmt->execute(array(
					':fname' => $fname,
					':resume' => $resume,
					':email' => $email,
					':linkedin' => $linkedin,
					':score' => $totalCorrect,
					':resume' => $_POST['resume'],
					':pass' => $_POST['pass'],
				));
				

            	echo("<h2>CONGRATULATIONS !! You have passed<h2>");
            	echo "<p>Your interview will be scheduled as soon as the recruiters update us. </p>";

            }
            else
            	echo("");
	?>
</div>
</body>
</html>