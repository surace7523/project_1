<?php

$con = mysqli_connect("localhost","root","","ecom");




if(isset($_GET['delete_cat'])){
	
$delete_id = $_GET['delete_cat'];

$delete_cat = "delete from categories where cat_id = '$delete_id'";

$run_delete = mysqli_query($con, $delete_cat);


if($run_delete){



	echo "<script>alert('Selected Categories has been deleted successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_cat','_self')</script>";
}

}


?>