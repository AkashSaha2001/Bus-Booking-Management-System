<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'admin');

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
$sql="insert into admin(Name,Email_Id,Password,Phone_Number) values ('$Name' , '$Email_Id' ,'$Password', '$Phone_Number')";
$rs=mysqli_query($connection,$sql);
}
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAdmin register</title>
    <link rel="stylesheet" href="css/admin register.css">
  </head>
  <body>
<link rel="stylesheet" type="text/css" href="css/admin register.css">

<div class=main>
   <a href="0index.php">Home</a>
   <a href="registration.php">User</a>
</div>

<form class="box" method="post">
  <h1>Admin Registration</h1>
     <input type="text" name="a" placeholder="Name">
     <input type="text" name="b" placeholder="Email_Id">
     <input type="text" name="d" placeholder="Password">
     <input type="number" name="c" placeholder="Phone Number">
     <input type="submit" name="submit" value="Register">

     <a href="Admin login.php">Already have An Account</a>
</form>


  </body>
</html>
