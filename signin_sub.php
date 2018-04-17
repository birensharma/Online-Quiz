<?php
include("class/users.php");
$login=new users;
extract($_POST);
if($login->signin($e,$p))
{
   $login->url("home.php");
}
else
	{
		$login->url("index.php?run=failed");
	}
?>