<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'bus');

if(isset($_POST['submit']) && ($_POST['submit']=="Register"))
{
  $BusName=$_POST['x'];
  $source=$_POST['a'];
  $destination=$_POST['b'];
  $date1=$_POST['c'];
  $time1=$_POST['d'];
  $meridiem=$_POST['e'];
  $type=$_POST['f'];
  $period=$_POST['g'];
  $Prize=$_POST['h'];
  $total_seat=$_POST['y'];

$sql="insert into bus(BusName,source,destination,date1,time1,meridiem,type,period,Prize,total_seat) values ('$BusName','$source','$destination','$date1','$time1','$meridiem','$type','$period','$Prize','$total_seat')";
$rs=mysqli_query($connection,$sql);

}
?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin bus register</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <div class=main>
        <a href="0index.php">Home</a>
    </div>

    <form class="box" method="post">
        <h1>Bus Registration</h1>
        <input type="text" name="x" placeholder="Bus Name">
        <input type="text" name="a" placeholder="From">
        <input type="text" name="b" placeholder="To">
        <input type="text" name="c" placeholder="Date">
        <input type="text" name="d" placeholder="Time">
        <input type="radio" name="e" value="AM">
        <h>AM</h>
        <input type="radio" name="e" value="PM">
        <h>PM</h>
        <br>

        <select name="f" placeholder="Bus Type">
            <option value=""> Bus type</option>
            <option value="Standard"> Standard</option>
            <option value="Luxury"> Luxury </option>
            <option value="Deluxe"> Deluxe</option>
        </select>
        

        <select name="g" placeholder="Bus period">
            <option value=""> Bus Period</option>
            <option value="Daily"> Daily </option>
            <option value="Weekly"> Weekly</option>
            <option value="Monthly"> Monthly</option>
        </select>

        <input type="text" name="h" placeholder="Prize">
        <input type="text" name="y" placeholder="Total Seat">
        <input type="submit" name="submit" value="Register">


    </form>


</body>

</html>