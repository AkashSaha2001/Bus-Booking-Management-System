<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'user');
$_SESSION['id'];
$id= $_SESSION['id'];
$sql="select * from user where id='$id'";
$rs=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($rs);
if(isset($_POST['submit']) && ($_POST['submit']=="Update"))
{
	$Name=$_POST['a'];
	$Email_Id=$_POST['b'];
	$Password=$_POST['d'];
	$Phone_Number=$_POST['c'];
	$sql1="update user set Name='$Name',Email_Id='$Email_Id',Password='$Password',Phone_Number='$Phone_Number' where id='$id'";
	$rs1=mysqli_query($connection,$sql1);
	echo "your record has been updated successfully";
}

?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>َEdit</title>
    <link rel="stylesheet" href="css/registration.css">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/registrationcss.css">

    <div class=main>
        <a href="0index.php">Home</a>
        <a href="admin register.php">Admin</a>
    </div>

    <form class="box" method="post">
        <h1>Edit Profile</h1>
        <input type="text" name="a" value="<?php echo $row['Name'];?>" />

        <input type="text" name="b" value="<?php echo $row['Email_Id'];?>" />

        <input type="text" name="d" value="<?php echo $row['Password'];?>" />

        <input type="number" name="c" value="<?php echo $row['Phone_Number'];?>" />

        <input type="submit" name="submit" value="Update" />


    </form>


</body>

</html>