<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blog");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

 // Check if the form is submitted  // retrieve the form data by using the element's name attributes value as key 
  $username = $_SESSION['username']; 
 $title = $_GET['title']; 
 $body = $_GET['body']; 
  echo $title;
  echo $body;
  // display the results echo '<h3>Form GET Method</h3>'; 
  $sql = "INSERT INTO content (username, title, body) VALUES ('$username', '$title', '$body')";
  if(mysqli_query($conn, $sql)){
    header("Location: ./blogview.php"); /* Redirect browser */
exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);

echo "Connected successfully";
?>