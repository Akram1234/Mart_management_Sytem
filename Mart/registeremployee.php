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
<h1>Employee Registration Form</h1> 
<form action="enteremployye.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Employee ID</td> 
<td><input type="number" name="emplid" maxlength="5"></td> 
</tr> 
<tr>  
<td>Employee Name</td> 
<td><input type="text" name="emplname" maxlength="15"></td> 
</tr>
<tr>
<td>Department</td> 
<td><input type="text" name="dnumber" maxlength="20"></td> 
</tr>
<tr>
<td>Address</td> 
<td><input type="text" name="address" maxlength="50"></td> 
</tr>
<tr>
<td>Mobile Number</td> 
<td><input type="text" name="mobilenumber" maxlength="15"></td> 
</tr>
<tr>
<td>Email</td> 
<td><input type="text" name="email" maxlength="20"></td> 
</tr>
<tr>
<td>Points</td> 
<td><input type="text" name="points" maxlength="5"></td> 
</tr>
<tr>
<td>No.Of Hours </td>
<td><input type="number" name="Noofhours" maxlength="2" max="24" min="0"></td> 
</tr>
 <tr>
<td>Hire Date</td> 
<td><input type="date" name="hiredate" maxlength="15"></td> 
</tr>
<td><input type="submit" name="submit" value="Insert"></td> 

</tr> 
</table> 
</form> 
</center> 
</body> 
</html>