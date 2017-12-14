<html>
<head>
<title>
No.of Customers visited on a particular Date
</title>
</head>
</body>
<h1 align = center text-color=red>Customers Today</h1> 
<?php

$Cnum = $_POST['customernumber']; 
$Cname = $_POST['customername']; 
$mnum = $_POST['mobilenumber']; 
$add = $_POST['address'];


 
     //Connect to mysql server 
      $link = @mysql_connect('localhost', 'root',''); 
      //Check link to the mysql server 
      if(!$link) { 
        die('Failed to connect to server: ' . mysql_error()); 
      } 
      //Select database 
      $db = mysql_select_db('mart'); 
      if(!$db) { 
        die("Unable to select database"); 
      } 
      
      $qry="INSERT INTO customer VALUES('$Cnum','$Cname','$mnum','$add')"; 
      //Execute query 
      $result=mysql_query($qry); 
      if($result)
	  echo "Inserted Successfully";
	  
?>
</body>
</html> 