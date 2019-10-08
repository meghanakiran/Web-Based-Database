<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-
bottom:10px;}
</style>

<title>ADMIN</title>
</head>
<body>

<form method="post" action="quantity.php">
<label>FIELD</label>
<input type="text" name="field" />
<br />

<label>PARAMETER</label>
<input type="text" name="product" />
<br />
<input type="submit" value="number">
</form>
<br/>

<form method="post" action="alter1.php">
<label>table name</label>
<input type="text" name="table" />
<label>FIELD NAME</label>
<input type="text" name="field" />
<br />
<input type="submit" value="alter table">
</form>
<br />

<form method="post" action="desc.php">
<label>TABLE TO BE DISPLAYED</label>
<input type="text" name="table" />
<input type="submit" value="table">
</form>
<br />

<form method="post" action="update.php">
<input type="submit" value="update">
</form>
<br />

<form method="post" action="coldrop1.php">
<input type="text" name="field" />
<br />
<input type="submit" value="drop column">
</form>
<br />


</body>
</html>

