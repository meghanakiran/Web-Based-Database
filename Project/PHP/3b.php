<?php 
$servername = "*****";
$username = "*****";
$password = "*****";
$dbname = "*****";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table 
$sql ="DROP TABLE Payment";
 
if (mysqli_query($conn, $sql)) {
    echo "Table Address created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
