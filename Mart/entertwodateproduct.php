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
<h1>Enter Dates To Know Expired Products From Date To Date </h1> 
<form action="productexpire.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Start Date</td> 
<td><input type="date" name="startdate" ></td> 
</tr> 
<tr>  
<td>End date</td> 
<td><input type="date" name="enddate" ></td> 
</tr>
 
<td><input type="submit" name="submit" value="Go"></td> 
 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>