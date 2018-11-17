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
$query="SELECT *   FROM register ;";
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
   
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                <th>id</th>
                  <th>name</th>
                  <th>dob</th>
                 <th>stafftype</th>
                  <th>department</th>
				  <th>photo</th>
				  <th>action</th>      
                </tr>
				<?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
                <tr>
                  
                  <td><?php echo $get['id'];?></td>
                  <td><?php echo $get['name'];?></td>
                  <td><?php echo $get['dob'];?></td>
				  <td><?php echo $get['stafftype'];?></td>
                  <td><?php echo $get['department'];?></td>
				  <td><img width='30' height='30' src="images/<?php echo $get['photo'];?>"> </td>
				  <form action="" method='post'>
				  <input type='hidden' name='Acc' value="<?php echo $get['id']?>" >
				  <td><input type="submit" name='accept' value='ACCEPT'> 
				  </form>
				  <form action="" method='post'>
				  <input type='hidden' name='DELC' value="<?php echo $get['id']?>" >
				  <input type="submit" name='rejct' value='REJECT'> </td>
				  </form>
					<?php $k++; }?>
                </tr>
              </table>
            </div>
			<div id='status'>
			<?php
			if(isset($_POST['accept']))
			{
			$i=$_POST['Acc'];
			$sq="select * from register where id='$i'";
			$result=mysql_query($sq,$con);
			$get=mysql_fetch_array($result);
			$u=$get['username'];
			$p=$get['password'];
			$q1="INSERT INTO login (user_id,username,password,status) VALUES ('$i','$u','$p','accept')";
			mysql_query($q1,$con);
			}
			if(isset($_POST['rejct']))
			{
			$i=$_POST['DELC'];
			$sq="select * from register where id='$i'";
			$result=mysql_query($sq,$con);
			$get=mysql_fetch_array($result);
			$u=$get['username'];
			$p=$get['password'];
			$q1="INSERT INTO login (user_id,username,password,status) VALUES ('$i','$u','$p','reject')";
			mysql_query($q1,$con);
			}
			?>	
			</div>
            

