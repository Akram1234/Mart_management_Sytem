<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
require('menu.php'); 
echo '<center><h1>Welcome to the Mart Management System</h1></center><center><br><br>&nbsp;&nbsp;&nbsp;
<table border="0" width="560" cellpadding="5" cellspacing="4" bordercolor="black" style="border-right-width:1;"> 
<tr><td colspan="2" align="center"> - CUSTOMER - </td></tr> 
<tr><td><a href="dateforcustomers.php">No.of Customers visited on a particular Date</a> 
<br><BR><a href="twodatesforcustomers.php">No.of customers from date to date</a></td> 
    <td><a href="register_customer.php">Register Customer</a>
<br><br><a href="view_martcustomer.php">View all customers</a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - SALES - </td></tr> 
<tr><td><a href="enterdatesales.php">View today Sales</a> 
    <td><a href="entertwodatessales.php">view sales from date to date</a><td></tr>
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - DEPARTMENT - </td></tr> 
<tr><td><a href="enterdepartmentno.php">View all Employees in a department</a> 
    <td><a href="enterdeptno.php">Department wise sales </a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - EMPLOYEE - </td></tr> 
<tr><td><a href="enteremployeenumber.php">Search Employee details</a> 
    <td><a href="registeremployee.php">Register Employee</a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - PRODUCT - </td></tr> 
 
    <td><a href="entertwodateproduct.php">product expiry from date to date</a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - ORDERS - </td></tr> 
<tr><td><a href="orderproduct.php">Insert New Order</a> </td></tr>
   

 
</table> 
</center>'; 
exit(); 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
