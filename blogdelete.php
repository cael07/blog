<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

 // Check if the form is submitted  // retrieve the form data by using the element's name attributes value as key 
 $id = $_GET['id']; 
  echo $id;
  // display the results echo '<h3>Form GET Method</h3>'; 
  $sql = "DELETE FROM content WHERE id='$id'";
  if(mysqli_query($conn, $sql)){    
header("Location: ./blogview.php"); /* Redirect browser */
exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);

echo "updated successfully";
?>