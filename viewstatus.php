
<?php
session_start();
if((!isset($_SESSION['username'])))
{
	 header('location:login.php');
}

?>

<?php include_once('emphead.php') ?>

  <div class="content-wrapper">
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("lmsdb",$con);
//<a href="view.php">view.php</a>
$query="SELECT *  FROM register ;";
$insertionquery=mysql_query($query,$con);
?>
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
                 <th width="80">Name</th> 
                <th width="80">status</th>
               <!-- <th width="80">Action</th>  -->
                
                  
                </tr>
				<?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
                <tr>
                  <td><?php echo $get['name'];?></td>
				
				  
				  
        
				  
				  <?php $k++; }?>
                </tr>
              </table>
            </div>
            

	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>