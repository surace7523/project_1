
<?php


$con = mysqli_connect("localhost","root","","ecom");




function getPro(){



						if(!isset($_GET['cat'])){	
						
						
							if(!isset($_GET['brand'])){

									global $con;

									$get_pro="select * from products order by RAND() LIMIT 0,10";

									$run_pro = mysqli_query($con, $get_pro);

									while($row_pro = mysqli_fetch_array($run_pro)){


										$pro_id = $row_pro['product_id'];
										$pro_cat = $row_pro['product_cat'];
										$pro_brand= $row_pro['product_brand'];
										$pro_title = $row_pro['product_title'];
										$pro_price = $row_pro['product_price'];
										$pro_desc = $row_pro['product_desc'];
	
										$pro_image = $row_pro['product_images'];


										echo"

											<div id='single_product' style='float:left'>

												<h3>$pro_title</h3>
												<img src ='admin_area/product_images/$pro_image' width='180' height='180' />


												<p><b>Price: $pro_price</b></p>
												<a href='details.php?pro_id=$pro_id' button style ='float:left'>Details</button></a>

												<a href='index.php?add_cart=$pro_id' button style ='float:right'>Add To Cart</button></a>

											</div>



										";


										
									}
							   }



							}
							
                }
				
				
				
		
		
/////category based product		
				
				
				
function getcatPro(){



						if(isset($_GET['cat'])){	
						
						$cat_id= $_GET['cat'];
							
									global $con;

									$get_cat_pro="select * from products where product_cat='$cat_id'";

									$run_cat_pro = mysqli_query($con, $get_cat_pro);
									
									$count_cats= mysqli_num_rows($run_cat_pro);
									
									while($row_cat_pro = mysqli_fetch_array($run_cat_pro,true)){


										$pro_id = $run_cat_pro['product_id'];
										$pro_cat = $run_cat_pro['product_cat'];
										$pro_brand= $run_cat_pro['product_brand'];
										$pro_title = $run_cat_pro['product_title'];
										$pro_price =$run_cat_pro['product_price'];
										
	
										$pro_image = $run_cat_pro['product_images'];



										
									if($count_cats==0){
										
										
										echo"<h2>no products</h2>";
									}
									
									
									else{

										echo"

											<div id='single_product'>

												<h3>$pro_title</h3>
												<img src ='admin_area/product_images/$pro_image' width='180' height='180' />


												<p><b>$ $pro_price</b></p>
												<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
												<a href='index.php?pro_id=$pro_id'><button style ='float:right'>Add To Cart</button></a>

											</div>



										";


										
									}
							   



						
						
						
						
						
						
									}
						}	
							
                   







				   }
				
				
				
				
				
				
				
				
				
?>