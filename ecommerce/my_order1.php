<!DOCTYPE html>



<!-- <?php

session_start();
include "functions.php";
include "functions_1.php";
include "get_productfunc.php";
 include "function_cart.php";
include "cart.php";

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
  <!-- <img src="h3.jpg" style="width:100%; height: 300px;"> -->
 

  <img src="h4.jpg" style="width:100%; height: 300px;">


  <!-- <img src="h5.jpg" style="width:100%; height: 300px;"> -->

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


          <div style="background-color:pink; height: 600px;" >

                 <h2 style="padding: 30px;">

                  <?php

                    if (isset($_SESSION['customer_email'])) {
                              

                         echo "<b> Welcome:</b><u>".$_SESSION['customer_email']."</u><b> to our account :</b>";
                             }



                   ?>
                               

                  </h2>



                     

            
 <!-- register form  -->
                        <div class="container1">



                               <!-- start of  cart home boix to update the cart -->

                            <form action="" method="post" enctype="multipart/form-data">


                              <table align="left" width="800px" bgcolor="grey">

                                <tr align="center">
                                  
                                  <td colspan="6"><h2>Your Order</h2></td>

                                </tr>

                                <tr align= "center">

                                 
                                  <th>Products</th>
                                  <th>Quantity</th>
                                  <th>Total</th>

                                </tr>

<?php 


    $total = 0;
     

    global $con;

    $ip = getIp();

    $sel_price = "select * from carts where ip_add = '$ip'";

    $run_price = mysqli_query($con, $sel_price);

    ///$cou_items = mysqli_num_rows($run_items);

  while ($p_price = mysqli_fetch_array($run_price)) {
    

    $pro_id = $p_price['p_id'];

    $pro_price = " select * from products where product_id='$pro_id'";

    $run_pro_price = mysqli_query($con,$pro_price);

  while ($pp_price = mysqli_fetch_array($run_pro_price)) {


    $product_price = array($pp_price['product_price']);

    $product_title = $pp_price['product_title'];

    $product_image = $pp_price['product_images'];

    $single_price = $pp_price['product_price'];

    
    $values = array_sum($product_price);

    $total += $values;








 ?>





    <tr>

      <td><?php echo $product_title; ?><br>
        <img src="../admin_area/product_images/<?php echo $product_image;?>" width="70px" height="80px"/>
      </td>

      <td><input type="text"  size= "2" name= "qty" value="<?php echo $_SESSION['qty'];  ?>"/></td>



      <!-- UPDATING THE CART QUANTITY -->

       <?php 

       if(isset($_POST['update_cart']))


         $con = mysqli_connect("localhost","root","","ecom");


               if(isset($_POST['update_cart'])){


               $ip = getIp();



                $qty = $_POST['qty'];
                 

                $update_qty ="update carts set qty = '$qty' ";

                $run_qty = mysqli_query($con, $update_qty);


                $_SESSION['qty'] = $qty;

               // show cart Quantity 
                echo"$qty";
                
                

                $total = $total * $qty;

              }
          





         ?>



      <td><?php echo"$".$single_price ;?></td>



    </tr>


   
<?php }} ?>



<!-- TOTAL PRICE  -->
 <tr align="right">
      
      <td colspan="3"><b>TOtal amount:</b></td>
      <td colspan="1"><?php echo "$" .$total; ?></td>


 </tr>




 
                              </table>

                            </form>



                            






                        
            

                             
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