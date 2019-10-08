<?php 
$con = mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran') or
die('error connecting to database');
$query = 'SELECT c_id,c_name,c_phone FROM Customer USE INDEX(phone) IGNORE INDEX(PRIMARY)'; 
$result = mysqli_query($con, $query)or 
die('error querying database');
 while($row = mysqli_fetch_assoc($result)) 
{ 
    echo "C_ID :{$row['c_id']}  <br> ". 
         "name : {$row['c_name']} <br> ".
         "phone : {$row['c_phone']} <br> ".
         "--------------------------------<br>";
}  
echo "product data fetched successfully\n"; 
mysqli_close($con);
?> 