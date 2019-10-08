<?php
$servername = "****";
$username = "****";
$password = "****";
$dbname = "****";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select1 = $_POST['id'];

// sql to create table
$query = "UPDATE Orderdetail1 SET status = 'done' WHERE order_id= $select1;";
if (mysqli_query($conn, $query)) {
    echo "Table  altered successfully";
} else {
    echo "Error  : " . mysqli_error($conn);
}

mysqli_close($conn);




?>
