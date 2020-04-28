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

 <div class="container" style="background-color: black;">


 <style>
  #container{
    background-color: black;
  }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>
          

                               <!-- image slider -->
<div class="slideshow-container">

<!-- <div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="h1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="h2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>
 -->
<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="h3.jpg" style="width:100%; height: 300px;">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="h4.jpg" style="width:100%; height: 300px;">
  <div class="text">Caption four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="h5.jpg" style="width:100%; height: 300px;">
  <div class="text">Caption five</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


     <!--   </header> -->
       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="index.php">Home</a></li>
                     <li><a href="admin_area/admin_login.php">Admin</a></li>
                     <li><a href="customer/my_account.php">My Account</a></li>
                     <li><a href="checkout.php">Sign Up</a></li>
                     <li><a href="cart.php">Shopping Cart</a></li>
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

       
       <section class="section2" style="background-color: white; ">

   
           <div class="content">
           
               <div class="left">
                  <div class="card">
                   
                      <div id= "sidebar" style="background-color: grey;"> 
                       
                            <div id="sidebar_title">Vehicle Type</div>

                                <ul id="cats" style="background-color: grey;">
                                  <?php  getCats();?>

                                </ul> 


                              <div id="sidebar_title">Brands</div>

                             <ul id="cats" style="background-color: grey;">

                              <?php getBrands(); ?>


                             </ul>  

                           </div> 
                  </div>
               </div>

       


               <div class="right">
                  
                     <div id="content_area">

                        <!-- total items in the cart -->
                        <div style="background-color:lightblue " >


                          <?php

                            if(!isset($_SESSION['customer_email'])){


                              echo "<a href ='checkout.php' style= 'float:right'>Login</a>";
                            }

                            else{

                               echo "<a href='logout.php' style= 'float:right'>LogOut</a>";



                            }



                            ?>
                            <h3><?php

                             if (isset($_SESSION['customer_email'])) {
                              

                              echo "<b> Welcome:</b>".$_SESSION['customer_email']."<b> to our account :</b>";
                             }



                             ?></h3>


                             <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button>


                            <p style="font-size:150%;"> Total items:<?php total_items() ;?> 
                             _____Total Price:$ <?php total_price() ;?> </p>
                           

                            
                         
                         </div>


                         <?php cart()  ;  ?>
					 
				                  <!-- for gettig/ detecting the ip address of the iuser  <?php echo $ip = getIp(); ?> -->
                          <div id="products_box">


                          <!-- function to display home page content -->
                          <?php getPro(); ?>


                          <!-- to display category based poducts -->
						  
                         <!--  <?php getcatPro(); ?>   -->

 
                           
						              <!-- to get brand based product -->
                        
						

                             
                         </div>

                                 
                        
                       </div>

                 
                 
                 </div>

                 
           </div>



       </section>
       <footer  style="background-color: #2c292f"> 

                      <img src= "foot.jpg" width="1000"height="300">


        <!-- <div class="container"> -->
          
</footer>

         <div class="clear">


          

      </div>

    

       
       
  </div>

 </body>
 </html> 





  