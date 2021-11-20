<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'user');

$_SESSION['id'];
$id= $_SESSION['id'];
$sql="select * from user where id='$id'";
$rs=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($rs);

?>
<html>
  <head>
    <meta>
    <title>Profile</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<form class="box"  method="post">
	<div class="register">
			<b>NAME:</b>
			&nbsp;
			 <b><?php echo $row['Name'];?></b>
			 <br><br>
			 
			 <b>Email_id:</b>
			&nbsp;
			 <b><?php echo $row['Email_Id'];?></b>
			 <br><br>
			 
			 <b>Phone Number:</b>
			&nbsp;
			 <b><?php echo $row['Phone_Number'];?></b>
			 <br><br>
			</div>
			<br>
			&nbsp; &nbsp;
	<a href="logout.php">LOGOUT</a>
	<br><br><br><br>
	<a href="Edit.php">EDIT</a>
</form>
</body>
</html>