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
<h1>Enter Department ID </h1> 
<form action="deptsales.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Department ID*</td> 
<td><input type="number" name="departmentnumber" maxlength="5"></td> 
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