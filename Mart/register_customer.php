<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?> 
<html> 
<body> 
<center> 
<h1>Customer </h1> 
<form action="registercust.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Customer Number*</td> 
<td><input type="number" name="customernumber" maxlength="5"></td> 
</tr> 
<tr>  
<td>Customer Name</td> 
<td><input type="text" name="customername" maxlength="15"></td> 
</tr>
<tr>
<td>Mobile Number</td> 
<td><input type="number" name="mobilenumber" maxlength="10" min="7000000000" ></td> 
</tr> 
<tr>
<td>Address</td> 
<td><input type="text" name="address" maxlength="50"></td> 
</tr>
<td><input type="submit" name="submit" value="Insert"></td> 

</tr> 
</table> 
</form> 
</center> 
</body> 
</html>