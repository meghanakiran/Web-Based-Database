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

<form method="post" action="create1b.php">
<input type="submit" value="Create Table"> 
</form>

<form method="post" action="insert1b.php">
<label>P_ID</label>
<input type="text" name="p_id" />
<br />
<label>PRICE</label> 
<input type="text" name="price" /> 
<br />
<label>PRODUCT NAME</label> 
<input type="text" name="p_name" /> 
<br />
<input type="submit" value="Add Product">
</form>

<br /> 

<form method="post" action="retrive1b.php">
<input type="submit" value="Retrieve Data">
</form>
<form method="post" action="groupby1b.php">
<label>table</label>
<input type="text" name="table" />
<br />
<input type="submit" value="GroupBy">
</form>

<br/>

<form method="post" action="q1c.php">
<label>table1</label>
<input type="text" name="table" />
<label>table2</label>
<input type="text" name="table1" />
<label>table3</label>
<input type="text" name="table2" />
<br />
<input type="submit" value="GroupBy">
</form>

<br/>

<form method="post" action="q1d.php">
<label>table1</label>
<input type="text" name="table" />
<label>table2</label>
<input type="text" name="table1" />
<br />
<input type="submit" value="GroupBy">
</form>

<br />
<h2> Question 2 </h2>
<form method="post" action="2a.php">
<label>Name of the view </label>
<input type="text" name="viewname" />
<label>Table name</label>
<input type="text" name="table" />
<br />
<input type="submit" value="Create View">
</form>

<form method="post" action="2aa.php">
<label>Name of the view </label>
<input type="text" name="viewname" />
<br />
<input type="submit" value="View the VIEW">
</form>
<br />
<h3> Query on view created</h3>
<form method="post" action="2b.php">
<label>Name of the view </label>
<input type="text" name="viewname" />
<br />
<input type="submit" value="Query">
</form>
<br/>


<h3> create view on two or more tables</h3>
<form method="post" action="2c.php">
<label>Name of the view </label>
<input type="text" name="viewn" />
<label>Table name1</label>
<input type="text" name="table1" />
<br />
<label>Table name2</label>
<input type="text" name="table2" />
<br />
<input type="submit" value="Create View">
</form>

<form method="post" action="2cc.php">
<label>Name of the view </label>
<input type="text" name="viewn" />
<br />
<input type="submit" value="View the VIEW">
</form>
<br />
<h3> Query on view created</h3>
<form method="post" action="2d.php">
<label>Name of the view </label>
<input type="text" name="viewn" />
<br />
<input type="submit" value="Query">
</form>
<br/>

<h2>Question 3 </h2>
<h3>3A- Add new table to database</h3>
<form method="post" action="3a.php">
<input type="submit" value="Create NEW Table"> 
</form>


<h3>3B- Delete table</h3>
<form method="post" action="3b.php">
<input type="submit" value="Create NEW Table"> 
</form>

<br />

<h3>3C- Add field to table Orderdetails</h3>
<form method="post" action="3c.php">
<input type="submit" value="display Table"> 
</form>
<h5>after adding field</h5>
<form method="post" action="3cc.php">
<label>Name of the field to be added </label>
<input type="text" name="field" />
<br />
<input type="submit" value=" alter Table"> 
</form>
<form method="post" action="3ccc.php">
<input type="submit" value="display Table"> 
</form>
<form method="post" action="3d.php">
<input type="submit" value="display2 Table"> 
</form>


<br />
<h3>Question 4</h3>
<h2> 4A-Index on primary Key</h2>
<form method="post" action="4a.php">
<input type="submit" value="Index"> 
</form>

<br />
<h2>4B-Index on Secondary Key</h2>
<form method="post" action="4b.php">
<label>INDEX name</label>
<input type="text" name="iname" />
<input type="submit" value="Indexsecondary"> 
</form>
<br />
<form method="post" action="4bb.php">
<input type="submit" value="Indexquery"> 
</form>



<br/>
<h2>Question 5</h2>
<h3> 5A- Subquery </h3>
<form method="post" action="5a.php">
<label>table1</label>
<input type="text" name="table1" />
<label>table2</label>
<input type="text" name="table2" />
<label>field</label>
<input type="text" name="field" />
<br />
<input type="submit" value="Subquery">
</form>
<br />
<h3> 5B- Correlated subquery </h3>
<form method="post" action="5b.php">
<label>table1</label>
<input type="text" name="table1" />
<label>field</label>
<input type="text" name="field1" />
<label>field</label>
<input type="text" name="field2" />
<br />
<input type="submit" value="Correlated">
</form>

<br />
<h3>Question 6</h3>
<h2>Creating Trigger</h2>
<form method="post" action="6.php">
<input type="submit" value="Trigger"> 
</form>

<br />
<h2>Question 7</h2>
<h2>Stored procedure</h2>
<form method="post" action="7.php">
<label>procedure name:</label>
<input type="text" name="pname" />
<br />
<input type="submit" value="createprocedure"> 
</form>
<form method="post" action="7call.php">
<label>procedure name:</label>
<input type="text" name="pname" />
<br />
<input type="submit" value="createprocedure"> 
</form>
<form method="post" action="7call1.php">
<label>procedure name:</label>
<input type="text" name="pname" />
<br />
<input type="submit" value="createprocedure"> 
</form>


</body>
</html> 