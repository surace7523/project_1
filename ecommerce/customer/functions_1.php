<?php
$con = mysqli_connect("localhost","root","","ecom");



//Dynamically getting the cetegores MODIFYING CATEGORIES from database

function getBrands(){

global $con;

$get_brands = "select * from brands";

$run_brands = mysqli_query($con, $get_brands);


while($row_brands = mysqli_fetch_array($run_brands)){

	$brand_id = $row_brands['brand_id'];
	$brand_title = $row_brands['brand_title'];



echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";




}

}






                                       

?>



