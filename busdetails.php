<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>bus setails</title>

    <link rel="stylesheet" type="text/css" href="css/busdetails.css">
</head>

<body>
    <header>
        <div class="title">
            <h1>Easy Journey</h1>
        </div>
        <div class=main>
            <a href="0index.php">Home</a>

            <center>
                <div class="">

                    <table border="1">

                        <tr>
                            <td>Bus Name</td>
                            <td>From</td>
                            <td>To</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Meridiem</td>
                            <td>Type</td>
                            <td>Period</td>
                        </tr> <br>



                        <?php
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'admin');
if(isset($_POST['search']))
{
	$_GET['p_id'];
	$id = $_GET['p_id'];
	

	$query = "select * from employee where id='$id' ";
	$query_run = mysqli_query($connection, $query);


	while ($row = mysqli_fetch_array($query_run))
	 {
	 	?>
                        <tr>
                            <td> <?php echo $row['BusName']; ?></td>
                            <td> <?php echo $row['From']; ?></td>
                            <td> <?php echo $row['To']; ?></td>
                            <td> <?php echo $row['Date']; ?></td>
                            <td> <?php echo $row['Time']; ?></td>
                            <td> <?php echo $row['Meridiem']; ?></td>
                            <td> <?php echo $row['type']; ?></td>
                            <td> <?php echo $row['period']; ?></td>
                        </tr>
                        <?php
	}
}
?>
                    </table>

                </div>
            </center>
    </header>
</body>

</html>