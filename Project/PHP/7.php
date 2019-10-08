
<?php
$select=$_POST['pname'];
  

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

// sql to create procedure
$sql = "CREATE PROCEDURE rs(IN num int)
BEGIN
DECLARE x int;
SET x = 1;
loop_label: LOOP
INSERT INTO Salecategory (categoryname) VALUES('pizza');
SET x = x + 1;
IF x >= num 
THEN
LEAVE loop_label;
END IF;
END LOOP;
END;";
 
if (mysqli_query($conn, $sql)) {
    echo "procedure created successfully";
} else {
    echo "Error creating procedure: " . mysqli_error($conn);
}


mysqli_close($conn); 
?> 
