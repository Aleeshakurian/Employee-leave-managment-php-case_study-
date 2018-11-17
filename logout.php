<?php
session_start();//to start session
session_destroy();//to destroy session variable
unset($_SESSION["username"]);
header("location:index.php");
?>