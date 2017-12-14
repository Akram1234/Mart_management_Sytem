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
<h1>Enter Employee ID To Get Details of the employee</h1> 
<form action="particularemployee.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Employee ID*</td> 
<td><input type="number" name="employeenumber" maxlength="5"></td> 
</tr> 
<tr>  
<
<td><input type="submit" name="submit" value="Go"></td> 
 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>