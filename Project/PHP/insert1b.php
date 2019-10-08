<?php 
  
// create a variable
$p_id=$_POST['p_id'];
$price=$_POST['price']; 
$p_name=$_POST['p_name'];
  
//Execute the query
 
  //connection 
$con=mysqli_connect('******','******', '******','******')
or die('error connecting to database');  //connect to database 

$query = "INSERT INTO Product(p_id,price,p_name)
values ('$p_id', '$price','$p_name')"; //query

    
if (mysqli_query($con, $query)) {
    echo "New Product added";
} else {
    echo "Error: error querying database";
}
  
mysqli_close($con); 
?>
