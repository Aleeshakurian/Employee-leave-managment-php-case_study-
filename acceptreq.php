<?php

if(isset($_REQUEST['acc']) && $_REQUEST['acc']!='')
{
	
	$id=$_REQUEST['acc'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lmsdb",$con);
	$accept="UPDATE  leaveapp SET status='Accept' WHERE id='$id'";
	$ac=mysql_query($accept);
	if($ac)
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