<?php 
  session_start();
$con=mysqli_connect('cs.okstate.edu','mkiran', 'galena8antics4reveal','mkiran')
or die('error connecting to database');  //connect to database 

$name=$_POST['viewname'];
$select=$_POST['table']; 
//Execute the query
$query = "select * FROM $name";
//$result = mysqli_query($con,$query) or 
//die('error in querying  datatbase');

if (mysqli_query($con, $query)) {
    echo "this ia the view ";
} else {
    echo "Error: error querying database";
}
  
mysqli_close($con); 
?>