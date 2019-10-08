<?php
$servername = "****";
$username = "****";
$password = "****";
$dbname = "****";

$before="before";
$after="after";
$update="update";
$insert="insert";
$delete="delete";
$insteadof="instead of"
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select1 = $_POST['table'];
$select2 = $_POST['opt1'];
$select3 = $_POST['opt2'];

if($before==$select2 AND $insert==$select3)
{
echo "entering outer for loop";
$sql ="CREATE TRIGGER $select1
$select2 $select3
ON Customer FOR EACH ROW
SET NEW.c_name=UPPER(NEW.c_name);";
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);

}
}

elseif($before==$select2 AND $update==$select3 OR $before==$select2 AND $delete==$select3)
{
echo "entering outer for loop";
$sql ="CREATE TRIGGER $select1
$select2 $select3
ON Customer FOR EACH ROW
SET NEW.c_name=UPPER(NEW.c_name);";
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);

}
}



elseif($after==$select2 AND $insert==$select3)
{  $sql ="CREATE TRIGGER $select1
$select2 $select3
ON Customer FOR EACH ROW
BEGIN INSERT INTO log VALUES(NEW.c_id, NEW.c_name, NOW());";
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);

}
} 

elseif($after==$select2 AND $update==$select3)
{  $sql ="CREATE TRIGGER $select1
$select2 $select3
ON Customer FOR EACH ROW
BEGIN INSERT INTO log VALUES(user(), CONCAT('Update Student Record ', OLD.NAME,' Previous name:',OLD.c_name,' Present name ', NEW.c_name));";
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);

}
} 

elseif($insteadof==$select2 AND $insert==$select3 OR $insteadof==$select2 AND $delete==$select3 OR $insteadof==$select2 AND $update==$select3)
{  $sql ="CREATE TRIGGER $select1
$select2 $select3
ON Customer FOR EACH ROW
BEGIN
  INSERT INTO Customer
       SELECT c_name, M
       FROM inserted;";
if (mysqli_query($conn, $sql)) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . mysqli_error($conn);

}
} 







mysqli_close($conn);
?>
