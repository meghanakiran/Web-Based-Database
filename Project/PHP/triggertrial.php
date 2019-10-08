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
$select2 = $_POST['opt1'];
$select3 = $_POST['opt2'];
// sql to create table
$sql ="CREATE TRIGGER $select1
$select2 '$select3'
ON Customer FOR EACH ROW
SET NEW.c_name=UPPER(NEW.c_name);";

if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
