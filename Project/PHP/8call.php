<?php
$servername = "cs.okstate.edu";
$username = "mkiran";
$password = "galena8antics4reveal";
$dbname = "mkiran";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql ="CALL rss(f);";
 
if (mysqli_query($conn, $sql)) {
    echo "Table Product  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($con);
?>