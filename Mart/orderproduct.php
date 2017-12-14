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
<h1>Enter order and it's Products</h1> 
<form action="insertproduct.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Order Id</td> 
<td><input type="text" name="orderid" maxlength="5"></td> 
 
<td>1 Product Id*</td> 
<td><input type="number" name="1productid" maxlength="5"></td> 
</tr>
<tr> 

 
<td>2 Product Id*</td> 
<td><input type="number" name="2productid" maxlength="5"></td> 
</tr>
<tr> 

 
<td>3 Product Id*</td> 
<td><input type="number" name="3productid" maxlength="5"></td> 
</tr>
<tr> 

 
<td>4 Product Id*</td> 
<td><input type="number" name="4productid" maxlength="5"></td> 
</tr>
<tr> 

 
<td>5 Product Id*</td> 
<td><input type="number" name="5productid" maxlength="5"></td> 
</tr>



<tr>  

<td><input type="submit" name="submit" value="Insert"></td> 
 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>