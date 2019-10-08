
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
<!-- to show tables in the datat=base-->

<form method="post" action="show.php">
<input type="submit" value="show Tables"> 
</form>

<!-- to create table 3a1.php -->
<form method="post" action="3a1.php">
<label>TABLE NAME</label>
<input type="text" name="table" />
<label>column name 1</label>
<input type="text" name="col1" />
<label>column type</label>
<input type="text" name="colty1" />
<label>column name 2</label>
<input type="text" name="col2" />
<label>column type</label>
<input type="text" name="colty2" />
<label>column name 3</label>
<input type="text" name="col3" />
<label>column type</label>
<input type="text" name="colty3" />
<br />
<input type="submit" value="Create Table"> 
</form>

<!--desc table -->
<form method="post" action="desc.php">
<input type="submit" value="Table"> 
</form>

<form method="post" action="drop.php">
<label>TABLE NAME</label>
<input type="text" name="table" />
<br />
<input type="submit" value="Drop table"> 
</form>
<form method="post" action="display.php">
<input type="submit" value="Display Table"> 
</form>

<form method="post" action="alter.php">
<label>FIELD NAME</label>
<input type="text" name="table" />
<br />
<input type="submit" value="ALTER Table"> 
</form>

<form method="post" action="coldrop.php">
<label>FIELD NAME</label>
<input type="text" name="table" />
<br />
<input type="submit" value="delete column"> 
</form>

<form method="post" action="trig.php">
<label>  TRIGGER NAME</label>
<input type="text" name="table" />
<br />
<input type="submit" value="Trigger"> 
</form>


</body>
</html>
