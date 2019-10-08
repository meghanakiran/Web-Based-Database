<?php 
  session_start();
$con=mysqli_connect('******','******', '******','******')
or die('error connecting to database');  //connect to database 

$name=$_POST['viewname'];
$select=$_POST['table1']; 
$select1=$_POST['table2']; 

//Execute the query
$query = "Create view $name AS select cat_id,p_name,cat_name,price FROM $select,$select1 WHERE $select.p_id=$select1.p_id";
//$result = mysqli_query($con,$query) or 
//die('error in querying  datatbase');

if (mysqli_query($con, $query)) {
    echo "view created";
} else {
    echo "Error: error querying database";
}
  
mysqli_close($con); 
?>
