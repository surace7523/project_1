
  
<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';
if(isset($_POST['submit'])){
	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['password']);
	$sql="select * from new_users where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['ADMIN_USERNAME']=$username;
		header('location:admin_dash');
		die();
	}else{
		$msg="Please enter correct login details";	
	}
	
}
?>
<!doctype html>

<html>
	<head>
		<title> Transparent Login form </title>
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>
	<div class="loginBox">
		
		<img src="user.png" class="user">
		<h2>Log In Here</h2>
		<form method ="post">
			<p>Username</p>
			<input type="text" name = "username" placeholder="Username" required>
			<p>Password</p>
			<input type="password" name = "password" placeholder=" Password" required>
			<button type="submit"  name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
			<a href="#"> Forget Password</a> 
			
		</form>
	</div>
	</body>
</html>