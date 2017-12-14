<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
 
 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'root', ''); 
$p1id = $_POST['1productid']; 
$p2id = $_POST['2productid']; 
$p3id = $_POST['3productid']; 
$p4id = $_POST['4productid']; 
$p5id = $_POST['5productid']; 
$o1id = $_POST['orderid'];


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
$qry = "INSERT INTO orderproducts VALUES(('$o1id','$p1id'),('$o1id','$p2id'),('$o1id','$p3id'),('$o1id','$p4id'),('$o1id','$p5id'))"; 

/*Execute query*/ 
$result = mysql_query($qry);

	
	
	
echo "Order product inserted successfully";
	
}	


?>