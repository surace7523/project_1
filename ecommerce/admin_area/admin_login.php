<?php

 session_start();


?>
<style>

body{
 margin: 0 auto;
 background-image: url("../admin_area/wall.jpg");
 background-repeat: no-repeat;
 background-size: 100% 720px;
}
 
.container{
 width: 500px;
 height: 450px;
 text-align: center;
 margin: 0 auto;
 background-color: rgba(44, 62, 80,0.7);
 margin-top: 160px;
}
 
.container img{
 width: 150px;
 height: 150px;
 margin-top: -60px;
}
 
input[type="text"],input[type="password"]{
 margin-top: 30px;
 height: 45px;
 width: 300px;
 font-size: 18px;
 margin-bottom: 20px;
 background-color: #fff;
 padding-left: 40px;
}
 
.form-input::before{
 content: "\f007";
 font-family: "FontAwesome";
 padding-left: 07px;
 padding-top: 40px;
 position: absolute;
 font-size: 35px;
 color: #2980b9; 
}
 
.form-input:nth-child(2)::before{
 content: "\f023";
}
 
.btn-login{
 padding: 15px 25px;
 border: none;
 background-color: #27ae60;
 color: #fff;
}
</style>


<!DOCTYPE html>
<html>
<head>
 <title> Login Form in HTML5 and CSS3</title>

 <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
<div class="con">
	<!-- <img src="admin_area/wall.jpeg"/> -->
 <div class="container">
 <img src="admin.jpg"/>
 <form method="post" action="admin_login.php">
 <div class="form-input">
 <input type="text" name="email" placeholder="Enter the User Name"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="password"/>
 </div>
 <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
 </form>
 </div>
 </div>
</body>
</html>


<?php 
 

$con = mysqli_connect("localhost","root","","ecom");

if(isset($_POST['login'])){
    

$con = mysqli_connect("localhost","root","","ecom");


    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    
    $sel_user="select * from admin where user_email ='$email' AND user_pass ='$pass'";
    
    $run_user=mysqli_query($con,$sel_user);
    $check_user=mysqli_num_rows($run_user);

    echo $check_user;
    
    if($check_user == 0){
       
	echo "<script>alert('Password or Email is Incorrect!!!')</script>";

    }
    else{
    	$_SESSION['user_email']=$email;
       
	echo "<script>alert('You Have been LoGED In  successfully!!!')</script>";
	echo "<script>window.open('admin.php?Logged_in','_self')</script>";
    }
        
}
?>