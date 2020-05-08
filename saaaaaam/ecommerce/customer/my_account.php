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
                         <input type="email" name="" style="width: 200px; height: 45px;">
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