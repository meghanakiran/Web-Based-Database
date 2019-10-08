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
$query ="SHOW TRIGGERS LIKE 'Meghana'";
$result = mysqli_query($conn,$query) or
die('error querying database');


if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

mysqli_free_result($result);
?>
