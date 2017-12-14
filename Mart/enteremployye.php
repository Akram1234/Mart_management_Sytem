<html>
<head>
<title>
No.of Customers visited on a particular Date
</title>
</head>
</body>
<h1 align = center text-color=red>Customers Today</h1> 
<?php

$Ename = $_POST['emplname']; 
$Eid = $_POST['emplid']; 
$mnum = $_POST['mobilenumber']; 
$add = $_POST['address'];
$points = $_POST['points'];
$emailid = $_POST['email'];
$hiredate = $_POST['hiredate'];
$dnum = $_POST['dnumber'];
$hours = $_POST['Noofhours'];


 
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
      $qry="INSERT INTO employee VALUES('$Eid','$Ename','$mnum','$add','$points','$emailid','$hiredate','$dnum','$hours')"; 
      //Execute query 
      $result=mysql_query($qry); 
      if($result)
	  echo "Inserted Successfully";
      
	  
?>
</body>
</html> 