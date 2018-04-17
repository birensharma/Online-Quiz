<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <h2>Home</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home1">Home</a></li>
    <li><a data-toggle="tab" href="#menu2">Profile</a></li>
    <li><a data-toggle="tab" href="#menu3">Quiz</a></li>
    <li style="float:right"><a  href="logout.php?run=log">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home1" class="tab-pane fade in active"></div>
      <h3>Quiz</h3>
	 <center><button type="button" class="btn btn-primary"   data-toggle="tab" href="#select">Start Quiz </button>&emsp;</center>
	             <br>   <div class="col-sm-4"></div>
					<div class="col-sm-4">
				   <div id="select"class="tab-pane fade ">
				   <form method="post"action="qus_show.php">
				    <select class="form-control" id="" name="cat">
					<option >select category</option>
					<?php 
					
					foreach($profile->cat as $category)
					{?>
						         <option value="<?php echo $category['id']; ?>"><?php echo $category['category']; ?></option>
							<?php	 } ?>
				                     </select><br>
									 <center><input type="submit"  value="submit" class="btn btn-primary"/></center>
								</div>
								  <div class="col-sm-4"></div>
								</div>
								
							</form>
							</div>
							<div>
					   <div class="col-sm-4"></div>  
			  </div>
		  </div>
	  </div>
    </div>
	
	
    <div id="menu2" class="tab-pane fade">
      <h3>Profile</h3>
	 <div class="table-responsive">          
		  <table class="table">
			<thead>
			  <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>image</th>
			  </tr>
			</thead>
		  <tbody>
		
		 <?php 
			foreach($profile->data as $prof)
				{ ?>					
					
						  <tr>
							<td><?php echo $prof['id']; ?></td>
							<td><?php echo $prof['name']; ?></td>
							<td><?php echo $prof['email']; ?></td>
							<td><img src="img/<?php echo $prof['img'] ?>" alt="" width="130px" height="150px"/></td>
						  </tr>
				      </tbody>
			<?php	}?>
		
		</table>
		</div>
	</div>
	</div>
    <div id="menu3" class="tab-pane fade">
      <h3>Your Quiz</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
	<br>


	</div>

		<div class="panel panel-default" style="margin-top:200px">
			<div class="panel-footer">&copy; copyright<p style="float:right">Designed & Developed by Bn Sharma</p></div>
		</div>
	
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php

 

?>