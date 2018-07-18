<?php
include 'header.php';
session_start();
$_SESSION['username']= "";
?>

<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
</head>
<body>
<h2>Registration Form</h2>
<form action="./registerprocess.php" method="get">
  Email: <input type="email" name="name" placeholder="example@gmail.com"><br>
  Username: <input type="text" name="username" placeholder="Username"> <sup>Unique</sup><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Submit">
</form>
<br><br>
<h2>Log in</h2>
<form action="./login.php" method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="submit">
</form>


</body>
</html>