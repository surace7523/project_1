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
       <header>
          <h1>Header</h1>
       </header>
       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="index1.php">Home</a></li>
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
           
               <div class="left">
                  <div class="card">
                   
                      <div id= "sidebar"> 
                       
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
       <footer>
         <h1>Footer</h1>
       </footer>
       <div class="clear">
       </div>
  </div>

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