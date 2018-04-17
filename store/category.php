<?php 
include "class/users.php";
$category=new users;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <h2>Quiz in PHP</h2>

  <ul class="nav nav-tabs">
    <li><a  href="index.php">Home</a></li>
    <li style="float:right"><a  href="index.php">back</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
	 <center>
	<h1>Questions</h1>
	 </center>
<?php
extract($_POST);
if(isset($submit))
{
$_SESSION['cat']=$cat;
$category->questions_show($cat);
$sr=1;
//echo "<pre>";
$_SESSION['total_ques']=count($category->ques_show);
?>

<?php foreach($category->ques_show as $ques){ ?>
	
	<?php //echo $ques[2];?>
	 <center><table style='width:70%' class='table table-bordered'>
	<form  method='post' action="answer.php" >
		<thead>
		  <tr class='success'>
			<th><?php echo $sr++." - ".$ques['question'];?></th>
		  </tr>
		</thead>
		<tbody>
			<?php if(isset($ques['answer1']) ){ ?>
			<tr class='info'>
				<td>1 &nbsp; <input type="radio" value="0" name="<?php echo $ques['id'];?>" >&nbsp;<?php echo $ques['answer1'];?></td>
			</tr>
			<?php }?>
			<?php if(isset($ques['answer2']) ){ ?>
			<tr class='info'>
				<td>2 &nbsp; <input type="radio" value="1" name="<?php echo $ques['id'];?>" >&nbsp;<?php echo $ques['answer2'];?></td>
			</tr>
			<?php }?>
			<?php if(isset($ques['answer3']) ){ ?>
			<tr class='info'>
				<td>3 &nbsp; <input type="radio" value="2" name="<?php echo $ques['id'];?>" >&nbsp;<?php echo $ques['answer3'];?></td>
			</tr>
			<?php }?>
			<?php if(isset($ques['answer4']) ){ ?>
			<tr class='info'>
				<td>4 &nbsp; <input type="radio" value="3" name="<?php echo $ques['id'];?>" >&nbsp;<?php echo $ques['answer4'];?></td>
			</tr>
			<?php }?>
			<tr class='info'>
				<td> &nbsp; <input type="radio" value="5" checked="checked" style="display:none" name="<?php echo $ques['id'];?>" ></td>
			</tr>
	</tbody>
	  </table></center>
		<?php }?>
	
			<center><button type='submit' class='btn btn-default'>Submit</button></center>
	</form>
<?php
}
?> 
    </div>
	</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
