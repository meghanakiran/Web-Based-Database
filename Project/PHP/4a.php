<?php 
$con = mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran') or
die('error connecting to database');
$query = 'SELECT * FROM Product FORCE INDEX(PRIMARY)'; 
$result = mysqli_query($con, $query)or 
die('error querying database');
 while($row = mysqli_fetch_assoc($result)) 
{ 
    echo "P_ID :{$row['p_id']}  <br> ". 
         "PRICE : {$row['price']} <br> ".
         "Product Name : {$row['p_name']} <br> ".
         "--------------------------------<br>";
}  
echo "product data fetched successfully\n"; 
mysqli_close($con);
?> 