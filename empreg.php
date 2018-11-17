<?php
	//database connection
	$conn=@mysql_connect("localhost","root");
	//selecting database if available;
	$sql=mysql_select_db("lmsdb",$conn);
	session_start();
	//conditon to check database connection
	if(!$sql){
		die("Database not selected.");
	}
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$stafftype=$_POST['stafftype'];
	$qualification=$_POST['qualification'];
	$department=$_POST['department'];
	$worktime=$_POST['worktime'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$info=pathinfo($_FILES['photo']['name']);
    $ext=$info['extension'];
    $newname=$name.'.'.$ext;
    $target="images//".$newname;

	if($password==$cpassword)
        {
			move_uploaded_file($_FILES['photo']['tmp_name'],$target);
			$query="INSERT INTO register (id,name,dob,address,gender,email,phone,stafftype,qualification,department,worktime,username,password) VALUES ('$id','$name','$dob','$address','$gender','$email','$phone','$stafftype','$qualification','$department','$worktime','$username','$password')";
			mysql_query($query,$conn)or die(mysql_error($conn));  
			$q1="UPDATE register set photo='$newname' where name='$name'";
			mysql_query($q1,$conn);
?>
			<script>
			alert("Success");
			</script>

<?php  
        }
        else
        {
?>
            <script>
                alert("Password doesn't match");
            </script>
<?php
        }
    }
?>

<?php include_once('contacthead.php') ?>
<html>
<title>Leave Managment</title>
<body background="images/mountain.jpg">
<h1 align="center">&nbsp;EMPLOYEE REGISTRATION</h1>
 <form role="form" method="post" action="" enctype="multipart/form-data">
 <input type="hidden" name="" value="1000000">
<table  width="56%" height="491" align="center" >
 <tr>
    <td width="22%">ID</td>
    <td width="28%"><input type="text" name="id"  autocomplete="off" required></td>
  </tr>
  <tr>
    <td>NAME</td>
    <td><input type="text" name="name" required></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><input type="date" name="dob" required></td>
  </tr>
<tr>
    <td>ADDRESS</td>
    <td><textarea name="address" required></textarea></td>
  </tr>
  <tr>
    <td>GENDER</td>
    <td><select name="gender" required>
	<OPTION>MALE</OPTION>
	<OPTION>FEMALE</OPTION>
    </select></td>
  </tr>
  <tr>
    <td>EMAIL</td>
    <td><input type="email" name="email" required></td>
  </tr>
  <tr>
    <td>PHONE</td>
    <td><input type="number" name="phone" required></td>
  </tr>
  
  <tr>
    <td>STAFF TYPE</td>
    <td><select name="stafftype" required>
	<option>HOD</option>
	<option>LECTURER</option>
	<option>OFFICE STAFF</option>
    </select></td>
  </tr>
  <tr>
    <td>QUALIFICATION</td>
    <td><input type="text" name="qualification" required></td>
  </tr>
  <tr>
    <td>DEPARTMENT</td>
    <td><input type="text" name="department" required></td>
  </tr>
  <tr>
    <td>WORK TIME </td>
    <td><select name="worktime" required>
	<option>9.00AM to 4.30pm</option>
	<option>10.00AM to 5.00pm</option>
    </select></td>
  </tr>
  <tr>
    <td>PHOTO</td>
    <td><input type="file" name="photo" required></td>
  </tr>
  <tr>
    <td>USERNAME</td>
    <td><input type="text" name="username" required></td>
  </tr>
  <tr>
    <td>PASSWORD</td>
    <td><input type="password" name="password" required></td>
  </tr>
  <tr>
    <td>RETYPE PASSWORD </td>
    <td><input type="password" name="cpassword" required></td>
  </tr> 
  <tr>
    <td><input type="submit" name="submit" value="Submit"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
