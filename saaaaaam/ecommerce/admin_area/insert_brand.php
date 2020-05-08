<form action= "" method="post">

<b>Insert New Brand</b>

<input type="text" name="new_brand"/>
<input type="submit" name="add_brand" value="Add_brand"/>

</form>



<?php

$con = mysqli_connect("localhost","root","","ecom");
;


if(isset($_POST['add_brand'])){
  $new_brand= $_POST['new_brand'];


  $insert_brand = "insert into brands (brand_title) value ('$new_brand')";

  $run_brand= mysqli_query($con,$insert_brand);

  if($run_brand){

  	echo "<script>alert('New Brand has been added  successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_brand','_self')</script>";
  }

}

?>