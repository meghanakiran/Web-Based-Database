
<!DOCTYPE html> 
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-
bottom:10px;} 
</style>
 
<title>PROGRAMMING ASSIGNMENT 3</title>
</head> 
<body>
<form method="post" action="cust.php">
<input type="submit" value="order details"> 
</form>



<? php    
         session_start();
         $name=$_SESSION['name'];    
         echo'welcome :'. $name.'<br>';
         echo'<a href="signout.php">Signout</a>';
?>
</body>
</html>