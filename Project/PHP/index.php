<!DOCTYPE html> 
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-
bottom:10px;} 
</style>
 
<title>Student</title>
</head> 
<body>
<form method="post" action="testp.php">
<input type="submit" value="Create Table"> 

<form method="post" action="testi.php">
<label>P_ID</label>
<input type="text" name="p_id" />
<br />
<label>PRICE</label> 
<input type="text" name="price" /> 
<br />
<label>PRODUCT NAME </label> 
<input type="text" name="p_name" /> 
<br />
<input type="submit" value="Add Product">
</form>

<br /> 
<form method="post" action="retrive.php">
<input type="submit" value="Retrieve Data">
</form>
<form method="post" action="retrive.php">
<input type="submit" value="Retrieve Data">
</form>

</body>
</html> 