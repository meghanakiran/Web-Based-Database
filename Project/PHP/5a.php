<?php 
  session_start();
$con=mysqli_connect('cs.okstate.edu','mkiran','galena8antics4reveal','mkiran')
or die('error connecting to database');  //connect to database 
//$columnname= $_POST['ColumnName'];
$select1 = $_POST['table1'];
$select2 = $_POST['table2'];
$select3 = $_POST['field'];
//echo "$columnname"."<br>"."$select"."<br>";
$query = "Select cat_name FROM Category 
WHERE p_id=
(Select p_id FROM Product WHERE p_name ='cheese fries')";
$result = mysqli_query($con,$query) or 
die('error querying database');

$first = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Tables with Alternate Background</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<h2>Table :';


$second ='</h2><hr>
<div class="bs-example">
    <table class="table table-striped">
        <thead><tr>';
echo "$first $select1 $second";
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);

// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<th>{$field->name}</th>";
}
echo "</tr></thead><tbody>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);
echo "        </tbody>
    </table>
</div>
</body>
</html> ";
?>