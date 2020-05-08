<?php 



						




$con = mysqli_connect("localhost","root","","ecom");






//getting the ip addresses of the user

						function getIp() {



									$ip = $_SERVER['REMOTE_ADDR'];
								 
									if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
										$ip = $_SERVER['HTTP_CLIENT_IP'];
									} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
										$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
									}
								 
									return $ip;
									
									
								}


// GETTING THE TOTAL ITEMS IN CART

function total_items(){


  if(isset($_GET['add_cart'])){


  	global $con;

  	$ip = getIp();

  	$get_items= "select * from carts where ip_add = '$ip'";

  	$run_items= mysqli_query($con,$get_items);

  	$count_items = mysqli_num_rows($run_items);

  }

  else{
     
    global $con;


  	$ip = getIp();

  	$get_items= "select * from carts where ip_add = '$ip'";

  	$run_items= mysqli_query($con,$get_items);

  	$count_items = mysqli_num_rows($run_items);

  }


  echo $count_items;
}



// GETTING THE TOTAL PRICE OF THE CART

function total_price(){



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

		$values = array_sum($product_price);

		$total += $values;




											


	}
  }

    echo $total;
    
}


	///// THE CART FUNCTION  to add the product with their product id to the cart table in datbasse 

                          function cart(){
									
									
									if(isset($_GET['add_cart'])){
										
										global $con;
										
										global $total;

										$ip = getIp();
										
										$pro_id = $_GET['add_cart'];
										
										$check_pro = "SELECT * FROM carts WHERE  ip_add ='$ip' AND p_id ='$pro_id'";
										
										$run_check = mysqli_query($con, $check_pro);
										
										
										if (mysqli_num_rows($run_check)>0){
											
											echo "";
										}
										
										else{
											
											

											$insert_pro = "INSERT INTO carts(p_id, ip_add, qty) VALUES ('$pro_id','$ip','')";


											
											$run_pro = mysqli_query($con, $insert_pro);
											
											
											echo"<script>windows.open('index.php','_self')</script>";
											
										}
										
									}
								}

							



							


						



?>
						