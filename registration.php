<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'user');

if(isset($_POST['submit']) && ($_POST['submit']=="Register"))
{
	$Name=$_POST['a'];
	$Email_Id=$_POST['b'];
  $Password=$_POST['d'];
	$Phone_Number=$_POST['c'];

$sql1="select * from user where Email_Id='$Email_Id'";
$rs1=mysqli_query($connection,$sql1);

if(mysqli_num_rows($rs1)>0)
{
echo "email id already exist";
}
else
{
$sql="insert into user(Name,Email_Id,Password,Phone_Number) values ('$Name' , '$Email_Id' ,'$Password', '$Phone_Number')";
$rs=mysqli_query($connection,$sql);
}
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َBus booking register</title>
    <link rel="stylesheet" href="css/registration.css">
  </head>
  <body>
<link rel="stylesheet" type="text/css" href="css/registrationcss.css">

<div class=main>
   <a href="0index.php">Home</a>
   <a href="admin register.php">Admin</a>
</div>

<form class="box" method="post">
  <h1>Registration</h1>
     <input type="text" name="a" placeholder="Name">
     <input type="text" name="b" placeholder="Email_Id">
     <input type="Password" name="d" placeholder="Password">
     <input type="number" name="c" placeholder="Phone Number">
     <input type="submit" name="submit" href="login.php" value="Register">

     <a href="login.php">Already have An Account</a>
</form>


  </body>
</html>
