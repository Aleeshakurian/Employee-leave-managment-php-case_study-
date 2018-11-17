<?php

if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	
	$id=$_REQUEST['DELC'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lmsdb",$con);
	$deletion="UPDATE  register SET status='Accept' WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:views.php?msg=Student accepted");
		exit;
	}
	else
	{
		header("location:views.php?msg=Student acception FAILED");
		exit;
	}
}
?>