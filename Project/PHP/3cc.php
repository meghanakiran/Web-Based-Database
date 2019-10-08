<?php 
  
// create a variable
//$p_id=$_POST['p_id'];
//$price=$_POST['price']; 
$select=$_POST['field'];
  
//Execute the query
 
  //connection 
$con=mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran')
or die('error connecting to database');  //connect to database 

$query = "ALTER TABLE Orderdetails ADD $select int"; //query

    
if (mysqli_query($con, $query)) {
    echo "New field added";
} else {
    echo "Error: error querying database";
}
  
mysqli_close($con); 
?>
