 <form action="" method="post" enctype="multipart/form-data" style="background-color: orange;">
<table width="1000" align="center">
  

  <tr align="center" >
    <td colspan="7"><h2>All Customers</h2>
      
    </td>
  </tr>

  <tr align="center" style="font-size: 16">

    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    


  </tr>


<?php

$con = mysqli_connect("localhost","root","","ecom");



$get_cus = "select * from customers";

$run_cus = mysqli_query($con, $get_cus);

$i=0;

while($row_cus = mysqli_fetch_array($run_cus)){

$cus_id = $row_cus['customer_id'];
$cus_name = $row_cus['customer_name'];
$cus_email = $row_cus['customer_email'];




$i++;






?>

<tr align="center">
  
<td><?php echo $i;?></td>
<td><?php echo $cus_name;?></td>
<td><?php echo $cus_email;?></td>
<td><a href="delete_customer.php?delete_customer=<?php echo $cus_id; ?>">Delete</a></td>

</tr>
<?php } ?>

</table>
</form>