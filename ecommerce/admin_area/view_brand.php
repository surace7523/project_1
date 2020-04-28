 <form action="" method="post" enctype="multipart/form-data" style="background-color: orange;">
<table width="1000" align="center">
  

  <tr align="center" >
    <td colspan="7"><h2>All Brands</h2>
      
    </td>
  </tr>

  <tr align="center" style="font-size: 16">

    <th>Brand Id</th>
    <th>Brand Title</th>
    <th>Delete</th>
    


  </tr>


<?php


$con = mysqli_connect("localhost","root","","ecom");



$get_brand = "select * from brands";

$run_brand = mysqli_query($con, $get_brand);

$i=0;

while($row_brand = mysqli_fetch_array($run_brand)){

$brand_id = $row_brand['brand_id'];
$brand_title = $row_brand['brand_title'];

$i++;






?>

<tr align="center">
  
<td><?php echo $i;?></td>
<td><?php echo $brand_title;?></td>



<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>">Delete</a></td>

</tr>
<?php } ?>

</table>
</form>