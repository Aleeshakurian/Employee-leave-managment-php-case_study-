<?php
	//database connection
	$conn=@mysql_connect("localhost","root");
	//selecting database if available;
	$sql=mysql_select_db("lmsdb",$conn);
	//conditon to check database connection
	if(!$sql){
		die("Database not selected.");
	}
if(isset($_POST['submit']))

{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$department=$_POST['department'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$leavetype=$_POST['leavetype'];
	$reason=$_POST['reason'];
	$query="INSERT INTO leaveapp (name,id,department,startdate,enddate,leavetype,reason) VALUES ('$name','$id','$department','$startdate','$enddate','$leavetype','$reason')";

	$queryInsertion=mysql_query($query);
	if(querInsertion){
	header('location:leaveapp.php');
	}
}
	
?>
