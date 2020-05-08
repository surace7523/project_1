<?php
$con = mysqli_connect("localhost","root","","ecom");




if(isset($_GET['delete_customer'])){
	
$delete_id = $_GET['delete_customer'];

$delete_customer = "delete from customers where customer_id = '$delete_id'";

$run_delete = mysqli_query($con, $delete_customer);


if($run_delete){



	echo "<script>alert('Selected Customer has been deleted successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_customer','_self')</script>";
}

}


?>