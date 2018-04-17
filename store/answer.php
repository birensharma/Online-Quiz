<?php
include "class/users.php";
$answer=new users;
//extract($_POST);

	$cat_id=$_SESSION['cat'];
	$ans=$answer->answer($_POST);
/* 	{
		header("location:answer.php");
	}
	else
	{
		echo "please select at least one question";
	} */
	//$ans=$answer->answer($_POST,$cat_id);
    //print_r($answer->ques);
	//print_r($_POST);

	echo "<br><br><br><br>";
	/*echo "right"." ".$ans['right']."<br>"; 
	echo "wrong"." ".$ans['wrong']."<br>";  */
	//echo "no answer"." ".$ans['no_answer']."<br>"; 
	
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

	<div class="row">
	  <ul class="nav nav-tabs">
		<li><a  href="index.php">Home</a></li>
		<li><a  href="#">Back</a></li>
	  </ul>
	
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
				<br>
			  <div class="panel panel-default">
				<div class="panel-heading"><center><h2>Your Score</h2></center></div>
				<div class="panel-heading"><center><h3>Total Number of Questions <br><br><b><?php echo $_SESSION['total_ques'];?></b></h3></center></div>
				<div class="panel-heading"><center><h3>You have attempt <br><br><b>
				<?php
				echo $attempted=$_SESSION['total_ques']-$ans['no_answer'];?></b></h3></center></div>
				<div class="panel-heading"><center><h3>&emsp; Right answer&emsp; ----&emsp;<?php echo "<mark>".$ans['right']."</mark>";?> </h3> </center></div>
				<div class="panel-heading"><center><h3>&emsp; Wrong answer&nbsp; ----&nbsp;&nbsp;&nbsp;<?php echo "<mark>".$ans['wrong']."</mark>";?> </h3></center> </div>
				<div class="panel-heading"><center><h3>&emsp; No answer&emsp; ----&emsp;<?php echo "<mark>".$ans['no_answer']."</mark>";?> </h3> </center></div>
				<div class="panel-heading"><center><h3> &emsp;Your answer Percentage <br><br>
				&emsp;<?php 
				echo "<mark>".($ans['right']*100)/$_SESSION['total_ques']."%"."</mark>";?> </h3> </div>
			  </div>
		</div>
		<div class="col-sm-2"></div>

	</div>
	<br>
	<br>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div class="panel panel-default">
			<div class="panel-footer">&copy; copyright<p style="float:right">Developed by danish khan</p></div>
		</div>
	
</div>
</body> 
</html>