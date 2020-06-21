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
        $answer1=0;$answer2=0;$answer3=0;$answer4=0;$answer5=0;$answer6=0;$answer7=0;$answer8=0;$answer9=0;$answer10=0;
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
        	$totalCorrect=$totalCorrect+5; 
     	}
     	else if($answer1 !="B")
        {
        	echo ('<h2>ANSWER 1 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: FALSE (which was the second option)</p>";
        }
        if ($answer2 == "C") {$totalCorrect=$totalCorrect+5;}
        else if($answer2 !="C")
        {
        	echo ('<h2>ANSWER 2 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: CANNOT SAY(which was the 3rd option)</p>";
        }
        if ($answer3 == "A") { $totalCorrect=$totalCorrect+5;}
        else if($answer3 !="A")
        {
        	echo ('<h2>ANSWER 3 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was:TRUE (which was the 1st option)</p>";
        }
        if ($answer4 == "A") { $totalCorrect=$totalCorrect+5; }
        else if($answer4 !="A")
        {
        	echo ('<h2>ANSWER 4 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: 4,1,2,5,3 (which was the 1st option)</p>";
        }
        if ($answer5 == "D") { $totalCorrect=$totalCorrect+5; }
        else if($answer5 !="D")
        {
        	echo ('<h2>ANSWER 5 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: g (which was the 4th option)</p>";
        }
        if ($answer6 == "C") { $totalCorrect=$totalCorrect+5; }
        else if($answer6 !="C")
        {
        	echo ('<h2>ANSWER 6 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: 16.66%(which was the 3rd option)</p>";
        }
        if ($answer7 == "A") { $totalCorrect=$totalCorrect+5; }
        else if($answer7 !="A")
        {
        	echo ('<h2>ANSWER 7 IS INCORRECT !</h2>');
        	echo "<br><p>The Correct Answer was: TRUE (which was the 1st option)</p>";
        }
        if($answer8=="A")
        {
            $totalCorrect++;
        }
        else if($answer8=="B")
        {
            $totalCorrect=$totalCorrect+2;
        }
        else if($answer8=="C")
        {
            $totalCorrect=$totalCorrect+3;
        }
        else if($answer8=="D")
        {
            $totalCorrect=$totalCorrect+4;
        }
        else if($answer8=="E")
        {
            $totalCorrect=$totalCorrect+5;
        }

        if($answer9=="A")
        {
            $totalCorrect++;
        }
        else if($answer9=="B")
        {
            $totalCorrect=$totalCorrect+2;
        }
        else if($answer9=="C")
        {
            $totalCorrect=$totalCorrect+3;
        }
        else if($answer9=="D")
        {
            $totalCorrect=$totalCorrect+4;
        }
        else if($answer9=="E")
        {
            $totalCorrect=$totalCorrect+5;
        }

        if($answer8=="A")
        {
            $totalCorrect=$totalCorrect+5;
            
        }
        else if($answer8=="B")
        {
            $totalCorrect=$totalCorrect+4;
        }
        else if($answer8=="C")
        {
            $totalCorrect=$totalCorrect+3;
        }
        else if($answer8=="D")
        {
            $totalCorrect=$totalCorrect+2;
        }
        else if($answer8=="E")
        {
            $totalCorrect++;
        }
        echo "<div id='results'><h1>$totalCorrect / 50</h1></div>";
            if($totalCorrect>35)
            {	
            	echo("<h2>CONGRATULATIONS !! You have passed<h2>");
            	echo "<p>Your interview will be scheduled as soon as the recruiters update us. </p>";

            }
            else
            	echo("<h2>You have failed<h2>");
	?>
</div>
</body>
</html>