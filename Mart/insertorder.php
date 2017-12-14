<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
 
 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'root', ''); 
$oid = $_POST['orderid']; 
$cid = $_POST['customerid']; 
$date= $_POST['dateplaced']; 

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('mart'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = "INSERT INTO invoice VALUES ('$date','$oid','$cid',24569)"; 

/*Execute query*/ 
$result = mysql_query($qry);
if($result){
	echo "Order inserted successfully";
	header('location:orderproduct.php');
}
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>