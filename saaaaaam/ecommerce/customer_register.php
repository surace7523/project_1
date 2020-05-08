<!DOCTYPE html>
<?php 

session_start();
 include "function/functions.php";
 include "function/functions_1.php";
 include "function/get_productfunc.php";
 include "function/function_cart.php";
 // include "function/payment.php";


 ?>
<style>

 body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

/* Add padding to containers */
.container1 {
  padding: 16px;
  font-family: Arial, Helvetica, sans-serif;
}


.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}
</style>

 <html>

 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
 </head>
 <body>

 <div class="container">
       <!-- <nav>
          <h1>Navigation</h1>
       </nav>
 -->
       <head>
       <!--    <img src="h3.jpg" style="width:100%; height: 300px;">
  -->

  <img src="h4.jpg" style="width:100%; height: 300px;">


 <!--  <img src="h5.jpg" style="width:100%; height: 300px;">
 -->
       </head>
       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="index.php">Home</a></li>
                     <li><a href="#">Products</a></li>
                     <li><a href="#">My Account</a></li>
                     <li><a href="#">Sign Up</a></li>
                     <li><a href="#">Shopping Cart</a></li>
                     <li><a href="#">Contact Us</a></li>

                 </ul>


               <div id="searchbox">

                   <form method ="get" action="results.php" enctype="multipart/form-data">

                        <input type="text" name="user_query" placeholder="search Item" />
                        <input type="submit" name="search" value="search"/>

                   </form>  
                 

                 </div>  


                  

            </div>
       </nav>

    
       <section class="section2">

        
   
           <div class="content">
           
               <div class="left" style="background-color: yellow;">
                  <div class="card">
                   
                      <div id= "sidebar" style="background-color: #FFE4E1"> 
                       
                            <div id="sidebar_title">Vehicle Type</div>

                                <ul id="cats">
                                  <?php  getCats();?>

                                </ul> 


                              <div id="sidebar_title">Brands</div>

                             <ul id="cats">

                              <?php getBrands(); ?>


                             </ul>  

                           </div> 
                  </div>
               </div>

       


               <div class="right">
                  
                     <div id="content_area">

                        <!-- total items in the cart -->
                        <div style="background-color:lightblue " >


                            <h3> Total items:<?php total_items() ;?> </h3>
                            <h3 > Total Price:$ <?php total_price() ;?> </h3>
                            <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button>
                         
                         </div>


                         <?php cart()  ;  ?>
					 
				                  <!-- for gettig/ detecting the ip address of the iuser  <?php echo $ip = getIp(); ?> -->
                          <div class="container1">




                             <form method ="post" action="customer_register.php" enctype="multipart/form-data">

                                <table align="left" width="400" style="background: skyblue">

                                  <tr align="center">
                                    <td align="center"><h2>Create an Acount</h2></td>
                                  </tr>

                                  
                                  <tr>
                                    <td align="right">Customer Name:</td>
                                    <td><input type="text" name="c_name"></td>

                                  </tr>


                                  <tr>
                                    <td align="right">Customer Email:</td>
                                    <td><input type="text" name="c_email"></td>
                                  </tr>

                                  <tr>
                                    <td align="right">Customer Password:</td>
                                    <td><input type="password" name="c_pass"></td>
                                  </tr>

                                 




                                  <tr>
                                    <td align="right">Customer Country:</td>
                                    <td>
                                      <select name="c_country">

                                        <option> Select Country</option>
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Russia</option>
                                        <option>Germany</option>
                                        <option>Spain</option>
                                        

                                      </select>

                                    </td>
                                  </tr>



                                  <tr>
                                    <td align="right">Customer State:</td>
                                    <td><input type="text" name="c_city"></td>
                                  </tr>



                                  <tr>
                                    <td align="right">Customer Conatct:</td>
                                    <td><input type="text" name="c_contact"></td>
                                  </tr>



                                  <tr>
                                    <td align="right">Customer Address:</td>
                                    <td><input type="text" name="c_address"></td>
                                   
                                  </tr>

                                 



                                  <tr>

                                    <td><input type="submit" class="registerbtn" name="register" value="Create Account"/></td>
                                  </tr>

                                 

                                        


                                </table>
                               </form>




                        
						

                             
                         </div>

                                 
                        
                       </div>

                 
                 
                 </div>

                 
           </div>



       </section>
       
       <div class="clear">
       </div>
  </div>





