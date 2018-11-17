<?php
//this is a session 
//should be impedded on the header of every page

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['username'])){
header('location:../index.php');	
}
?>
<?php include_once('adminhead.php') ?>

  <div class="content-wrapper">
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("lmsdb",$con);
//<a href="viewstudents.php">viewstudents.php</a>
$query="SELECT * FROM register";
$insertionquery=mysql_query($query,$con);
?>    

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>

		      <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="113" height="50" border="3" background="images/img1.jpg" class="table table-bordered">
                <tr>
                 
                  <th width="20" height="50">ID</th>
                  <th width="20" height="50">NAME</th>
                  <th width="20" height="50">DOB</th>
                  <th width="20" height="50">ADDRESS</th>
                  <th width="20" height="50">GENDER</th>
               <!--   <th width="50" height="50">EMAIL</th>
				   <th width="51" height="50">PHONE</th>
                  <th width="50" height="50">STAFF TYPE</th>
				  <th width="50" height="50">QUALIFICATION</th>
                  <th width="50" height="50">DEPARTMENT</th>
                  <th width="50" height="50">WORKTIME</th>
                 <th width="50" height="50">PHOTO</th>
                  <th width="50" height="50">USERNAME</th>-->
                  <th style="width: 10px">Action</th>
                  
                </tr>
				<?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
                <tr>
                  <td><?php echo $get['id'];?></td>
                  <td><?php echo $get['name'];?></td>
                  <td><?php echo $get['dob'];?></td>
				
                  <td><?php echo $get['address'];?></td>
                  <td><?php echo $get['gender'];?></td>
                <!--  <td><?php echo $get['email'];?></td>
				  <td><?php echo $get['phone'];?></td>
                  <td><?php echo $get['stafftype'];?></td>
                  <td><?php echo $get['qualification'];?></td>
				   <td><?php echo $get['department'];?></td>
                  <td><?php echo $get['worktime'];?></td>
                 <td><?php echo $get['photo'];?></td>
                  <td><?php echo $get['username'];?>-->
				  <td><a href="delstu.php?DELC=<?php echo $get['id']?>">
				  <span class="ion-android-delete"></span></a>
				  </td>
					<?php $k++; }?>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
		  </div>
		  
		
 
		  