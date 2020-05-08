

<!DOCTYPE html>
<html>
 <head>
  <title>Enter Sales Report</title>
  
  
 </head>
 <body>
 <div class="graph" style="height: 200px; width: auto; background-color: lightgreen;">
  <form action="" method="post">
                                <h2>Enter sales Report</h2>
                                <tr>
        
                                  <td align="right"><b>year:</b></td>
                                  <td><input type="text" name="year" value=""></td>

                                  </tr>
                                  <tr>
        
                                  <td align="right"><b>Purchase:</b></td>
                                  <td><input type="text" name="purchase" value=""></td>

                                  </tr>

                                  <tr>
        
                                  <td align="right"><b>sales:</b></td>
                                  <td><input type="text" name="sales" value=""></td>

                                  </tr>
                                  <tr>
        
                                  <td align="right"><b>profit:</b></td>
                                  <td><input type="text" name="profit" value=""></td>

                                  </tr>
         
         
                                
                                  <input type="submit" name="submit" value="submit">
                                    <?php

                                      $con = mysqli_connect("localhost","root","","ecom");



                                        if(isset($_POST['submit'])){
  
                                          $y =$_POST['year'];
                                           $p =$_POST['purchase'];
                                            $s =$_POST['sales'];
                                             $pr =$_POST['profit'];

                                            $con = mysqli_connect("localhost","root","","ecom");

                                            $query="INSERT INTO `acount1` (`id`, `year`, `purchase`, `sales`, `profit`) VALUES (NULL, '$y', '$p', '$s','$pr')";




                                        



                                            $insert_pro = mysqli_query($con, $query);



   
                                   
                                

                                                      }  
  



  


                                  ?>



                              </form>

 </body>
</html>



