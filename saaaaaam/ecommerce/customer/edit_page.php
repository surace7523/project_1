<!DOCTYPE html>



<!-- <?php

session_start();
include "functions.php";
include "functions_1.php";
include "get_productfunc.php";
 include "function_cart.php";


 ?> -->

 <html>

 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="c_style.css">
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
 </head>
 <body>

 <div class="container">
       <!-- <nav>
          <h1>Navigation</h1>
       </nav>
 -->
       
  <head>
  <img src="h3.jpg" style="width:100%; height: 300px;">
 
<!-- 
  <img src="h4.jpg" style="width:100%; height: 300px;">


  <img src="h5.jpg" style="width:100%; height: 300px;">
 -->
</head>  
       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="ecommerce/index.php">Home</a></li>
                     <li><a href="#">Products</a></li>
                     <li><a href="my_account.php">My Account</a></li>
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

    
       <section class="section2" style="background-color: black;">


    
   
           <div class="content">
           
               <div class="left">
                  <div class="card">
                   
                      <div id= "sidebar" style="height:400px; background-color: grey;"> 
                       
                            <div id="sidebar_title">MENU</div>

                                <ul id="cats" style="background-color: grey;">
                                  <!-- <?php  getCats();?> -->

                                   <li><a href="my_account.php?my_orders" style="background-color: grey">My orders</a></li>
                                   <li><a href="my_account.php?edit_account" style="background-color: grey">Settings</a></li>
                                   <li><a href="my_account.php?change_pass" style="background-color: grey">Edit Pass</a></li>
                                   <li><a href="my_account.php?delete_account" style="background-color: grey">Del Account</a></li>
                                   

                                </ul> 


                              

                           </div> 
                  </div>


               </div>

       


               <div class="right">
                  
                     <div id="content_area">

                        <!-- total items in the cart -->
                        <div style="background-color:pink;" >


                          <?php

                            if(!isset($_SESSION['customer_email'])){


                              echo "<a href ='checkout.php' style= 'float:right'>Login</a>";
                            }

                            else{

                               echo "<a href='logout.php' style= 'float:right'>LogOut</a>";



                            }



                            ?>
                       
                            


                             <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button>


                            <p style="font-size:150%;"> Total items:<?php total_items() ;?> 
                             _____Total Price:$ <?php total_price() ;?> </p>
                           

                            
                         
                         </div>


                        
            

                             
                         </div>



<!-- main content box for edit update and track order -->
                   
     <div id="product_box">


          <div style="background-color:pink; height: 500px;" >

                 <h2 style="padding: 30px;">

                  <?php

                    if (isset($_SESSION['customer_email'])) {
                              

                         echo "<b> Welcome:</b><u>".$_SESSION['customer_email']."</u><b> to our account :</b>";
                             }



                   ?>
                               

                  </h2>



                     <?php

                             if(isset($_GET['my_orders'])){

                              if(!isset($_GET['edit_account'])){

                                if(!isset($_GET['change_pass'])){

                                  if(!isset($_GET['delete_account'])){


                                 


                                
                              }

                                
                              }


                              }
                             

                             }






                        ?>

                        <?php

                                     $user = $_SESSION['customer_email'];

                                      $get_customer ="select * from customers where customer_email='$user'";

                                      $run_customer = mysqli_query($con, $get_customer);

                                      $row_customer = mysqli_fetch_array($run_customer);

                                      $c_id = $row_customer['customer_id'];


                                      $name = $row_customer['customer_name'];
                                      $email = $row_customer['customer_email'];
                                      $pass = $row_customer['customer_pass'];
                                      $country = $row_customer['customer_country'];
                                      $city = $row_customer['customer_city'];
                                      $contact = $row_customer['customer_contact'];
                                      $address = $row_customer['customer_address'];






                        ?>
 <!-- register form  -->
                        <div class="container1">




                             <form method ="post"  enctype="multipart/form-data">

                                <table align="left" width="400" style="background: skyblue">

                                  <tr align="center">
                                    <td align="center"><h2>Update your Acount</h2></td>
                                  </tr>

                                  
                                  <tr>
                                    <td align="right">Customer Name:</td>
                                    <td><input type="text" name="c_name"  value="<?php echo $name; ?>"></td>

                                  </tr>


                                  <tr>
                                    <td align="right">Customer Email:</td>
                                    <td><input type="text" name="c_email"   value="<?php echo $email; ?>"></td>
                                  </tr>

                                  <tr>
                                    <td align="right">Customer Password:</td>
                                    <td><input type="password" name="c_pass"   value="<?php echo $pass; ?>"></td>
                                  </tr>

                                 




                                  <tr>
                                    <td align="right">Customer Country:</td>
                                    <td>
                                      <select name="c_country" disabled>

                                        <option>"<?php echo $country; ?>"</option>
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
                                    <td><input type="text" name="c_city"   value="<?php echo $city; ?>"></td>
                                  </tr>



                                  <tr>
                                    <td align="right">Customer Conatct:</td>
                                    <td><input type="text" name="c_contact"   value="<?php echo $contact; ?>"></td>
                                  </tr>



                                  <tr>
                                    <td align="right">Customer Address:</td>
                                    <td><input type="text" name="c_address"   value="<?php echo $address; ?>"></td>
                                   
                                  </tr>

                                 



                                  <tr>

                                    <td><input type="submit" class="registerbtn" name="update" value="update Account"/></td>
                                  </tr>

                                 

                                        


                                </table>
                               </form>

 <?php

$con = mysqli_connect("localhost","root","","ecom");



  if(isset($_POST['update'])){

    $ip = getIp();

    $customer_id =$c_id;

    $c_name =$_POST['c_name'];
    $c_email =$_POST['c_email'];
    $c_pass =$_POST['c_pass'];
    $c_country =$_POST['c_country'];
    $c_city =$_POST['c_city'];
    $c_contact =$_POST['c_contact'];
    $c_address =$_POST['c_address'];
   

   echo $update_c= "update customers set customer_name= '$c_name', customer_email= '$c_email', customer_pass='$c_pass' , customer_country= '$c_country', customer_city= '$c_city' , customer_contact= '$c_contact', customer_address='$c_address' where customer_id='$customer_id'";
  



  $run_update = mysqli_query($con, $update_c);





  if($run_update){

   
 
    echo "<script>alert('Your account has been successfully updated')</script>";

    echo"<script>window.open('my_account.php','_self')</script>";
  }





}



  
  



  


 ?>




                        
            

                             
                         </div>



                              </div>

                          

                             
                         </div>

                                 
                        
                       </div>



                 
                 
                 </div>
 
                    <footer  style="background-color: #2c292f"> 

                      <img src= "foot.jpg" width="1000"height="300">


        <!-- <div class="container"> -->
          
</footer>
  

           
            <!--      
           </div> -->



         </section>
      

           


     </div>

 

       
       
   </div>




 </body>
  


 </html> 