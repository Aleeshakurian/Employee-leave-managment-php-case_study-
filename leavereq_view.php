<?php
session_start();
if((!isset($_SESSION['username'])))
{
	 header('location:login.php');
}
?>
<?php include_once('adminhead.php') ?>
  <div class="content-wrapper">
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("lmsdb",$con);
$query="SELECT *   FROM leaveapp;";
$insertionquery=mysql_query($query,$con);
?>
 <head>
		
		<style>
			body {
				background: #e1c192 url(images/mountain.jpg);
			}
		</style>
    </head>
		      <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  
                <th>id</th>
                  <th>name</th>
                  <th>department</th>
                  <th>start date</th>
                  <th>end date</th>
                  <th>leave type</th>
				  <th>reason</th>
				  <th>action</th>
                </tr>
				<?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
                <tr>
                  
                  <td><?php echo $get['id'];?></td>
                  <td><?php echo $get['name'];?></td>
                  <td><?php echo $get['department'];?></td>
                <td><?php echo $get['startdate'];?></td>
                  <td><?php echo $get['enddate'];?></td>
                  <td><?php echo $get['leavetype'];?></td>
                  <td><?php echo $get['reason'];?></td>
				  
				  <td><a href="acceptreq.php?acc=<?php echo $get['id']?>">
					ACCEPT</a>
				  
				     <br> 
					 <br><a href="delreq.php?DELC=<?php echo $get['id']?>">
					REJECT</a>
				  </td>
				  
					<?php $k++; }?>
                </tr>
              </table>
            </div>
            

