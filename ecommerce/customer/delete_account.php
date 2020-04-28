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

                     <li><a href="ecommerce/index1.php">Home</a></li>
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
                        <div style="background-color:white;" >


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


          <div style="background-color:pink; height: 400px;" >

                 <h2 style="padding: 30px;">

                  <?php

                    if (isset($_SESSION['customer_email'])) {
                              

                         echo "<b> Welcome:</b><u>".$_SESSION['customer_email']."</u><b> to our account :</b>";
                             }



                   ?>
                               

                  </h2>



                     

            
 <!-- register form  -->
                        <div class="container1">



                            <h2 style="text-align: center;"> Are You sure to delete your account??</h2>
                             <form method ="post"  enctype="multipart/form-data">

                                <table align="center" width="500" style="background:pink">
                                 

                                  
                                  <tr>
                                    <td>
                                <input type="submit" name="yes" value="YES,Delete my account" style="background-color: red; float: center; width: 170px; height: 40px;">
                              </td>
                              </tr>
                                 

                                

                                  <tr>
                                    <td>
                                 <input type="submit" name="no" value="NO,continue with account" style="background-color: green; float:center; width: 170px; height: 40px;" />
                               </td>
                                </tr>

                                </table>
                               </form>

 <?php

$con = mysqli_connect("localhost","root","","ecom");


  $user = $_SESSION['customer_email'];

  if(isset($_POST['yes'])){
  



    $delete_customer= "delete from customers where  customer_email='$user'";

    $run_customer = mysqli_query($con,$delete_customer);
    


    echo "<script>alert('Account has been successfully deleted !!!!!')</script>";
    echo"<script>window.open('my_account.php','_self')</script>";

}


if(isset($_POST['no']))
{
  echo "<script>alert('WELCOME BACK !!!!!')</script>";
  echo"<script>window.open('my_account.php','_self')</script>";


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