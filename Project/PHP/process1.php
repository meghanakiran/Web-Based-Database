<?php 

  // create a variable
$p_id=$_POST['p_id'];
$price=$_POST['price']; 
$p_name=$_POST['p_name'];
  

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

// sql to create table 
$sql ="CREATE TABLE Product
(
p_id int,
price decimal(18,2),
p_name varchar(255),
PRIMARY KEY (p_id)
)";
 
if (mysqli_query($conn, $sql)) {
    echo "Table Product  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 
mysqli_close($conn); 
?> 
 
