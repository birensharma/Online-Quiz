<?php 
include("class/users.php");
$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
  
  <script type="text/javascript">
  function timeout()
  {
	  var minute=Math.floor(timeLeft/60);
	  var second=timeLeft%60;
	  if(timeLeft<=0)
	  {  
         clearTimeout(tm);
		 document.getElementById("form1").submit();
	  }
	  else
	  {   if(minute<10)
		  {
			  minute="0"+minute;
		  }
		  if(second<10)
		  {
			  second="0"+second;
		  }
		 document.getElementById("time").innerHTML=minute+":"+second; 
	  }
	  timeLeft--;
	var tm=setTimeout(function(){timeout()},1000);
	
	
  } 
  
  $(document).ready(function() {

    $(document)[0].oncontextmenu = function() { return false; }

    $(document).mousedown(function(e) {
        if( e.button == 2 ) {
            alert('Sorry, this functionality is disabled!');
            return false;
        } else {
            return true;
        }
    });
});
  </script>
  
  </head>
<body onload="timeout()">

<div class="container">
   <div class="col-sm-2"></div>
    <div class="col-sm-8">
  <h2>QUIZ</h2>
   <script type="text/javascript">
    var timeLeft=2*60;
  
  </script>
  
  <div id="draggable" class="ui-widget-content">
  <p><div id="time" style="float:right">Time</div>
  <div  style="float:right">Timeleft :</div></p>
</div>
 
  
  
  <form method="post"  id="form1"  action="answer.php">
  <?php 
    $i=1;
  foreach($qus->qus as $qust) {?>
    <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th><?php echo $i; ?>&nbsp;<?php echo $qust['question'];?> </th>
      </tr>
    </thead>
    <tbody>
	    <?php if(isset($qust['ans1']) ){ ?>
      <tr>
        <td>&nbsp;&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1']; ?></td>
      </tr>
		<?php }?>
		<?php if(isset($qust['ans2']) ){ ?>
	  <tr>
        <td>&nbsp;&emsp;<input type="radio" value="1"  name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2']; ?></td>
      </tr>
	  <?php }?>
		<?php if(isset($qust['ans3']) ){ ?>
	  <tr>
        <td>&nbsp;&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3']; ?></td>
      </tr>
	  <?php }?>
		<?php if(isset($qust['ans4']) ){ ?>
	  <tr>
        <td>&nbsp;&emsp;<input type="radio" value="3"  name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4']; ?></td>
      </tr>
	  <?php }?>
	 
        <input type="radio" checked="checked" style="display:none" value="no_attempt"  name="<?php echo $qust['id']; ?>"/>
      
      </tbody>
  </table>
  <?php $i++; }?>
   <center><input type="submit"  value="submit" class="btn btn-success"/></center>
   </form>
  </div>
  <div class="col-sm-2"></div>
  
  </div>
  
</body>
</html>
