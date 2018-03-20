<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "life+");
$query = "SELECT * FROM waterlevel";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ time:'".$row["time"]."',   sreading:".$row["sreading"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   <link rel="http://api-4ir.xlabs.one:8280/googleMapsGeolocation/api/v1">
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Morris.js chart with PHP & Mysql</h2>
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   

   curl -k -d "grant_type=client_credentials" \
      -H "Authorization: Basic MHpsSk1tNnFXMTdOMnk4VTBVU050T3VPckhNYTprbHRSMW1EVmJOWmZvYmlCa0VVSTJwdG54aElh" \
       https://api-4ir.xlabs.one:8243/c62a20ee-7737-3d4a-8052-9193449741c6
   <br /><br />
   <div id="chart"></div>

   <iframe width="450" height="120" src="https://api-4ir.xlabs.one/store/apis/widget?name=Google_Maps_Elevation&version=v1.0.0&provider=admin" frameborder="0" allowfullscreen></iframe>


  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'time',
 ykeys:['sreading'],
 labels:['sreading'],
 hideHover:'auto',
 stacked:true
});
</script>