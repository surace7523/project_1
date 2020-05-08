<?php 

session_start();

if(!isset($_SESSION['user_email'])){

  echo"<script>window.open('admin_login.php?not_admin=not an admin','_self')</script>";
}
else{





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
      <img src= "admin.jpg" width="200px" height="150px">
        <h2>Admin</h2>
        <ul>
            <li><a href="charts.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>portfolio</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>setting</a></li>

        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>


    <div class="main_content">





 <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
      <div class="navbar">
  
              <div class="dropdown">
                <button class="dropbtn">Settings 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" style="background-color: skyblue;">
                    <a href="insert_product.php">Insert Product</a>
                    <a href="admin.php?view_products">View Product</a>
                    <a href="admin.php?insert_cat">Insert Category</a>
                    <a href="admin.php?view_cat">View Categories</a>
                    <a href="admin.php?insert_brand">Insert Brands</a>
                    <a href="admin.php?view_brand">View Brands</a>
                    <a href="admin.php?view_customer">View Customers</a>
                    <a href="admin.php?view_orders">View Orders</a>
                    <a href="graph1.php">Reprts</a>
                    <a href="admin_login.php?admin_logout">Logout</a>
                </div>
              </div> 
            </div>


        <div class="header">Welcome!! Have a nice day.
          <div id="right" style="width: auto; height: 200px; background-color: pink;">

            <style>
              .flex-container {
                display: flex;
               background-color: DodgerBlue;
                            }

              .flex-container > div {
                   background-color: #f1f1f1;
                    margin: 40px;
                   padding: 40px;
                font-size: 30px;
                            }
            </style>

<body>



<div class="flex-container">
  <div>Investment::1000000
<img src= "invest.png" width="200px" height="150px">
  </div>


  <div>
    <?php 
        $con = mysqli_connect("localhost","root","","ecom");


         $query= "select SUM(qt)  as 'volume' from payments";

          $res = mysqli_query($con, $query);
          $data = mysqli_fetch_array($res);

          echo"SOld Items:".$data['volume'];
    ?>


      <img src= "cash.png" width="200px" height="150px">
  </div>



  <div>

    <?php
        $con = mysqli_connect("localhost","root","","ecom");



          $query= "select SUM(t_amount)  as 'sales' from payments";

          $res = mysqli_query($con, $query);
          $data = mysqli_fetch_array($res);

          echo"Sales:".$data['sales'];
      ?>
        <img src= "sold.png" width="200px" height="150px">
  </div>  




</div>

<div class="id">
  




  <?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "ecom");
$query = "SELECT * FROM acount1";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sales"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | How to use Morris.js chart with PHP & Mysql</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
  
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>






</div>
            
         

           

          </div>

        </div>  

  <div class="mid" style="width: auto; height: 600px; background-color: black;"></div>
        
     


        <div class="info">
           

          <?php

              if(isset($_GET['insert_product'])){

                include("insert_product.php");

                }

              if(isset($_GET['view_products'])){

                include("view_products.php");

                }

               if(isset($_GET['edit_pro'])){

                include("edit_pro.php");

                }

                 if(isset($_GET['insert_cat'])){

                include("insert_cat.php");

                }

                  if(isset($_GET['view_cat'])){

                include("view_cat.php");

                }

                  if(isset($_GET['view_brand'])){

                include("view_brand.php");

                }
                  if(isset($_GET['insert_brand'])){

                include("insert_brand.php");

                }
                 if(isset($_GET['view_customer'])){

                include("view_customer.php");

                }


                if(isset($_GET['view_orders'])){

                include("all_orders.php");

                }



                if(isset($_GET['admin_logout'])){

                include("admin_logout.php");

                }

               


            ?>

      </div>




    </div>
</div>

</body>

<footer style="width:auto; height: 400px; background-color: white">
  

</footer>>
</html>


<?php }








