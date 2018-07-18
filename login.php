<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blog");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

 // Check if the form is submitted  // retrieve the form data by using the element's name attributes value as key 
 $username = $_POST['username']; 
  $password = $_POST['password'];
  echo $username;
  echo $password;
  // display the results echo '<h3>Form GET Method</h3>'; 
  $sql = "SELECT username, password FROM user WHERE username='" . $username . "' and password = '". $password."'";
   $res = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($res);
  if($rows == 1){
   $_SESSION['username']=$username;
    header("Location: ./blogview.php"); /*Redirect browser */

exit();
} else{
    echo "Incorrect log in";
}
mysqli_close($conn);


?>