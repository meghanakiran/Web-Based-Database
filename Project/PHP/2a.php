<?php 
  session_start();
$con=mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran')
or die('error connecting to database');  //connect to database 

$name=$_POST['viewname'];
$select=$_POST['table']; 
//Execute the query
$query = "Create view $name AS select order_id,checkout_on,bill_total FROM $select WHERE bill_total > 2.00";
//$result = mysqli_query($con,$query) or 
//die('error in querying  datatbase');

if (mysqli_query($con, $query)) {
    echo "view created";
} else {
    echo "Error: error querying database";
}
  
mysqli_close($con); 
?>
