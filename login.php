<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'user');

if(isset($_POST['submit']) && ($_POST['submit']=="Login"))
{
$Email_Id=$_POST['a'];
$Password=$_POST['b'];
 $sql="select * from user where Email_Id='$Email_Id' and Password='$Password'";
$rs=mysqli_query($connection,$sql);
if (mysqli_num_rows($rs)>0)

    {
      $row=mysqli_fetch_array($rs);
      header('location:Profile.php');
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
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/socialmediabutton.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<div class=main>
   <a href="0index.php"><i class="fas fa-house-user"></i> Home</a>
   <a href="Admin login.php"><i class="fas fa-users-cog"></i> Admin</a>
</div>

<form class="box"  method="post">
  <h1>Login</h1>
  <input type="text" name="a" placeholder="UserName">
  <input type="text" name="b" placeholder="Password">
  <input type="submit" name="submit" value="Login">
  <a href="registration.php">Create An Account</a>
</form>
</body>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<div class="center">
<div id="social">
  <ul>
    <li class="facebook">
      <button class="border"><i class="fa fa-facebook"></i></button>
    </li>
<br><br>
    <li class="twitter">
      <button class="border"><i class="fa fa-twitter"></i></button>
    </li>
<br><br>
    <li class="instagram">
      <button class="border"><i class="fa fa-instagram"></i></button>
    </li>
    <br><br>
    <li class="dribbble">
      <button class="border"><i class="fa fa-dribbble"></i></button>
    </li>
  </ul>
</div>
  </div>
</body>
</html>
