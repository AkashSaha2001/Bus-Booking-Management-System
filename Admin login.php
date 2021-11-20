<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'admin');

if(isset($_POST['submit']) && ($_POST['submit']=="Login"))
{
$Email_Id=$_POST['a'];
$Password=$_POST['b'];
 $sql="select * from admin where Email_Id='$Email_Id' and Password='$Password'";
$rs=mysqli_query($connection,$sql);
if (mysqli_num_rows($rs)>0)

    {
      $row=mysqli_fetch_array($rs);
      header('location:admin bus register.php');
      //echo"login successfull";
      $_SESSION['id']=$row['id'];
    }
    else
    {
      echo"invlid Email_Id or Password";
    }
}
?>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/Admin login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/Admin login.css">

    <div class=main>
        <a href="0index.php"><i class="fas fa-house-user"></i> Home</a>
        <a href="login.php"><i class="fas fa-users"></i> User</a>
    </div>

    <form class="box" method="post">
        <h1>Admin Login</h1>
        <input type="text" name="a" placeholder="UserName">
        <input type="text" name="b" placeholder="Password">
        <input type="submit" name="submit" value="Login">
        <a href="admin register.php">Create An Account</a>
    </form>
</body>

</html>