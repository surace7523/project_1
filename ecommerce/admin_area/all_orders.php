 <form action="" method="post" enctype="multipart/form-data" style="background-color: orange;">
<table width="1000" align="center">
  

  <tr align="center" >
    <td colspan="7"><h2>All Brands</h2>
      
    </td>
  </tr>

  <tr align="center" style="font-size: 16">
  	<th>SN</th>
    <th>product Name</th>
    <th>quantity</th>
    <th>amount</th>
    


  </tr>


<?php
$con = mysqli_connect("localhost","root","","ecom");



$query= "select SUM(t_amount)  as 'sales' from payments";

$res = mysqli_query($con, $query);
$data = mysqli_fetch_array($res);

echo"total sales:".$data['sales'];



$query= "select SUM(qt)  as 'volume' from payments";

$res = mysqli_query($con, $query);
$data = mysqli_fetch_array($res);

echo"total quantity:".$data['volume'];



$con = mysqli_connect("localhost","root","","ecom");



$get_quan = "select * from payments";

$run_quan = mysqli_query($con, $get_quan);



while($row_quan = mysqli_fetch_array($run_quan)){

$quan_id = $row_quan['id'];
$quan_name = $row_quan['name'];
$quan_qt = $row_quan['qt'];
$quan_amount = $row_quan['t_amount'];








?>


<?php


?>

<tr align="center">
  
<td><?php echo $quan_id;?></td>
<td><?php echo $quan_name;?></td>
<td><?php echo $quan_qt;?></td>
<td><?php echo $quan_amount;?></td>



</tr>


<?php } ?>

</table>
</form>