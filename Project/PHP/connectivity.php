<?php 
  session_start();
$con=mysqli_connect('cs.okstate.edu','mkiran','galena8antics4reveal','mkiran')
or die('error connecting to database');  //connect to database 
  $ID = $_POST['user']; 
  $Password = $_POST['pass']; 
  function SignIn() 
  { 
 // session_start(); //starting the session for user profile page
   if(!empty($_POST['user'])) //checking the 'user' name which is from login.html, is it empty or have some text 
   { 
   	$query = mysql_query("SELECT * FROM customer where c_name = '$_POST[user]' AND password= '$_POST[pass]'") or die(mysql_error()); 
   $row = mysql_fetch_array($query) or die(mysql_error()); 
   if(!empty($row['c_name']) AND !empty($row['password']))
    {
     $_SESSION['c_name'] = $row['password']; 
     header("Location:loginpage.html");
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
} 
else {
 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
}
 }
  } 
  if(isset($_POST['submit'])) 
  	{ 
  		SignIn();
  		 } 

  		 ?> 

