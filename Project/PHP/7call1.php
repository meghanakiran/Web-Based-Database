<?php 
$con = mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran') or
die('error connecting to database');

$query = 'SELECT * FROM Salecategory'; 
$result = mysqli_query($con, $query)or 
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