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
$select1 = $_POST['table'];
// sql to create table 
$sql ="CREATE TRIGGER $select1
BEFORE INSERT
ON Customer FOR EACH ROW 
SET NEW.name=UPPER(NEW.name); 
END;";
 
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);
}
 
mysqli_close($conn); 
?> 