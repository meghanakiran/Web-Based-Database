<?php 
$servername = "cs.okstate.edu";
$username = "mkiran";
$password = "cs.okstate.edu";
$dbname = "mkiran";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select1 = $_POST['table'];

// sql to create table 
$query ="SHOW TABLES FROM $dbname"; 
 
if (mysqli_query($conn, $query)) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 
mysqli_close($conn); 
?> 