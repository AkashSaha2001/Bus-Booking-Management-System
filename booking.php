<html>

<head>
    <title>booking</title>
</head>
<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>

<body>
    <center>

        <?php
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'bus');

	$_GET['p_id'];
	$id = $_GET['p_id'];
	

	$query = "select * from bus where id='$id' ";
	$query_run = mysqli_query($connection, $query);

	$row = mysqli_fetch_array($query_run)?>

        <h1>Booking</h1>


        <form class="box1" method="post">
            <b>BUSNAME:</b>
            &nbsp;
            <b><?php echo $row ['BusName'];?></b>
            <br><br>

            <b>Source:</b>
            &nbsp;
            <b><?php echo $row['source'];?></b>
            <br><br>

            <b>Destination:</b>
            &nbsp;
            <b><?php echo $row['destination'];?></b>
            <br><br>

            <b>Date:</b>
            &nbsp;
            <b><?php echo $row['date1'];?></b>
            <br><br>

            <b>Time:</b>
            &nbsp;
            <b><?php echo $row['time1'];?></b>
            <br><br>

            <b>Meridiem:</b>
            &nbsp;
            <b><?php echo $row['meridiem'];?></b>
            <br><br>

            <b>Type:</b>
            &nbsp;
            <b><?php echo $row['type'];?></b>
            <br><br>

            <b>Period:</b>
            &nbsp;
            <b><?php echo $row['period'];?></b>
            <br><br>

            <b>Prize:</b>
            &nbsp;
            <b><?php echo $row['Prize'];?></b>
            <br><br>

			<b>Total seat:</b>
            &nbsp;
            <b><?php echo $row['total_seat'];?></b>
            <br><br>

        </form>
        </div>

        <?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'book');

if(isset($_POST['submit']) && ($_POST['submit']=="Register"))
{
	$Name=$_POST['a'];
	$Email_Id=$_POST['b'];
  $Phone_Number=$_POST['d'];
	$Address=$_POST['c'];
	$BusName=$row ['BusName'];
	$source=$row ['source'];
	$destination=$row ['destination'];
	$date1=$row ['date1'];
	$time1=$row ['time1'];
	$meridiem=$row ['meridiem'];
	$type=$row ['type'];
	$period=$row ['period'];
	$Prize=$row ['Prize'];

$sql1="select * from book where Email_Id='$Email_Id'";
$rs1=mysqli_query($connection,$sql1);

if(mysqli_num_rows($rs1)>0)
{
echo "error";
}
else
{
$sql="insert into book(Name,Email_Id,Phone_Number,Address,BusName,source,destination,date1,time1,meridiem,type,period,Prize) values ('$Name' , '$Email_Id' , '$Phone_Number', '$Address','$BusName','$source','$destination','$date1','$time1','$meridiem','$type','$period','$Prize')";
$rs=mysqli_query($connection,$sql);
}
}
?>
        <html lang="en" dir="ltr">

        <head>
            <meta charset="utf-8">
            <title>َBooking</title>
            <link rel="stylesheet" type="text/css" href="css/booking.css">
        </head>

        <body>
            <link rel="stylesheet" type="text/css" href="css/booking.css">

            <div class=main>
                <a href="0index.php">Home</a>
            </div>

            <form class="box" method="post">

                <input type="text" name="a" placeholder="Name">
                <input type="text" name="b" placeholder="Email_Id">
                <input type="text" name="d" placeholder="Phone Number">
                <input type="text" name="c" placeholder="Address">
                <input type="submit" name="submit" value="Register">


            </form>
        </body>

        </html>
        </div>
    </center>
</body>

</html>