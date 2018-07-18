<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

 // Check if the form is submitted  // retrieve the form data by using the element's name attributes value as key 
 $name = $_GET['name']; 
 $username = $_GET['username']; 
  $password = $_GET['password'];
  // display the results echo '<h3>Form GET Method</h3>';
    $sql = "SELECT username FROM user WHERE username='" . $username . "'";
   $res = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($res);
  if($rows == 1){


echo "Username Already Taken... Please select another username...";
} else{
      $sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";
  if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
} 

mysqli_close($conn);
?>