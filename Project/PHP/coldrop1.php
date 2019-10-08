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
$select1 = $_POST['field'];
// sql to create table
$sql ="ALTER TABLE sales DROP COLUMN $select1";

if (mysqli_query($conn, $sql)) {
    echo "column dropped successfully successfully";
} else {
    echo "Error error in dropping column: " . mysqli_error($conn);
}
mysqli_close($conn);




?>
