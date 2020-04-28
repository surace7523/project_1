



<div>
	

	<!-- <form  method ="post"  action=" ">
		

			
		  <table  width="500" height="300"align="left" bgcolor="orange" style="opacity: 0.9">

			<tr align="center">
				<td colspan="3"><h2>Login!</h2></td>

			</tr>

			<tr>
				
				<td align="right"><b>Email:: </b></td>
				<td><input type="text" name="email" placeholder="enetr email"/></td>
			</tr>


			<tr>
				
				<td align="right"><b>Password::</b></td>
				<td><input type="password" name="pass" placeholder="enetr password"/></td>
			</tr>

			
			<tr align="right">
				
				<td colspan="2"><input type="submit" name="login" value="Login"></td>
			</tr>

			<tr align="center">
				
				<td><a href="checkout.php?forgot_pass" co/><font color="blue"><u>Forgot Password</u></font></a></td>

			</tr>


	          <tr>
				<td colspan="3">
	       	 		<h2 style="float: center;"><a href="customer_register.php" style=" background-color: blue; "> New? Register Here</a></h2>
	        	</td>
	         </tr>

	         <button type="button">Click Me!</button>




			
		</table>





	</form>
 -->


 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>




<div class="container">

  <form method ="post"  action=" ">


  	
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>


       			 <input type="text" name="email" placeholder="Username" required>
       			 <input type="password" name="pass" placeholder="Password" required>
     		     <input type="submit" name="login" value="Login">

      


      </div>
      
    </div>
  </form>


  <?php



if(isset($_POST['login'])){
	$con = mysqli_connect("localhost","root","","ecom");

	$c_email = $_POST['email'];
	$c_pass = $_POST['pass'];



  $sel_c ="select *from customers where customer_pass='$c_pass' AND customer_email ='$c_email'";

  $run_c= mysqli_query($con, $sel_c);

  $check_customer = mysqli_num_rows($run_c);



 
  if($check_customer==0){

  	echo"<script>('Password or email is incorrect')</script>";
  	exit();
  }


  
  	$ip= getIp();

  	$sel_cart= "select * carts where ip_add ='$ip'";

    $run_cart = mysqli_query($con, $sel_cart);


    $check_cart = mysqli_num_rows($run_cart);

   



  // if ($check_customer>0 AND $check_cart==0) {
  	if ($check_cart>0) {
  	

  	$_SESSION['customer_email'] = $c_email;

  	echo"<script>alert('You are looged In ,Successfully')</script>";
  	echo"<script>window.open('customer/my_account.php','_self')</script>";
  	# code...
  }


else{

	$_SESSION['customer_email']=$c_email;

	echo"<script>alert('You are looged In ,Successfully')</script>";
  	echo"<script>window.open('checkout.php','_self')</script>";


}


  

}




  ?>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="customer_register.php" style="color:white" class="btn">Register Here!!!</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>

</body>
</html>


</div>