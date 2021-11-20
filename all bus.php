<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'bus');

$sql="select * from bus";
$rs=mysqli_query($connection,$sql);
?>

<html>
<head>
	<title>All Bus list</title>
</head>
<link rel="stylesheet" type="text/css" href="css/all bus.css">
<body>
<div class="title">
      <h1>Easy Journey</h1>
           </div>
       <div class=main>
   <a href="0index.php">Home</a>
</div>
<center>
<h1> All Bus list</h1>

<div class="">
<table class="table" border="1">
 <tr>
<td>Bus Name</td>
   <td>From</td>
<td>To</td>
<td>Date</td>
<td>Time</td>
<td>Meridiem</td>
<td>Type</td>
<td>Period</td>
<td>Prize</td>
<td>Booking</td>

 </tr>
 <?php while($row=mysqli_fetch_array($rs)){?>
 <tr>
  <td><?php echo $row['BusName'];?></td>
  <td><?php echo $row['source'];?></td>
   <td><?php echo $row['destination'];?></td>
   <td><?php echo $row['date1'];?></td>
   <td><?php echo $row['time1'];?></td>
   <td><?php echo $row['meridiem'];?></td>
   <td><?php echo $row['type'];?></td>
   <td><?php echo $row['period'];?></td>
  <td> <?php echo $row['Prize'];?></td>

   <td><a href="booking.php?p_id=<?php echo $row['id'] ;?>">Book</a></td>

 </tr>
 <?php }?>
</table>
</div>
</div>
</center>
</body>
</html>