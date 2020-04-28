 <form action="" method="post" enctype="multipart/form-data" style="background-color: orange;">
<table width="1000" align="center">
  

  <tr align="center" >
    <td colspan="7"><h2>All Products</h2>
      
    </td>
  </tr>

  <tr align="center" style="font-size: 16">

    <th>Num</th>
    <th>Title</th>
    <th>Image</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
    


  </tr>


<?php

$con = mysqli_connect("localhost","root","","ecom");



$get_pro = "select * from products";

$run_pro = mysqli_query($con, $get_pro);

$i=0;

while($row_pro = mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['product_id'];
$pro_title = $row_pro['product_title'];
$pro_image = $row_pro['product_images'];
$pro_price = $row_pro['product_price'];



$i++;






?>

<tr align="center">
  
<td><?php echo $i;?></td>
<td><?php echo $pro_title;?></td>
<td><img src="product_images/<?php echo $pro_image;?>" width="90px" height="110px"/></td>
<td><?php echo $pro_title;?></td>
<td><a href="admin.php?edit_pro=<?php echo $pro_id; ?>">Edit</a></td>
<td><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>">Delete</a></td>

</tr>
<?php } ?>

</table>
</form>