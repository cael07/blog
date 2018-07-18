<?php
session_start();
 if ($_SESSION['username'] !== "")
 {
?>
<h2>Input Blog</h2>
<form action="./blogprocess.php" method="get">
  title: <input type="text" name="title"><br>
  body: <textarea name="body"></textarea><br>
  <input type="submit" value="Submit">
</form>
<?php
}
else{
    echo "Please register/login to access this page...";
}
  ?>