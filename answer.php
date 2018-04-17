<?php 
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="UFT-8">
<head>
<meta charset="UTF-8">
<title>answer</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
      <center>
	  <?php
	    $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
		$attempt_qus=$answer['right']+$answer['wrong'];
	  ?>
	  <div class="container">
	  <div class="col-sm-2"></div>
	  <div class="col-sm-8">
  <h2>Quiz Result</h2>
                        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total no. of Question:</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attemped Questions:</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>Correct:</td>
        <td><?php echo $answer['right'].", ".($answer['right']*100)/($total_qus)."%"; ?></td>
      </tr>
      <tr>
        <td>Incorrect:</td>
        <td><?php echo $answer['wrong']; ?></td>
      </tr>
    </tbody>
  </table></div>
    <div class="col-sm-8"></div>
</div>
	  
	  
	  
	  </center>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>