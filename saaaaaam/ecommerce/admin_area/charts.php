<div class="chart" style="width: 500px; height: 400px; align-content: right;">
<!DOCTYPE>


<?php

$con = mysqli_connect("localhost","root","","ecom");




 $query = "SELECT * from mothly_report";
 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){
 echo "['".$row['months']."',".$row['products']."],";
 }

?>






<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 
 ['months','products'],
 <?php 
 // $query = "SELECT * from mothly_report";
 $query = "SELECT * from payments";
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){
 
 // echo "['".$row['months']."',".$row['products']."],";

  echo "['".$row['qt']."',".$row['t_amount']."],";
 }
 ?> 
 
 ]);
 
 var options = {
 title: 'Total sales in a Year',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);


 }
 
    </script>



 
</head>
<body>




 <div class="container-fluid">
 <div id="columnchart12" style="width: 700px; height: 500px;"></div>
 </div>
 
</body>
</html>

</div>