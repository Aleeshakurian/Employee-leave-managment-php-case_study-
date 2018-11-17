<?php

if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	
	$id=$_REQUEST['DELC'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lmsdb",$con);
	$deletion="UPDATE  leaveapp SET status='reject' WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:leavereq_view.php");
		exit;
	}
	else
	{
		header("location:leavereq_view.php");
		exit;
	}
}
?>