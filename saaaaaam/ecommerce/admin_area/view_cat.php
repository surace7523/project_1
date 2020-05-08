 <form action="" method="post" enctype="multipart/form-data" style="background-color: orange;">
<table width="1000" align="center">
  

  <tr align="center" >
    <td colspan="7"><h2>All Categories</h2>
      
    </td>
  </tr>

  <tr align="center" style="font-size: 16">

    <th>cat Id</th>
    <th>Cat Title</th>
    <th>Delete</th>
    


  </tr>


<?php


$con = mysqli_connect("localhost","root","","ecom");



$get_cat = "select * from categories";

$run_cat = mysqli_query($con, $get_cat);

$i=0;

while($row_cat = mysqli_fetch_array($run_cat)){

$cat_id = $row_cat['cat_id'];
$cat_title = $row_cat['cat_title'];

$i++;






?>

<tr align="center">
  
<td><?php echo $i;?></td>
<td><?php echo $cat_title;?></td>



<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>">Delete</a></td>

</tr>
<?php } ?>

</table>
</form>