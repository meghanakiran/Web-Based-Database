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
$select2 = $_POST['col1'];
$select3 = $_POST['colty1'];
$select4 = $_POST['col2'];
$select5 = $_POST['col3'];

// sql to create table 
$query = "CREATE TABLE  ( 
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
apt VARCHAR(30) NOT NULL, 
location VARCHAR(30) NOT NULL,
)"; 
 
if (mysqli_query($conn, $query)) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 
mysqli_close($conn); 
?> 