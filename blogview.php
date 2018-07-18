<?php
session_start();
 if ($_SESSION['username'] !== "")
 {
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "blog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM content";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<b>Blogs</b> <a href=\"http://localhost/blog/blogcreate.php\">Create New</a> <a href=\"http://localhost/blog/blogout.php\">Log Out</a>";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Title</th>";
                echo "<th>Body</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['body'] . "</td>";
                if($row['username'] === $_SESSION['username'])
                {
                echo "<td> <a href=\"http://localhost/blog/blogedit.php?id=" . $row['id'] . "\">update</a> <a href=\"http://localhost/blog/blogdelete.php?id=" . $row['id'] . "\">delete</a></td>";
            }
            else{
                echo "<td>Action denied your not the owner</td>";
            }

            echo "</tr>";
            
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
               echo "<b>Blogs</b> <a href=\"http://localhost/blog/blogcreate.php\">Create New</a> <a href=\"http://localhost/blog/blogout.php\">Log Out</a>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Title</th>";
                echo "<th>Body</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['body'] . "</td>";
                echo "<td> <a href=\"http://localhost/blog/blogedit.php?id=" . $row['id'] . "\">update</a> <a href=\"http://localhost/blog/blogdelete.php?id=" . $row['id'] . "\">delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
else{
    include 'header.php';
    $link = mysqli_connect("localhost", "root", "", "blog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM content";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<b>Blogs</b>";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Title</th>";
                echo "<th>Body</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['body'] . "</td>";

            echo "</tr>";
            
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
               echo "<b>Blogs</b> <a href=\"http://localhost/blog/blogcreate.php\">Create New</a> <a href=\"http://localhost/blog/blogout.php\">Log Out</a>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Title</th>";
                echo "<th>Body</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['body'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>