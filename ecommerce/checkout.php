<!DOCTYPE html>
<?php 

session_start();
 include "function/functions.php";
 include "function/functions_1.php";
 include "function/get_productfunc.php";
 include "function/function_cart.php";


 ?>

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
                  
                     <div id="content_area" style="width: 850px;">

                        <!-- total items in the cart -->
                        <div style="background-color:lightgray " >

<!-- 
                            <h3> Total items:<?php total_items() ;?> </h3>
                            <h3 > Total Price:$ <?php total_price() ;?> </h3>
                            <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button> -->

                            <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button>


                            <p style="font-size:150%;"> Total items:<?php total_items() ;?> 
                             _____Total Price:$ <?php total_price() ;?> </p>
                         
                         </div>


                         <?php cart()  ;  ?>
					 
				                  <!-- for gettig/ detecting the ip address of the iuser  <?php echo $ip = getIp(); ?> -->
                          <div id="products_box">

                            <?php


                            if(!isset($_SESSION['customer_email'])){

                              include("customer_login.php");

                            }
                            else {

                              include("payment.php");
                            }


                            ?>

                       
                        
						

                             
                         </div>

                                 
                        
                       </div>

                 
                 
                 </div>

                 
           </div>



       
 </html> 