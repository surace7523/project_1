<!DOCTYPE html>
<?php include "function/functions.php";?>
<?php include "function/functions_1.php";?>
<?php include "function/get_productfunc.php";?>

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

                     <li><a href="#">Home</a></li>
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

       <!-- <section class="section1">
             <h1>Section1</h1>
             <div class="content">
               <div class="card">
                  <div class="box">
                      Card1
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card2
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card3
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card4
                  </div>
               </div>
             </div>
       </section>
 -->
       <section class="section2">
        <!-- <div id="shoppingcart"> 
          <h1>Section2</h1> 
          
             <span style="float: left"><h2>BIG Sale!!!!!</h2>

            </span>
           </div> -->
        <!--  <div class="shoppingcart"> 
          <nav color><h1>Section2</h1> 
            
             <img src="cart.jpg" alt="cart" style="width:10px;height:20px;">
             <span style="float: left">BIG Sale!!!!!

            </span>

           </div>
          </nav>
          </div> -->
   
           <div class="content">
            <!-- <nav>
          <h2><a href="default.asp" target="_blank">This is a link</a></h2>
       </nav> -->
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

                          <div id="products_box">  <!--  fordetails buttton -->

                              <?php


                                global $con;
                              if(isset($_GET['pro_id'])){

                                $product_id=$_GET['pro_id'];  ///code get the product id as a details if particaular number of product id is clicked
                                $get_pro="select * from products where product_id='$product_id'";

                            
                                if(filter_var($product_id, FILTER_VALIDATE_INT)==false){
                                  die("invalid ID");
                                }

                                $run_pro = mysqli_query($con, $get_pro);

                                 while($row_pro = mysqli_fetch_array($run_pro)){


                                   $pro_id = $row_pro['product_id'];
                                   $pro_title = $row_pro['product_title'];
                                   $pro_price = $row_pro['product_price'];
                                   $pro_desc = $row_pro['product_desc'];
  
                                   $pro_image = $row_pro['product_images'];


                                   echo"

                                                  <div id='single_product'>

                                                   <h3>$pro_title</h3>
                                                <img src ='admin_area/product_images/$pro_image' width='400' height='300' />


                                               <p><b>$ $pro_price</b></p>
                                               <p> $pro_desc</p>


                                               <a href='index1.php?' style='float:left'>GO backs</a>
                                               <a href='index1.php?pro_id=$pro_id'button style ='float:right'>Add To Cart</button></a>

                                              </div>



                                         ";


                                }
                              }

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