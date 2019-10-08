<?php
$select=$_POST['pname'];
  

$servername = "****";
$username = "****";
$password = "****";
$dbname = "****";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






$sql1 ="CREATE PROCEDURE GetBookingInfo (INOUT booking_list varchar(400))
 BEGIN  
 DECLARE b_finished INTEGER DEFAULT 0; 
 DECLARE b_book varchar(100) DEFAULT ''; 
 DECLARE Booking_cursor CURSOR FOR  SELECT Booking_ID from CarRental; 
  DECLARE CONTINUE HANDLER  FOR NOT FOUND SET b_finished=1; 
  OPEN Booking_Cursor; 
  get_booking : LOOP 
   FETCH Booking_Cursor INTO b_book; 
    IF b_finished =1 THEN  LEAVE get_booking; 
    END IF; 
    SET booking_list = CONCAT(b_book,';',booking_list); 
    END LOOP get_booking; 
    CLOSE Booking_Cursor; 
    END;"; 

    if (mysqli_query($conn, $sql)) {
    echo "procedure created successfully";
} else {
    echo "Error creating procedure: " . mysqli_error($conn);
}


mysqli_close($conn); 
?> 
