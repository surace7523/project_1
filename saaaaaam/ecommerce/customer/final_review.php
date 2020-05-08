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


          <div style="background-color:pink; height: 800px;" >

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


                              <table align="left" width="800px" bgcolor="skyblue">

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
                              <form action="" method="post">
                                <h2>Enter Car Detail</h2>
                                <tr>
        
                                  <td align="right"><b>Product_name:</b></td>
                                  <td><input type="text" name="pro_name" value=""></td>

                                  </tr>
                                  <tr>
        
                                  <td align="right"><b>Pro_quantity:</b></td>
                                  <td><input type="text" name="pro_quantity" value=""></td>

                                  </tr>

                                  <tr>
        
                                  <td align="right"><b>Product_amount:</b></td>
                                  <td><input type="text" name="pro_amount" value=""></td>

                                  </tr>
         
                                
                                  <input type="submit" name="submit" value="submit">
                                    <?php

                                      $con = mysqli_connect("localhost","root","","ecom");


                                      $user = $_SESSION['customer_email'];

                                        if(isset($_POST['submit'])){
  
                                          $name =$_POST['pro_name'];
                                           $qt =$_POST['pro_quantity'];
                                            $amount =$_POST['pro_amount'];

                                            $con = mysqli_connect("localhost","root","","ecom");

                                            $query="INSERT INTO `payments` (`id`, `name`, `qt`, `t_amount`) VALUES (NULL, '$name', '$qt', '$amount')";

                                            

                                        



                                            $insert_pro = mysqli_query($con, $query);



   
                                   
                                

                                                      }  
  



  


                                  ?>



                              </form>

                            </form>



                            <h2 style="text-align: center;"> submit Paymentt??</h2>


                             <form method ="post"  enctype="multipart/form-data">

                                <table align="center" width="500" style="background:pink">
                                 

                                  
                                  <tr>
                                    <td>
                                <input type="submit" name="yes" value="YES" style="background-color: red; float: center; width: 170px; height: 40px;">
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
  



   
    echo "$total";


    echo "<script>alert('Thank YOu For Your Purchase !!!!!')</script>";
    echo"<script>window.open('my_account.php','_self')</script>";

}


if(isset($_POST['no']))
{
  echo "<script>alert('Directing To Homepage....... !!!!!')</script>";
  echo"<script>window.open('index.php','_self')</script>";


}  
  



  


 ?>




                        
            

                             
                         </div>



                              </div>

                          

                             
                         </div>

                                 
                        
                       </div>



                 
                 
                 </div>
 
  

           
            <!--      
           </div> -->



         </section>
      

           


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
                         <input type="email" name="" style="width: 150px; height: 40px;">
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