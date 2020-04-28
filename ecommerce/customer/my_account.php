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
          

  <head>
  <img src="h3.jpg" style="width:100%; height: 300px;">
 
<!-- 
  <img src="h4.jpg" style="width:100%; height: 300px;">


  <img src="h5.jpg" style="width:100%; height: 300px;">
 -->
</head>                             

<br>










       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="../index.php">Home</a></li>
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
                       
                            <div id="sidebar_title"  style="float: left;">MENU</div>

                                <ul id="cats" style="background-color: grey;">
                                  <!-- <?php  getCats();?> -->


                                   <li><a href="my_order.php" style="background-color: grey">My orders</a></li>
                                   <li><a href="edit_page.php" style="background-color: grey">Settings</a></li>
                                   <li><a href="change_pass.php" style="background-color: grey">Edit Pass</a></li>
                                   <li><a href="delete_account.php" style="background-color: grey">Del Account</a></li>
                                   

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


                   
     <div id="product_box">


          <div style="background-color:white; height: 700px;" >

                 <h2 style="padding: 30px;">

                  <?php

                    if (isset($_SESSION['customer_email'])) {
                              

                         echo "<b> Welcome:</b><u>".$_SESSION['customer_email']."</u><b> to our account :</b>";
                             }



                   ?>
                               

                  </h2>



                  


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

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="car1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="car2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="car3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="car4.jpg" style="width:100%">
  <div class="text">Caption four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="car5.jpg" style="width:100%">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




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