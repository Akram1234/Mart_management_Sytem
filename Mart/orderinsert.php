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
<h1>Enter order Details of the customer</h1> 
<form action="insertorder.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>order Id*</td> 
<td><input type="text" name="orderid"></td> 
</tr> 
<tr> 
<td>Customer Id*</td> 
<td><input type="number" name="customerid"></td> 
</tr>
<tr> 
<td>Date</td> 
<td><input type="date" name="dateplaced" ></td> 
</tr>


<tr>  

<td><input type="submit" name="submit" value="Go"></td> 
 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>