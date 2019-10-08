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

// sql to create table 
$sql ="CREATE TABLE Product
(
p_id int,  
price decimal(18,2) NOT NULL,
p_name varchar(255) NOT NULL,
PRIMARY KEY (p_id)
)";
 
 if (mysqli_query($conn, $sql)) {
    echo "Table Product  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql1 ="CREATE TABLE Category
(
cat_id int,
cat_name varchar(255),
PRIMARY KEY (cat_id),

)";
 
if (mysqli_query($conn, $sql1)) {
    echo "Table Category  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
//create more table 
$sql2 ="CREATE TABLE Customer
(
c_id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
c_name varchar(255),
c_phone int,
password varchar(255),

)";
 
if (mysqli_query($conn, $sql2)) {
    echo "Table Customer created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

/*$sql2 = "INSERT INTO Category (cat_id, cat_name, p_id)
VALUES ('03', 'app', '201')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

$sql3 = "INSERT INTO Customer (c_id, c_name, c_phone,password,cat_id)
VALUES ('01', 'Ram', '4057626138','03')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}*/
 
mysqli_close($conn); 
?> 