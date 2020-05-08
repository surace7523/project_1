<?php

$con = mysqli_connect("localhost","root","","ecom");



if(isset($_GET['delete_pro'])){
	
$delete_id = $_GET['delete_pro'];

$delete_pro = "delete from products where product_id = '$delete_id'";

$run_delete = mysqli_query($con, $delete_pro);


if($run_delete){



	echo "<script>alert('Selected Product has been deleted successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_products','_self')</script>";
}

}


?>