<form action= "" method="post">

<b>Insert New Category</b>

<input type="text" name="new_cat"/>
<input type="submit" name="add_cat" value="Add_cat"/>

</form>



<?php

$con = mysqli_connect("localhost","root","","ecom");



if(isset($_POST['add_cat'])){
  $new_cat= $_POST['new_cat'];


  $insert_cat = "insert into categories (cat_title) value ('$new_cat')";

  $run_cat= mysqli_query($con,$insert_cat);

  if($run_cat){

  	echo "<script>alert('New category has been added  successfully!!!')</script>";
	echo "<script>window.open('admin.php?view_cat','_self')</script>";
  }

}

?>