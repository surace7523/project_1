<?php 

session_start();

session_destroy();


echo "<script>alert('You Have been Loged Out  successfully!!!')</script>";
	echo "<script>window.open('admin_login.php?','_self')</script>";
?>