<?php include_once('contacthead.php') ?>
<?php
    $con=mysql_connect('localhost','root','');
    mysql_select_db("lmsdb",$con);

    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        session_start();
        $query="select * from login where username='$username'and password='$password'";
        $result=mysql_query($query,$con);
        if(mysql_num_rows($result)==0)
        {
?>
            <script>
                alert("invalid user");
            </script>          
		<?php
        }
        else
        {
            $row=mysql_fetch_array($result);
            $_SESSION['username']=$row['username'];
           if($username=='admin')
            {
                header('location:admin.php');
            }
            else if($row['status']=='accept')
            {
                header('location:employee.php');
            }
			else
			{?>
				<script>
                alert("Rejected by Admin");
                </script>
			<?php }
        }
    }
?>
<html>
    <head>
		
		<style>
			body {
				background: #e1c192 url(images/mountain.jpg);
			}
		</style>
    </head>
    <body>
        <div align="center"></div>
        <div class="container">	
			<header>
				<h1 align="center"><strong> Login</strong></h1>
				<h2 align="center">WELCOME</h2>
			</header>
			
			<div align="center"><section class="main">
	            </section><section class="main"></section><section class="main"></section></div>
			<section class="main"><form class="form-2" action="" method="post" >
				<h1 align="center"><span class="log-in"></span></h1>
				<p align="center" class="float">
					<label for="login"><i class="icon-user"></i>Username</label>
					<input type="text" name="username" placeholder="USERNAME" autocomplete="off" required>
			    </p>
				<p align="center" class="float">
					<label for="password"><i class="icon-lock"></i>Password</label>
					<input type="password" name="password" placeholder="PASSWORD" class="showpassword" autocomplete="off" required>
			    </p>
				<p align="center" class="clearfix"> 
						    
					<input type="submit" name="login" value="Log in">
				
			    </p>
				</form>
    </section>    </div>
	
    </body>
</html>