<?php 
$con = mysqli_connect('******','******', '******','******') or
die('error connecting to database');
$query = 'SELECT * FROM Orderdetails'; 
$result = mysqli_query($con, $query)or 
die('error querying database');
 while($row = mysqli_fetch_assoc($result)) 
{ 
    echo "order_id :{$row['order_id']}  <br> ". 
         "checkout_on : {$row['checkout_on']} <br> ".
         "bill total: {$row['bill_total']} <br> ".
         "payment: {$row['payment']} <br> ".
         "--------------------------------<br>";
}  
echo "Orderdetails data fetched successfully\n"; 
mysqli_close($con);
?> 
