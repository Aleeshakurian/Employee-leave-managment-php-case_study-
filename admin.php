<?php
session_start();
if((!isset($_SESSION['username'])))
{
	 header('location:login.php');
}
?>
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("lmsdb",$con);
$query="SELECT *  FROM register ;";
$insertionquery=mysql_query($query,$con);
$query1="SELECT status from login ;";
$result=mysql_query($query1,$con);
?>
<!DOCTYPE html>
<html>		
<title>Leave Managment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body id="top">
<body style="background-image:url('images/mountain.jpg')">
<div class="wrapper row0 style3">
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
</div>

<header id="header" class="hoc clear"> 
    
    <div class="fl_left style2" id="logo">
      <h1><a href="#">DON BOSCO COLLEGE</a></h1>
      <p>Angadikadavu</p>
    </div>
<nav id="mainav" class="fl_right">
      <ul class="clear">
      <li class="active"><a href="admin.php">Home</a></li>
        <li><a class="drop" href="">REQUESTS</a>
		<ul>
            <li><a href="empreq_view.php">EMPLOYEE REQUEST</a></li>
			
            <li><a href="leavereq_view.php">LEAVE REQUEST</a></li>
		  </ul></li>
          
		<li><a href="logout.php">LOGOUT</li>
      </ul>
</nav>   
  </header>		
    </head>
	
		        <header class="heading">Registerd employees:</header>
        </figure><p></p>
		<p>
		</p>
 
				<?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>

	<table width="200" border="1">
 
    <?php echo $get['id'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $get['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $get['stafftype'];?>
  
</table>
	
	<?php $k++; }?>
              
          
      
    <div align="center"><a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
          <!-- JAVASCRIPTS -->
          <script src="layout/scripts/jquery.min.js"></script>
          <script src="layout/scripts/jquery.backtotop.js"></script>
          <span class="style1"></span>
          <script src="layout/scripts/jquery.mobilemenu.js"></script>
    </div>
</body>
</html>