<?php
session_start();
if((!isset($_SESSION['username'])))
{
	 header('location:login.php');
}
?>
<?php include_once('emphead.php') ?>
<html>
<title>Leave Managment</title>
 <head>
		
		<style>
			body {
				background: #e1c192 url(images/mountain.jpg);
			}
		</style>
    </head>
		
<body background="images/mountain.jpg">
<h1 align="center">&nbsp;LEAVE APPLICATION</h1>
 <form role="form" method="post" action="leave.php">
 <input type="hidden" name="" value="1000000">

 <table width="30%" height="468" border="0">
       <tr>
    <td>NAME</td>
    <td><input type="text" name="name" required></td>
  </tr>
        <tr>
          <td width="15%"><label>ID</label>&nbsp;</td>
          <td width="85%"><input type="text" name="id" required></td>
        </tr>
        <tr>
          <td width="15%"><label>DEPARTMENT</label>&nbsp;</td>
          <td width="85%"><input type="text" name="department" required></td>
        </tr>
        <tr>
          <td width="15%"><label>START DATE</label>&nbsp;</td>
          <td width="85%"><input type="date" name="startdate" required></td>
        </tr>
        <tr>
          <td width="15%"><label>END DATE</label>&nbsp;</td>
          <td width="85%"><input type="date" name="enddate" required></td>
        </tr>
        <tr>
          <td width="15%"><label>LEAVE TYPE</label>&nbsp;</td>
          <td width="85%"><input name="leavetype" type="radio" value="fullday">
            FULL DAY              
              <input name="leavetype" type="radio" value="halfday" required>
            HALF DAY</td>
		   
        </tr>
        <tr>
          <td width="15%"><label>REASON</label>&nbsp;</td>
          <td width="85%"><textarea name="reason" required></textarea></td>
        </tr>
		  <tr>
    <td width="15%"><input type="submit" name="submit" value="Submit"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>