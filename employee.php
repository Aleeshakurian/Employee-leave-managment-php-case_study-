<?php
session_start();
if((!isset($_SESSION['username'])))
{
	 header('location:login.php');
}
 $con=mysql_connect('localhost','root','');
    mysql_select_db("lmsdb",$con);
	 // $name=$_POST['name'];
   //$sql="select name from register where name='$name'";
//$result=mysql_query($sql);
//$row=mysql_fetch_array($result);
?>
<html>
<head>

	   <head>
		
		<style>
			body {
				background: #e1c192 url(images/mountain.jpg);
			}
		</style>
    </head>
		
<title>Leave Managment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 24px}
body {
	background-color: ;
}
.style3 {color: #00FF00}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body id="top">

  <div class="hoc " id="topbar" #invalid_attr_id="block"> 
   
    <div #invalid_attr_id="left">
      <ul style="padding:0; list-style:none;" #invalid_attr_id="0">
        <li></li>
        <li>dbc.ac.in</li>
      </ul>
    </div>
    <div #invalid_attr_id="right">
      <ul style="padding:0; list-style:none;" #invalid_attr_id="0">
     
      </ul>
    </div>
    
  </div>


<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div class="fl_left style2" id="logo">
      <h1><a href="index.html">DON BOSCO COLLEGE</a></h1>
      <p>Angadikadavu</p>
      <p>&nbsp;</p>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <p>&nbsp;</p>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
  </div>
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
      <li class="active"><a href="employee.php">Home</a></li>
        <li><a class="" href="leaveapp.php">APPLY LEAVE</a>
      
        </li>
        <li><a class="drop" href="">Status</a>
		
		<ul>
           
			
            <li><a href="leavestatus.php">LEAVE</a></li>
		  </ul></li>
            
       
            
		<li><a href="logout.php">LOGOUT</li>
      </ul>
    </nav>
  
  </header>
</div>
<p></p><header class="heading">WELCOME,</header>
<h1>You can apply your leave </h1>
<h1>view your leave status</h1>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>