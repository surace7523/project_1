<div class="insert">
<!DOCTYPE>
<?php

$con = mysqli_connect("localhost","root","","ecom");

?><!---direct connection with database of category---->

<html>

	<head>
		
		<title>Insert Product</title>


         
	</head>


 <body bgcolor="green">
	<form action="?"method="post" enctype="multipart/form-data">

		<table align="center" width="700" border="2" bgcolor="yellow">

			<tr align="center">
				
				<td colspan="8"><h2>Insert the products</h2></td>

		     </tr>


			<tr>
				
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title"  /></td>

		     </tr>



		     <tr>
				
				<td align="right"><b>Product Category:</b></td>
				<td>
				  <select name="product_cat">
					<option>select category</option>
					<?php

						$get_cats = "select * from categories";

							$run_cats = mysqli_query($con, $get_cats);


							while($row_cats = mysqli_fetch_array($run_cats))
							{

								$cat_id = $row_cats['cat_id'];
								$cat_title = $row_cats['cat_title'];



							//	echo "<option value>$cat_title</option>";
							echo "<option value= '$cat_id'>$cat_title</option>";




							 }

					?>
				  </select>
				</td>
		     </tr>
		     

		     <tr>
				
				<td align="right"><b>Product Brand:</b></td>
			      <td>
			      	<select name="product_brand">
					  <option>select Brand</option>


					  	<?php  

					  			$get_brands = "select * from brands";

								$run_brands = mysqli_query($con, $get_brands);


									while($row_brands = mysqli_fetch_array($run_brands)){

										$brand_id = $row_brands['brand_id'];
										$brand_title = $row_brands['brand_title'];



										echo "<option value= '$brand_id'>$brand_title</option>";




									}









					  		 ?>



		    	     </select>
		          </td>
		        </tr>
		     

		     <tr>
					
 						 <td align="right"><b>Product Image:</b></td>
						 <td><input type="file" name="file"/></td>
						
  	
  
     
  
		

				

		     </tr>
		     

		     <tr>
				
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" value=""></td>

		     </tr>
		     

		     <tr>
				
				<td align="right"><b>Product Description:</b></td>
				<td>
					
					  <textarea  name="product_desc" cols="20" rows="10" ></textarea>
				</td>

		     </tr>
		     

		      <tr>
				
				<td align="right"><b>Product keywords:</b></td>
				<td><input type="text" name="product_keywords" value=""></td>

		     </tr>
		     
		     <tr>
				
				<td align="center"colspan="8"><input type="submit" name="upload" value="upload Image"/></td>




  	                


		     </tr>
		     


		</table>


	</form>



</body>


</html>



<?php

if (isset($_POST['upload'])) {

////getting text from form field



$product_cat= $_POST['product_cat'];
$product_brand= $_POST['product_brand'];
$product_title= $_POST['product_title'];
$product_price= $_POST['product_price'];
$product_desc= $_POST['product_desc'];
$product_keywords= $_POST['product_keywords'];


 	// Get image name
 $file_name = $_FILES['file']['name'];
  	// Get text
 $file_type = $_FILES['file']['type'];
 $file_size = $_FILES['file']['size'];
 $file_tem_Loc = $_FILES['file']['tmp_name'];
 $file_store ="product_images/".$file_name;

 move_uploaded_file($file_tem_Loc, $file_store);






 echo $insert_product = "insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_keywords,product_images) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_keywords','$file_name')";

  echo "Variable 'a' is set.";
 


$con = mysqli_connect("localhost","root","","ecom");



$insert_pro = mysqli_query($con, $insert_product);


if($insert_pro){

	echo "<script>alert('inserted')</script>";
}

}









?>

</div>