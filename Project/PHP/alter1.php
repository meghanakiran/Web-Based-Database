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

$select1 = $_POST['field'];

// sql to create table
$query = "ALTER TABLE sales ADD $select1 int";
if (mysqli_query($conn, $query)) {
    echo "Table  altered successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);




?>