<footer> 
          
      <style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

p{

  color: #999;
  line-height: 25px;

}



h2{

  font-size: 18px;
}
a:link{

  color: white;
}

/*icon*/

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row" style="width: auto;">
  <div class="column" style="background-color:#708090;">
   <h3>Our Newsletter</h3>
                     <h3>Contact Us</h3>
                     <p style=" font-size:22px; font-color: black; font-style: italic; text-decoration: underline;">Email::loremepsum@gmail.com</p>
                     <p style=" font-size:21px;font-style: italic; text-decoration: underline;">Phone::51813513514</p>
                    
  </div>
  <div class="column" style="background-color:#bbb;">
    <h3>Group members</h3>
                     <ul>
                       <li><h3 style="font-style: italic; text-decoration: underline;">Suresh Shrestha(project maneger/contributor)</h3></li>
                       <li><h3 style="font-style: italic; text-decoration: underline;">Sujit Tiwari(contributor)</h3></li>
                       <li><h3 style="font-style: italic; text-decoration: underline;">Monaj Pandey(contributor</h3></li>
                       <li><h3 style="font-style: italic; text-decoration: underline;">Nirmal Paudel(contributor</h3></li>

                     </ul>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Follow Us</h2>
                        <a class="fa fa-twitter"></a>
                        <a class="fa fa-google"></a>
                        <a class="fa fa-linkedin"></a>
                        <a class="fa fa-youtube"></a>
                        <a class="fa fa-instagram"></a>
                        <a class="fa fa-pinterest"></a>
                        <h2>Stay Connected</h2>
                        <form action="">
                         <input type="email" name="" style="width: 200px; height: 45px;">
                         <input type="submit" value="subscribe"style="width: 100px; height: 45px; color: black;">

                     </form>
  </div>


  <div class="column" style="background-color:#bbb;">
  
                    
<h3>Our Location</h3>

<div id="googleMap" style="width:320;height:370;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.931318770632!2d-95.90680278425175!3d33.242102680834066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864bc625f9e46695%3A0xabcd0521d6aa9a90!2sStudent%20Access%20and%20Success%20Center%20-%20One%20Stop%20Shop!5e0!3m2!1sen!2sus!4v1588177342911!5m2!1sen!2sus" width="auto;" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<h3>click to find our location::</h3>

</body>



</div>


 </footer>

 </body>
 </html> 

 <?php

 $con = mysqli_connect("localhost","root","","ecom");

  if(isset($_POST['register'])){

    $ip = getIp();

    $c_name =$_POST['c_name'];
    $c_email =$_POST['c_email'];
    $c_pass =$_POST['c_pass'];
    $c_country =$_POST['c_country'];
    $c_city =$_POST['c_city'];
    $c_contact =$_POST['c_contact'];
    $c_address =$_POST['c_address'];
   

   echo $insert_c= "INSERT INTO `customers`(customer_ip,customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address) VALUES ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address') ";
  



  $run_c = mysqli_query($con, $insert_c);


  $sel_cart= "select * carts where ip_add ='$ip'";

  $run_cart = mysqli_query($con, $sel_cart);


  $check_cart = mysqli_num_rows($run_cart);



  if($check_cart>0){

    $_SESSION['customer_email'] = $c_email;
 
    echo "<script>alert('Your account has been created')</script>";

    echo"<script>window.open('customer/my_account.php','_self')</script>";
  }

else{

   $_SESSION['customer_email'] = $c_email;
 
    echo "<script>alert('Your account has been created')</script>";

    echo"<script>window.open('http://localhost/ecommerce/customer_register.php','_self')</script>";
  }




}



  
  



  


 ?>