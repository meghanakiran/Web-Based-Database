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

//$select1 = $_POST['table'];

// sql to create table 
$query = "UPDATE SALES SET totalcost=quantity*price"; 
if (mysqli_query($conn, $query)) {
    echo "Table  altered successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 
mysqli_close($conn); 




?>