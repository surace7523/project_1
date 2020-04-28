<?php
$con = mysqli_connect("localhost","root","","ecom");




if(isset($_GET['delete_brand'])){
	
$delete_id = $_GET['delete_brand'];

$delete_brand = "delete from brands where brand_id = '$delete_id'";

$run_delete = mysqli_query($con, $delete_brand);


if($run_delete){



	echo "<script>alert('Selected Categories has been deleted successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_brand','_self')</script>";
}

}


?>