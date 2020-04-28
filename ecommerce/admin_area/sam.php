<!DOCTYPE html>

include "functions.php";

<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
#sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
#sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
#sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
#content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<nav style="background-color: green; height: 100px;"></nav>
<body>

  <!-- main body -->
<div class="containar">

<div id="sidenav" style="width: 15%">
 
<div id="sidebar_upper" style="height: 100px; background-color: white;">
<img src= "admin.jpeg" width="100px" height="100px">
</div>
<!-- sidebar -->
  <div id="sidebar_bottom">



 <a href="insert_product.php">Insert Product</a>
  <a href="index2.php?view_product">View Product</a>
  <a href="index2.php?insert_cat">Insert Category</a>
  <a href="index2.php?view_cats">View Categories</a>
  <a href="index2.php?insert_brand">Insert Brands</a>
  <a href="index2.php?view_brand">View Brands</a>
  <a href="index2.php?view_customers">View Customers</a>
  <a href="index2.php?view_orders">View Orders</a>
  <a href="index2.php?view_payments">View Payments</a>
  <a href="index2.php?logout.php">Logout</a>
  

</div>
</div>


<!-- content area -->
<div id="content" style="width: 85% background-color:pink;">
<div id="middle" style="background-color: black;"></div>>

<?php

if(isset($_GET['insert_product'])){

include("insert_product.php");

}



?>
</div>
</div>
</body>
</html>
