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
$sql ="CREATE UNIQUE INDEX phone ON Customer(c_phone);";
 
if (mysqli_query($conn, $sql)) {
    echo "index created successfully";
} else {
    echo "Err0r: " . mysqli_error($conn);
}
 
mysqli_close($conn); 
?> 
