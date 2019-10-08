
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

$query = "Select sc_id,categoryname FROM Salecategory;";
$result = mysqli_query($con, $query)or
die('error querying database');
 while($row = mysqli_fetch_assoc($result))
{
    echo "SC_ID :{$row['sc_id']}  <br> ".
         "category Name : {$row['categoryname']} <br> ".
         "--------------------------------<br>";
}
// sql to create table 
$sql ="CALL rs(3);";
 
if (mysqli_query($conn, $sql)) {
    echo "Table Product  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$query1 = "Select sc_id,categoryname FROM Salecategory;";
$result = mysqli_query($con, $query1)or
die('error querying database');
 while($row = mysqli_fetch_assoc($result))
{
    echo "SC_ID :{$row['sc_id']}  <br> ".
         "category Name : {$row['categoryname']} <br> ".
         "--------------------------------<br>";
}
echo " Salecategory data fetched successfully\n";

mysqli_close($con);
?>
