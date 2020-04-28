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
                  
                     <div id="content_area">

                        <!-- total items in the cart -->
                        <div style="background-color:skyblue"  >


                           

                            <?php

                            if(!isset($_SESSION['customer_email'])){


                              echo "<a href ='checkout.php' style= 'float:right'>Login</a>";
                            }

                            else{

                               echo "<a href='logout.php' style= 'float:right'>LogOut</a>";



                            }



                            ?>
                             
                             <?php

                             if (isset($_SESSION['customer_email'])) {
                              

                              echo "<b> Welcome:</b>".$_SESSION['customer_email']."<b> to our account :</b>";
                             }



                             ?>



                            <h3 >BiGG SALE!!!!! </h3>
                         
                         </div>


                        <!--  <?php cart()  ;  ?> -->
					 
				                  <!-- for gettig/ detecting the ip address of the iuser  <?php echo $ip = getIp(); ?> -->
                          <div id="products_box">

                           
            <!-- start of  cart home boix to update the cart -->

                            <form action="" method="post" enctype="multipart/form-data">


                              <table align="left" width="850px" bgcolor="skyblue">

                                <tr align="center">
                                  
                                  <td colspan="6"><h2>Proceed TO CheckOut</h2></td>

                                </tr>

                                <tr align= "center">

                                  <th>Remove</th>
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
      <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"/></td>
      <td><?php echo $product_title; ?><br>
        <img src="admin_area/product_images/<?php echo $product_image;?>" width="70px" height="80px"/>
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




 <tr>
   <td><button><input type="submit" name="remove_cart" value= "remove_cart"/></button></td>
   <td><button><input type="submit" name="update_cart" value= "update_cart"/></button></td>
   <td><button><input type="submit" name="continue_shopping" value= "continue_shopping"/></button></td>
   <td><a href="checkout.php"  button style='float:right'>checkout</button></a></td>
 

 </tr>
                              </table>

                            </form>

                        
                         
                        <!--  // to delete

                          ///try making a seoerate function and include] -->
                        
                     <?php 





          
       //// function Rupdatecart(){



                     $con = mysqli_connect("localhost","root","","ecom");

                         $ip = getIp();

                         if(isset($_POST['remove_cart'])){

                            foreach ($_POST['remove'] as $remove_id) {
                             
                              $delete_product ="DELETE FROM `carts` WHERE  p_id ='$remove_id' AND ip_add = '$ip'";

                              $run_delete = mysqli_query($con, $delete_product);

                              if($run_delete){

                                echo "<script>window.open('cart.php','self')</script>";
                                echo "<script>window.open('cart.php','self')</script>";

                              }

                           }

                          }


                          if(isset($_POST['continue_shopping'])){

                            echo "<script>window.open('index.php','self')</script>";

                          }


                        //// echo @$up_cart = Rupdatecart();

                           



                           ?>

                      

                   
                        
						

                             
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